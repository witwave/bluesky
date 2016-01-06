@extends('layouts.user')
@section('title')
    个人资料
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/index.html">会员中心</a></li>
        <li class="active">个人资料</li>
    </ol>

    <div class="panel panel-default">
        <div class="panel-heading">
            个人资料
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/user/profile" id="fmUserProfile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 col-md-2 control-label">昵称</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="nickname" value="{{ $user->nickname }}" id="nickname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 col-md-2 control-label">真实姓名</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">性别</label>
                    <div class="col-sm-10 col-md-5">
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="sex" value="0" {{ $user->sex==0?'checked':'' }} >先生
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="sex" value="1" {{ $user->sex==1?'checked':'' }}>女士
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="sex" value="2" {{ $user->sex==null || $user->sex==2 ?'checked':'' }}>保密
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">手机号码</label>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" class="form-control" name="mobile" value="{{ $user->mobile }}" id="mobile">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection