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
                        <h3 class="panel-title">登录</h3>
                    </div>
                    <div class="panel-body">
                        <p>

                        </p>
                        <!-- Login Form Starts -->
                        <form role="form"  method="POST" action="/auth/login">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="email" class="sr-only">邮箱</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="邮箱" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">密码</label>
                                <input type="password" placeholder="密码" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember"> 记住我
                            </div>
                            <button class="btn btn-black" type="submit">
                            登录
                            </button> <a href="/password/email"><small>忘记密码?</small></a>
                            <div class="form-group">
                                <p>
                                    <br>
                                    <a href="/auth/register"><small>还没有帐号，点击注册?</small></a>
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