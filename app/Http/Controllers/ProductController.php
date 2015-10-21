<?php

namespace App\Http\Controllers;

use App\Helpers\RImage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;

class ProductController extends Controller {

	public function view($id) {
		$product = Product::findOrFail(1);

		return view('product.view',
			[
				'product' => $product,
				'imagine' => new RImage()
			]
		);
	}
}
