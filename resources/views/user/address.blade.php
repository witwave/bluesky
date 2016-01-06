@extends('layouts.user')
@section('title')
    我的常用收货地址
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">常用地址</li>
    </ol>
    <!-- Form Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            常用地址
        </div>
        <div class="panel-body">


            <form class="form-horizontal" name="fmAddress" id="fmUserAddress" method="post" action="/user/address">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $address->id }}">
                <div class="form-group">
                    <label for="inputReceiver"
                           class="col-sm-2 col-md-2  control-label">收货人</label>

                    <div class="col-sm-10 col-md-4 ">
                        <input type="text" class="form-control" id="receiver_name" name="receiver_name" value="{{ $address->receiver_name }}"
                               placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所在地区</label>

                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-4">
                                <select class="form-control" id="receiver_province"
                                        name="receiver_province" data="province" ref="#receiver_city">
                                    <option value="">请选择</option>
                                    @foreach($province as $item)
                                        @if($address->province== $item->region_code)
                                            <option value="{{$item->region_code}}"
                                                    selected>{{$item->region_name}}</option>
                                        @else
                                            <option value="{{$item->region_code}}">{{$item->region_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" id="receiver_city"
                                        name="receiver_city">
                                    <option value="">请选择</option>
                                    @foreach($city as $item)
                                        @if($address->city== $item->region_code)
                                            <option value="{{$item->region_code}}"
                                                    selected>{{$item->region_name}}</option>
                                        @else
                                            <option value="{{$item->region_code}}">{{$item->region_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">详细地址</label>

                    <div class="col-sm-10">
                        <input type="text" name="receiver_address" class="form-control"
                               value="{{ $address->address  }}"
                               id="receiver_address" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-sm-2 col-md-2 control-label">手机号码</label>

                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="receiver_mobile" class="form-control"
                               value="{{ $address->receiver_mobile}}"
                               id="receiver_mobile">
                    </div>

                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-2 col-md-2 control-label">电话</label>

                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="receiver_phone" class="form-control"
                               value="{{ $address->receiver_telephone  }}"
                               id="receiver_phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="default" value="1" {{ $address->default==1?'checked':'' }}> 设置为默认收货地址
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-primary">保存地址</button>

                    </div>
                </div>
            </form>

            <div style="padding-top: 40px">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>收件人</th>
                        <th>所在区域</th>
                        <th>详细地址</th>
                        <th>电话/手机</th>

                        <th>操作</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($addresses as $i=>$item)
                        <tr>
                            <td>{{ $item->receiver_name }}</td>
                            <td>{{ $item->name }}</td>
                            <td> {{ $item->address}}</td>
                            <td>{{ $item->receiver_mobile }} {{ $item->recevier_telephone}}</td>
                            <td><a href="/user/address?id={{$item->id}}&action=edit">编辑</a><span> &nbsp; </span><a href="/user/address?id={{$item->id}}&action=remove">删除</a></td>
                            <td>{{ $item->default==1?'默认地址':'' }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection