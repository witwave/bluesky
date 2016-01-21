<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\Order;
use Input;

class OrderController extends Controller {

	public function view($id) {

		$user=Auth::user();
		if ($user){
			if ($user->type>0){
					$order=Order::where('out_order_id','=',$id)->first();
			}else{
				 //普通用户只能看自己的订单
					$order=Order::where('out_order_id','=',$id)->where('user_id','=',$user->id)->first();
			}
		}else {
			  //guest 要通过手机号加订单号查看订单
				$order=Order::where('out_order_id','=',$id)->where('booker_phone','=',Input::get('mobile'))->first();
		}

		if ($order){
			return view('order.index',[
				'order'=>$order
			]);
		}else{
			return 'error';
		}

	}
}
