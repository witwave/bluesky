@extends('layouts.simple')
@section('content')
<div class="container" id="main-container">
    <!-- Login Form Section Starts -->
    <section class="login-area">
        <div class="row">
            <div class="col-sm-6">
                <!-- Login Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">注册</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                        </p>
                        <!-- Login Form Starts -->
                        <form method="POST" action="/auth/register" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="nickname" class="sr-only">姓名</label>
                                <input type="text" name="nickname" value="{{ old('nickname') }}" placeholder="姓名" id="nickname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">邮箱</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="邮箱" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">密码</label>
                                <input type="password" placeholder="密码" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="sr-only">重复密码</label>
                                <input type="password" placeholder="重复密码" id="password_confirmation" class="form-control">
                            </div>
                            <button class="btn btn-black" type="submit">
                            注册
                            </button>
                            <div class="form-group">
                                <p>
                                    <br>
                                    <a href="/auth/login"><small>已有帐号，请点击登录?</small></a>
                                </p>
                            </div>
                        </form>
                        <!-- Login Form Ends -->
                    </div>
                </div>
                <!-- Login Panel Ends -->
            </div>
        </div>
    </section>
    <!-- Login Form Section Ends -->
</div>
@endsection