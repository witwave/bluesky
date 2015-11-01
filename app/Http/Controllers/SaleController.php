<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Helpers\RegionHelper;

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


        if (Auth::user()) {
            $view = 'sale.checkout';
        } else {
            $view = 'sale.checkout-guest';
        }
        return view($view, array(
            'ship_fee' => $ship_fee,
            'pay_fee' => Cart::total() + $ship_fee,
            'cart' => $cart,
            'province' => $province
        ));
    }
}
