<?php

namespace App\Http\Controllers;

use App\Helpers\RImage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;

class SiteController extends Controller {

	public function welcome() {
		/*
		$user = Auth::user();
		if ($user && $user->type == 3) {
		$query = DB::table('products')
		->join('images', function ($join) {
		$join->on('products.id', '=', 'images.imageable_id')->where('images.imageable_type', '=', 'App\Models\Product');
		})
		->select('products.id', 'name', 'partner_price as price', 'new_price', 'new_price_date', 'qty', 'images.path')
		->where('active', '=', 1);
		} else {
		$query = DB::table('products')
		->join('images', function ($join) {
		$join->on('products.id', '=', 'images.imageable_id')->where('images.imageable_type', '=', 'App\Models\Product');
		})
		->select('products.id', 'name', 'price', 'new_price', 'new_price_date', 'qty', 'images.path')
		->where('active', '=', 1);
		}
		$feature = $query->where('featured', '=', 1)->skip(0)->take(8)->get();
		$latest = $query->orderBy('products.created_at', 'desc')->skip(0)->take(8)->get();
		$trending = $query->orderBy('pv', 'desc')->skip(0)->take(8)->get();

		 */
		$featured = Product::where('active', 1)
			->where('featured', 1)
			->orderBy('created_at', 'desc')
			->take(8)
			->get();

		$latest = Product::where('active', 1)
			->orderBy('created_at', 'desc')
			->take(8)
			->get();

		$trending = Product::where('active', 1)
			->orderBy('pv', 'desc')
			->take(8)
			->get();

		return view('welcome',
			[
				'featured' => $featured,
				'latest' => $latest,
				'trending' => $trending,
				'imagine' => new RImage(),
				'user_type' => Auth::user() ? Auth::user()->type : 0,
			]
		);
	}
}
