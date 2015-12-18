@extends('layouts.user')
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">修改密码</li>
    </ol>
    <!-- Form Panel -->

    <div style="padding-top: 40px">
        <fieldset>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>注意!</strong> 您的输入有误.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">旧密码</label>

                    <div class="col-sm-6">
                        <input type="old_password" class="form-control" placeholder="请输入旧密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">新密码</label>

                    <div class="col-sm-6">
                        <input type="new_password" class="form-control" placeholder="靖输入新密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">重复密码</label>

                    <div class="col-sm-6">
                        <input type="new_password_repeat" class="form-control" placeholder="请再次输入新密码">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">确认</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

@endsection