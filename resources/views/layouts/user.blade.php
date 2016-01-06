@extends('layouts.main')
@section('content')

    <div id="main-container" class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        会员中心
                    </div>
                    <div class="list-group">
                        <a href="/user/order" class="list-group-item {{ str_contains(Request::path(),'order')?'active':'' }}">
                            <i class="fa fa-list"></i>  我的订单
                        </a>
                        <a href="/user/credit" class="list-group-item  {{ str_contains(Request::path(),'credit')?'active':'' }}" >
                            <span class="glyphicon glyphicon-credit-card"></span> 我的积分
                        </a>
                        <a href="/user/profile" class="list-group-item  {{ str_contains(Request::path(),'profile')?'active':'' }}">
                            <span class="glyphicon glyphicon-user"></span> 个人资料
                        </a>
                        <a href="/user/day" class="list-group-item  {{ str_contains(Request::path(),'day')?'active':'' }}">
                            <span class="glyphicon glyphicon-credit-card "></span> 重要节日
                        </a>
                        <a href="/user/address" class="list-group-item  {{ str_contains(Request::path(),'address')?'active':'' }}">
                            <span class="glyphicon glyphicon-credit-card"></span> 常用地址
                        </a>
                        <a href="/user/password" class="list-group-item  {{ str_contains(Request::path(),'password')?'active':'' }}">
                            <span class="glyphicon glyphicon-lock"></span> 修改密码
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                @yield('main')
            </div>
        </div>
    </div>
@endsection