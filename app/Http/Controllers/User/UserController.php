<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller {

	public function profile() {
		return view('user.profile');
	}

	public function order() {
		return view('user.order');
	}

	public function address() {
		return view('user.address');
	}

	public function credit() {
		return view('user.credit');
	}

	public function day() {
		return view('user.day');
	}

	public function password() {
		return view('user.password');
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
