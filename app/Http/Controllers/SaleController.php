<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Helpers\RegionHelper;
use Illuminate\Http\Request;
use Validator;

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
            return redirect(array("/"));
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

        if (Auth::user()) {
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
            'times' => $times
        ));
    }

    public function store(Request $request)
    {


        $cart = Cart::content();
        if ($cart == null || count($cart) < 1) {
            return redirect(array("/"));
        }


        $validator = Validator::make($request->all(), [
            'receiver_name' => 'required',
            'receiver_province' => 'required',
            'receiver_city' => 'required',
            'receiver_address' => 'required',
            'receiver_mobile' => 'required',
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


        $user_id = Auth::user() ? Auth::user()->id : null;
        $user_type = 0;
        if ($user_id == null) {
            $user_type = 1;//游客订单
        }
        $mail_fee = 0;
        $total_price = Cart::total();

        $cartInfo = $this->getCartInfo($cart);
        $can_get_credit = $cartInfo['total_credit'];

        $self_get = Input::get('self_get', 0);
        if ($self_get == 0) {
            $ship_fee = $cartInfo['ship_fee'];
            $paid = $total_price + $ship_fee;
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


        $new_order = new Order;
        $new_order->user_id = $user_id;
        $new_order->paid = $paid;
        $new_order->transaction_id = $out_order_id;
        $new_order->payment_status = 'wait';

        $new_order->out_order_id = $out_order_id;
        $new_order->receiver_name = Input::get('receiver_name');
        $new_order->receiver_province = Input::get('receiver_province');
        $new_order->receiver_city = Input::get('receiver_city');
        $new_order->receiver_address = Input::get('receiver_address');
        $new_order->receiver_mobile = Input::get('receiver_mobile');
        $new_order->receiver_telephone = Input::get('receiver_phone');
        $new_order->booker_name = Input::get('booker_name');
        $new_order->booker_phone = Input::get('booker_phone');
        $new_order->booker_email = Input::get('booker_email');
        $new_order->require_send_day = Input::get('require_send_day');
        $new_order->require_send_type = Input::get('require_send_type');
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
                    $alipay->setQrPayMode('4'); //该设置为可选，添加该参数设置，支持二维码支付。

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

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                break;
        }
        return 'success';
    }

    /**
     * 同步通知
     */
    public function webReturn()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay return query data verification fail.', [
                'data' => Request::getQueryString()
            ]);
            return view('alipay.fail');
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify get data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no')
                ]);
                break;
        }

        return view('alipay.success');
    }

}
