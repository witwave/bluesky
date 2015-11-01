<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Helpers\RegionHelper;

class AjaxController extends Controller
{

    public function region()
    {
        $code = Input::get('code');
        if (is_numeric($code))
            return RegionHelper::getRegion($code);
    }
}
