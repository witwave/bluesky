@extends('layouts.user')
@section('title')
    修改密码
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">修改密码</li>
    </ol>
    <!-- Form Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            修改密码
        </div>
        <div class="panel-body">
    <div>
        <fieldset>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" method="post" action="/user/password" id="fmUserPassword">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">旧密码</label>

                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="请输入旧密码" name="old_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">新密码</label>

                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="靖输入新密码" name="password" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">重复密码</label>

                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="请再次输入新密码" name="password_confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">修改密码</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
        </div>
    </div>
@endsection