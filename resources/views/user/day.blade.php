@extends('layouts.user')
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">修改密码</li>
    </ol>
    <!-- Form Panel -->
    <div style="padding-top: 40px">
        <p class="text-right"><a class="btn btn-primary" href="/user/day/add.html">新增重要节日</a></p>
        <table class="table table-bordered">

            <thead>
            <tr>
                <th>序号</th>
                <th>节日名称</th>
                <th>节日日期</th>
                <th>备注</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>生日</td>
                <td>10-10</td>
                <td>宝宝过生日</td>
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