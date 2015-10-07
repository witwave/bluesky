<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;

class SaleController extends Controller {

	public function checkout() {

		return view('sale.checkout')->with('cart', Cart::content());
	}

}
