<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Auth;
use App\Helpers\RegionHelper;
use Illuminate\Support\Facades\Input;
use DB;
use App\Models\UserDay;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Request;
use Validator;

class UserController extends Controller
{

    public function profile()
    {
        return view('user.profile',[
            'user'=>Auth::user()
        ]);
    }

    public function storeProfile(){

        $user=Auth::user();

        $user->nickname=Input::get('nickname');
        $user->name=Input::get('name');
        $user->sex=Input::get('sex');
        $user->mobile=Input::get('mobile');
        $user->save();
        return  redirect('/user/profile')->with('msg','修改成功');
    }

    public function order()
    {
        $user=Auth::user();
        $orders=Order::where('user_id', '=', $user->id)->orderBy('id','desc')->get();
        return view('user.order')->with('orders',$orders);
    }

    public function credit()
    {
        $user=Auth::user();
        $credit=$user->total_credit-$user->used_credit;
        return view('user.credit',[
          'credit'=>$credit
        ]);
    }

    public function address()
    {
        $province = RegionHelper::getProvince();
        $id = Input::get('id');
        $action = Input::get('action');
        $city = [];
        $address=new UserAddress();
        if ($id) {
            if ($action == 'edit') {
                $address = UserAddress::find($id);
                $city = RegionHelper::getRegion($address->province);
            } else if ($action == 'remove') {
                UserAddress::destroy($id);
            }

        }
        $addresses = UserAddress::all();
        return view('user.address', [
            'addresses' => $addresses,
            'province' => $province,
            'address'=>$address,
            'city' => $city
        ]);
    }


    /**
     * 增加新地址
     */
    public function storeAddress()
    {
        $userId = Auth::user()->id;

        $id=Input::get('id', null);
        $default= Input::get('default', 0);
        if ($id){
            $address = UserAddress::find($id);
            if ($address->default==0 && $default==1){
                DB::table('user_addresses')->where('user_id', '=', $userId)->update(array('default' => 0));
            }


        }else{
            $address = new UserAddress();
            if ($default== 1) {
                DB::table('user_addresses')->where('user_id', '=', $userId)->update(array('default' => 0));
            }
        }
        $address->user_id = $userId;
        $address->receiver_name = Input::get('receiver_name');
        $address->province = Input::get('receiver_province');
        $address->city = Input::get('receiver_city');
        $address->address = Input::get('receiver_address');
        $address->receiver_mobile = Input::get('receiver_mobile');
        $address->receiver_telephone = Input::get('receiver_phone');
        $address->postcode = '000000';
        $region = DB::select('select region_code,region_name from region where region_code = ? or region_code=?  order by region_code limit 2', array($address->province, $address->city));
        $address->name = $region[0]->region_name . $region[1]->region_name;
        $address->default=$default;


        $result = $address->save();
        if (Request::ajax()) {
            if ($result) return $address;
            else return 0;
        }else{
            return redirect('/user/address');
        }
    }


    public function day()
    {
        $date_picker_options = array("numberOfMonths" => 1,
            "showButtonPanel" => false,
            "dateFormat" => 'yy-mm-dd',
            "clearText" => '清除',
            "closeText" => '关闭',
            "yearSuffix" => '年',
            "showMonthAfterYear" => true,
            "monthNames" => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            "dayNames" => ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            "dayNamesShort" => ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            "dayNamesMin" => ['日', '一', '二', '三', '四', '五', '六'],
            "todayText" => '今天'
        );
        $id=Input::get('id', null);
        $action = Input::get('action');
        if ($id){
            if ($action == 'remove') {
                UserDay::destroy($id);
                $day=new UserDay();
            }else{
                $day = UserDay::find($id);
            }
        }else{
            $day=new UserDay();
            $day->date=Date('Y-m-d');
            $day->remind_beforeday=7;
            $day->remind_enable=1;
            $day->remind_email=Auth::user()->email;
        }
        return view('user.day',[
            'day'=>$day,
            'days'=>UserDay::all(),
            'date_picker_options' => json_encode($date_picker_options)
        ]);
    }

    public function storeDay(){

        $validator = Validator::make(Request::all(), [
            'name' => 'required',
            'date' => 'required',
            'remind_enable' => 'remind_enable',

        ]);
        $userId = Auth::user()->id;
        $id=Input::get('id', null);
        if ($id){
            $day = UserDay::find($id);

        }else{
            $day = new UserDay();
        }

        $day->user_id = $userId;
        $day->name = Input::get('name');
        $day->date = Input::get('date');
        $day->remind_beforeday = Input::get('remind_beforeday');
        $day->remind_enable = Input::get('remind_enable',0);
        $day->remind_email = Input::get('remind_email');
        $day->remind_mobile = Input::get('remind_mobile');
        $day->mark = Input::get('mark');
        $result = $day->save();
        if (Request::ajax()) {
            if ($result) return $day;
            else return 0;
        }else{
            return redirect('/user/day');
        }
    }

    public function password()
    {
        return view('user.password');
    }

    public function changePassword()
    {

        $validator= Validator::make(Request::all(),[
            'old_password'=>'required',
            'password'=>'required|alpha_num|max:12|min:6|confirmed',
            'password_confirmation'=>'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect('/user/password')
                ->withErrors($validator)
                ->withInput();
        }

        $oldPassword = Input::get('old_password');
        $newPassword = Input::get('password');
        if (Auth::check()) {
            if (Auth::attempt(array(
                'email' => Auth::user()->email,
                'password' => $oldPassword
            ))
            ) {
                $user=Auth::user();
                $user->password = bcrypt($newPassword);
                $user->save();
                Auth::logout();
                return redirect('/auth/login');
            }else{
              return  redirect('/user/password')->withErrors(['change_password_error'=>'旧密码不正确，修改失败'])
                  ->withInput();
                var_dump('herer111');
            }
        }else{
          return redirect('/auth/login');
        }

    }

}
