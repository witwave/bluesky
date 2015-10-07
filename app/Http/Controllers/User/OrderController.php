<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class OrderController extends Controller {

	public function show() {
		return "show order";
	}

	public function updateProfile() {
		$profile = Post::findOrFail($id);

		if (Gate::denies('update-profile', $profile)) {
			abort(403);
		}

		if (Auth::user()) {
			// Auth::user() returns an instance of the authenticated user...
		}

		if (Auth::viaRemember()) {
			//
		}
	}
}
