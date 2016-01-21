<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class OrderController extends Controller {

	public function show($id) {

		$order=Order::where('out_order_id','=',$id);
		retrun view('order.index',[
			'order'=>$order
		])
	}


}
