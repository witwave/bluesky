<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Helpers\RegionHelper;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation;

class SaleController extends Controller
{

    public function checkout()
    {
        $ship_type = Input::get('ship_type', 0);//送货上门
        $ship_fee = 0;
        $cart = Cart::content();
        if ($ship_type == 0) {
            foreach ($cart as $item) {
                $ship_fee += $item->options->ship_fee + ($item->qty - 1) * $item->options->ship_one_fee;
            }
        }

        $province = RegionHelper::getProvince();

        $now=time();



        $date_picker_options = array("numberOfMonths" => 1,
            "showButtonPanel" => false,
            "dateFormat" => 'yy-mm-dd',
            "clearText" => '清除',
            "closeText" => '关闭',
            "yearSuffix" => '年',
            "showMonthAfterYear" => true,
            "defaultDate" => date("Y-m-d",strtotime("+1 day")),
            "minDate" => date("Y-m-d",time()),
            "maxDate" =>  date("Y-m-d",strtotime("+1 month")),
            "monthNames" => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            "dayNames" => ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            "dayNamesShort" => ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            "dayNamesMin" => ['日', '一', '二', '三', '四', '五', '六'],
            "todayText"=>'今天'
        );

        $times=array('9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00');

        if (Auth::user()) {
            $view = 'sale.checkout';
        } else {
            $view = 'sale.checkout-guest';
        }
        return view($view, array(
            'ship_fee' => $ship_fee,
            'pay_fee' => Cart::total() + $ship_fee,
            'cart' => $cart,
            'province' => $province,
            'date_picker_options' => json_encode($date_picker_options),
            'require_send_day'=>date("Y-m-d",strtotime("+1 day")),
            'times'=>$times
        ));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
