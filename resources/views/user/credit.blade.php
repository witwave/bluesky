@extends('layouts.user')
@section('title')
我的积分
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">我的积分</li>
    </ol>
    <!-- Form Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            我的积分
        </div>
        <div class="panel-body">
          当前有积分: {{$credit}}
        </div>
    </div>
@endsection
