<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;

class CartController extends Controller {

	public function index() {
		Cart::add('192ao12', 'Product 1', 1, 9.99);

		return view('sale.cart')->with('cart', Cart::content());
	}

	public function add() {

		Cart::add('293ad', 'Product 1', 1, 9.99, array('size' => 'large'));
		Cart::add('192ao12', 'Product 1', 1, 9.99);

	}

	public function remove() {
		$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
		Cart::remove($rowId);
	}

	public function update() {

		$rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

		//Cart::update($rowId, 2);

		//Cart::update($rowId, array('name' => 'Product 1'));
		//
		//Cart::destroy()
	}

}
