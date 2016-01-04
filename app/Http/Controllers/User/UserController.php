<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;
use DB;

class UserController extends Controller
{

    public function profile()
    {
        return view('user.profile');
    }

    public function order()
    {
        return view('user.order');
    }

    public function address()
    {
        return view('user.address');
    }

    public function credit()
    {
        return view('user.credit');
    }

    public function day()
    {
        return view('user.day');
    }

    public function password()
    {
        return view('user.password');
    }


    public function updateProfile()
    {
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

    /**
     * 增加新地址
     */
    public function storeAddress()
    {
        $userId= Auth::user()->id;

        $address = new UserAddress();
        $address->id=Input::get('id',null);
        $address->user_id =$userId;
        $address->receiver_name = Input::get('receiver_name');
        $address->province = Input::get('receiver_province');
        $address->city = Input::get('receiver_city');
        $address->address = Input::get('receiver_address');
        $address->receiver_mobile = Input::get('receiver_mobile');
        $address->receiver_telephone = Input::get('receiver_phone');
        $address->postcode = '000000';
        $address->name = 'N/A';
        $address->default = Input::get('default', '0');
        if   ($address->default==1){
            DB::table('user_addresses')->where('user_id', '=', $userId)->update(array('default' => 0));
        }
        $result = $address->save();
        if ($result) return $address;
        else return 0;
    }
}
