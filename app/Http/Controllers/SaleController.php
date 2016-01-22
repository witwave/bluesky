<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\UserAddress;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Helpers\RegionHelper;
use Illuminate\Http\Request;
use Validator;
use Log;
use App\Models\Transation;

use Omnipay\Omnipay;

class SaleController extends Controller
{


    private function getCartInfo($cart)
    {
        $ship_fee = 0;
        $total_credit = 0;
        foreach ($cart as $item) {
            $ship_fee += $item->options->ship_fee + ($item->qty - 1) * $item->options->ship_one_fee;
            $total_credit += $item->options->credit * $item->qty;
        }
        return [
            'ship_fee' => $ship_fee,
            'total_credit' => $total_credit
        ];
    }

    public function checkout()
    {
        $cart = Cart::content();
        if ($cart == null || count($cart) < 1) {
            return redirect("/");
        }

        $cartInfo = $this->getCartInfo($cart);
        $ship_fee = $cartInfo['ship_fee'];
        $total_credit = $cartInfo['total_credit'];

        $province = RegionHelper::getProvince();


        $date_picker_options = array("numberOfMonths" => 1,
            "showButtonPanel" => false,
            "dateFormat" => 'yy-mm-dd',
            "clearText" => '清除',
            "closeText" => '关闭',
            "yearSuffix" => '年',
            "showMonthAfterYear" => true,
            "defaultDate" => date("Y-m-d", strtotime("+1 day")),
            "minDate" => date("Y-m-d", time()),
            "maxDate" => date("Y-m-d", strtotime("+1 month")),
            "monthNames" => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            "dayNames" => ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            "dayNamesShort" => ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            "dayNamesMin" => ['日', '一', '二', '三', '四', '五', '六'],
            "todayText" => '今天'
        );

        $times = array('9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00');

        $addresses=null;
        if (Auth::user()) {
            $addresses=UserAddress::all();
            $view = 'sale.checkout';
        } else {
            $view = 'sale.checkout-guest';
        }
        return view($view, array(
            'ship_fee' => $ship_fee,
            'pay_fee' => Cart::total() + $ship_fee,
            'total_credit' => $total_credit,
            'cart' => $cart,
            'province' => $province,
            'date_picker_options' => json_encode($date_picker_options),
            'require_send_day' => date("Y-m-d", strtotime("+1 day")),
            'times' => $times,
            'addresses'=>$addresses
        ));
    }

    public function store(Request $request)
    {


        $cart = Cart::content();
        if ($cart == null || count($cart) < 1) {
            return redirect("/");
        }



        $validator = Validator::make($request->all(), [
            'receiver_name' => 'required_if:address_id,null',
            'receiver_province' => 'required_if:address_id,null',
            'receiver_city' => 'required_if:address_id,null',
            'receiver_address' => 'required_if:address_id,null',
            'receiver_mobile' => 'required_if:address_id,null',

            'address_id' => 'required_if:receiver_name,null',
            //'receiver_phone' => 'required',
            'booker_name' => 'required',
            'booker_phone' => 'required',
            'booker_email' => 'email',
            'require_send_day' => 'required',
            'require_send_type' => 'required',
            'require_send_time' => 'required_if:require_send_type,定时',
            'card' => 'max:500',
            'special_content' => 'max:120',
            'self_get' => 'required',
            'store_province' => 'required_if:self_get,1',
            'store_city' => 'required_if:self_get,1',
            'partner_id' => 'required_if:self_get,1',
            'pay_type' => 'required',
        ]);

        $redirect_url = '/checkout.html';
        if ($validator->fails()) {
            return redirect('/checkout.html')
                ->withErrors($validator)
                ->withInput();
        }

        $new_order = new Order;

        $user_id = Auth::user() ? Auth::user()->id : null;
        $user_type = 0;
        if ($user_id == null) {
            $user_type = 1;//游客订单
            $new_order->receiver_name = Input::get('receiver_name');
            $new_order->receiver_province = Input::get('receiver_province');
            $new_order->receiver_city = Input::get('receiver_city');
            $new_order->receiver_address = Input::get('receiver_address');
            $region = DB::select('select region_code,region_name from region where region_code = ? or region_code=?  order by region_code limit 2', array(  $new_order->receiver_province, $new_order->receiver_city));
            $address->receiver_address = $region[0]->region_name . $region[1]->region_name.Input::get('receiver_address');

            $new_order->receiver_mobile = Input::get('receiver_mobile');
            $new_order->receiver_telephone = Input::get('receiver_phone');
        }else{
           $address= UserAddress::find((int)Input::get('address_id'));
            $new_order->receiver_name =$address->receiver_name;
            $new_order->receiver_province = $address->province;
            $new_order->receiver_city =$address->city;
            $new_order->receiver_address =$address->name.$address->address;
            $new_order->receiver_mobile =$address->receiver_mobile;
            $new_order->receiver_telephone = $address->receiver_telephone;;
        }
        $mail_fee = 0;
        $total_price = Cart::total();

        $cartInfo = $this->getCartInfo($cart);
        $can_get_credit = $cartInfo['total_credit'];

        $self_get = Input::get('self_get', 0);
        if ($self_get == 0) {
            $mail_fee = $cartInfo['ship_fee'];
            $paid = $total_price + $mail_fee;
        } else {
            $paid = $total_price;
        }

        $pay_type = Input::get('pay_type');
        $out_order_id = date('YmdHis') . mt_rand(1000, 9999);
        switch ($pay_type) {
            case "1":
                break;
            case "2":
                break;
            case "3":
                break;
        }



        $new_order->user_id = $user_id;
        $new_order->paid = $paid;
        $new_order->transaction_id = $out_order_id;
        $new_order->payment_status = 'wait';

        $new_order->out_order_id = $out_order_id;

        $new_order->booker_name = Input::get('booker_name');
        $new_order->booker_phone = Input::get('booker_phone');
        $new_order->booker_email = Input::get('booker_email');
        $new_order->require_send_day = Input::get('require_send_day');
        $new_order->require_send_type = Input::get('require_send_type');
        $new_order->require_send_time = Input::get('require_send_time');
        $new_order->card = Input::get('card');
        $new_order->special_content = Input::get('special_content');
        $new_order->self_get = Input::get('self_get');
        $new_order->partner_id = Input::get('partner_id');
        $new_order->pay_type = Input::get('pay_type');
        $new_order->product_total_price = $total_price;
        $new_order->can_get_credit = $can_get_credit;
        $new_order->mail_fee = $mail_fee;
        $new_order->user_type = $user_type;
        $new_order->paid = $paid;////最终付款价
        $new_order->mobile = Input::get('booker_phone');
        $new_order->payment_status = 'wait';
        $new_order->has_special = Input::get('special_content', '') != '' ? true : false;

        $result = $new_order->save();


        if ($result) {

            $name =[];

            foreach ($cart as $item) {
                $model = Product::find($item->id);
                if ($model != null) {
                    $orderProduct = new  OrderProduct;
                    $orderProduct->order_id = $new_order->id;
                    $orderProduct->product_id = $item->id;
                    $orderProduct->mail_fee = $model->ship_fee + ($item->qty - 1) * $model->ship_one_fee;
                    $orderProduct->price = $model->price;
                    $orderProduct->name = $model->name;
                    $orderProduct->qty=$item->qty;
                    $name[] = $model->name;
                    $orderProduct->credit = $model->credit * $item->qty;
                    $orderProduct->total_price = $model->price * $item->qty;
                    $orderProduct->save();
                }
            }


            Cart::destroy();
            switch ($pay_type) {
                case "1":
//                    $gateway = Omnipay::create('Alipay_Express');
//                    $gateway->setPartner('8888666622221111');
//                    $gateway->setKey('your**key**here');
//                    $gateway->setSellerEmail('merchant@example.com');
//                    $gateway->setReturnUrl('http://www.bdbeloved.com/alipay/return');
//                    $gateway->setNotifyUrl('http://www.bdbeloved.com/alipay/notify');
//
//                    //For 'Alipay_MobileExpress', 'Alipay_WapExpress'
//                    //$gateway->setPrivateKey('/such-as/private_key.pem');
//
//                    $options = [
//                        'out_trade_no' => $out_order_id, //your site trade no, unique
//                        'subject' => $name, //order title
//                        'total_fee' => $paid, //order total fee
//                    ];
//
//                    $response = $gateway->purchase($options)->send();
//                    echo $response->getRedirectUrl();
//                    var_dump($response->getRedirectData()) ;

                    // 创建支付单。
                    $alipay = app('alipay.web');
                    $alipay->setOutTradeNo($out_order_id);
                    $alipay->setTotalFee($paid);
                    $alipay->setSubject($name[0]);
                    $alipay->setBody(implode(",",$name));
                    //$alipay->setQrPayMode('4'); //该设置为可选，添加该参数设置，支持二维码支付。

                    // 跳转到支付页面。
                    return redirect()->to($alipay->getPayLink());
                    break;
                default:
                    break;
            }

        } else {
            $errors = new \Illuminate\Support\MessageBag;
            $errors->add('checkoutError',
                "系统出了会小差，请重试"
            );
            return redirect('/checkout.html')
                ->withErrors($errors)
                ->withInput();
        }
    }


    /**
     * 异步通知
     */
    public function webNotify()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => Request::instance()->getContent()
            ]);
            return 'fail';
        }
        $this->saveTrans();
        $out_trade_no=Input::get('out_trade_no');
        $payment_status='wait';
        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                $payment_status='success';
                break;
           default:
                $payment_status='fail';
                break;
        }
        Order::update(array('out_order_id'=>$out_trade_no),array('payment_status'=>$payment_status,'payment_time'=>date('Y-m-d H:i:s')));
        return 'success';
    }


    private function saveTrans(){
      $trans=new Transation();
      $trans->is_success=Input::get('is_success');
      $trans->sign_type=Input::get('sign_type');
      $trans->out_trade_no=Input::get('out_trade_no');
      $trans->subject=Input::get('subject');
      $trans->payment_type=Input::get('payment_type');
      $trans->exterface=Input::get('exterface');
      $trans->trade_no=Input::get('trade_no');
      $trans->trade_status=Input::get('trade_status');
      $trans->notify_id=Input::get('notify_id');
      $trans->notify_time=Input::get('notify_time');
      $trans->notify_type=Input::get('notify_type');
      $trans->seller_email=Input::get('seller_email');
      $trans->buyer_email=Input::get('buyer_email');
      $trans->seller_id=Input::get('seller_id');
      $trans->buyer_id=Input::get('buyer_id');
      $trans->is_success=Input::get('is_success');
      $trans->total_fee=Input::get('total_fee');
      $trans->extra_common_param=Input::get('extra_common_param');
      $trans->body=Input::get('body');
      $trans->agent_user_id=Input::get('agent_user_id');
      $trans->save();
    }

    /**
     *同步通知
     *WAIT_BUYER_PAY	交易创建，等待买家付款。
     *TRADE_CLOSED	在指定时间段内未支付时关闭的交易；
     *在交易完成全额退款成功时关闭的交易。
     *TRADE_SUCCESS	交易成功，且可对该交易做操作，如：多级分润、退款等。
     *TRADE_PENDING	等待卖家收款（买家付款后，如果卖家账号被冻结）。
     *TRADE_FINISHED	交易成功且结束，即不可再做任何操作。
     */
    public function webReturn()
    {
        // 验证请求。
        if (!app('alipay.web')->verify()) {
            Log::notice('Alipay return query data verification fail.', [
                'data' => Input::all()
            ]);
            return  Input::all();
        }
        $this->saveTrans();
        $out_trade_no=Input::get('out_trade_no');
        $payment_status='wait';
        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_CLOSED':
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify get data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                $payment_status='success';
                break;
           default:
                $payment_status='fail';
                break;
        }
        $result = Order::update(array('out_order_id'=>$out_trade_no),array('payment_status'=>$payment_status,'payment_time'=>date('Y-m-d H:i:s')));
        return view('order.index',[
          'order'=>Order::where('out_order_id','=',$out_trade_no)->first()
        ]);
    }


    public function pay($id){
      $order=Order::where('out_order_id','=',$id)->first();
      if (!$order){
         return '找不到订单'+$id;
      }
      $pay_type=Input::get('pay_type',$order->pay_type);
      switch ($pay_type) {
          case "1":
              // 创建支付单。
              $alipay = app('alipay.web');
              $alipay->setOutTradeNo($id);
              $alipay->setTotalFee($order->paid);
              $alipay->setSubject($order->products[0]->name);
              $alipay->setBody($order->products[0]->name);
              //$alipay->setQrPayMode('4'); //该设置为可选，添加该参数设置，支持二维码支付。
              // 跳转到支付页面。
              return redirect()->to($alipay->getPayLink());
              break;
          default:
              break;
      }

    }

}
