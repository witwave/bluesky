<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {

	public function show() {
		return "show profile";
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
