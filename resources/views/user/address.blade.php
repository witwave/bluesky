@extends('layouts.user')
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">修改密码</li>
    </ol>
    <!-- Form Panel -->

    <div style="padding-top: 40px">
        <p class="text-right"><a class="btn btn-primary" href="/user/address/add.html">新增收货地址</a></p>
        <table class="table table-bordered">

            <thead>
            <tr>
                <th>序号</th>
                <th>收件人姓名</th>
                <th>收件人电话</th>
                <th>详细地址</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>张三</td>
                <td>13482839253</td>
                <td>上海浦东康桥路1299号</td>
                <td><a href="">编辑</a><span>  </span><a href="">删除</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>张三</td>
                <td>13482839253</td>
                <td>上海浦东康桥路1299号</td>
                <td><a href="">编辑</a><span>  </span><a href="">删除</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>张三</td>
                <td>13482839253</td>
                <td>上海浦东康桥路1299号</td>
                <td><a href="">编辑</a><span>  </span><a href="">删除</a></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection