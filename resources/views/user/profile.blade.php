@extends('layouts.user')
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/index.html">会员中心</a></li>
        <li class="active">我的订单</li>
    </ol>

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 col-md-2 control-label">昵称</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="nickname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 col-md-2 control-label">真实姓名</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">性别</label>
                    <div class="col-sm-10 col-md-5">
                        <div class="checkbox-inline">
                            <label>
                                <input type="checkbox" name="sex" value="0">先生
                            </label>
                        </div>
                        <div class="checkbox-inline">
                            <label>
                                <input type="checkbox" name="sex" value="1">女士
                            </label>
                        </div>
                        <div class="checkbox-inline">
                            <label>
                                <input type="checkbox" name="sex" value="2">保密
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">手机号码</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="mobile">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection