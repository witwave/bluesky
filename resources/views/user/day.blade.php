@extends('layouts.user')
@section('title')
重要节日
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">重要节日</li>
    </ol>
    <!-- Form Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            重要节日
        </div>
        <div class="panel-body">


            <form class="form-horizontal" name="fmAddress" id="fmUserDay" method="post" action="/user/day">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $day->id }}">
                <div class="form-group">
                    <label for="inputReceiver"
                           class="col-sm-2 col-md-2  control-label">节日名称</label>

                    <div class="col-sm-10 col-md-4 ">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $day->name }}"
                               placeholder="始Ta的生日">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">日期</label>

                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="date" class="form-control"
                               value="{{ $day->date  }}"   data-call="jui-datepicker" placeholder=""
                               data-options="{{ $date_picker_options }}"
                               id="date" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-sm-2 col-md-2 control-label">备注</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="mark" class="form-control" value="{{ $day->mark}}" id="mark">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"  id="remind_enable" name="remind_enable" value="1" {{ $day->remind_enable==1?'checked':'' }}>  是否提醒
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">提前天数</label>

                        <div class="col-sm-4 col-md-2">
                        <input type="number" name="remind_beforeday" class="form-control"
                               value="{{ $day->remind_beforeday }}"
                               id="remind_beforeday" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">接收邮箱</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="email" name="remind_email" class="form-control"
                               value="{{ $day->remind_email  }}"
                               id="remind_email" placeholder="lucy@example.com">
                    </div>
                </div>
                <div class="form-group hide">
                    <label for="address" class="col-sm-2 control-label">提前手机</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="remind_mobile" class="form-control" value="{{ $day->remind_mobile  }}"  id="remind_mobile" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">保存节日</button>
                    </div>
                </div>
            </form>

            <div style="padding-top: 40px">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>节日名称</th>
                        <th>节日日期</th>
                        <th>提醒</th>
                        <th>接收邮箱</th>
                        <th>操作</th>
                        <th>备注</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($days as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td> {{ $item->remind_enable==1?'是':'否'}}</td>
                            <td>{{ $item->remind_email }}</td>
                            <td><a href="/user/day?id={{$item->id}}&action=edit">编辑</a><span> &nbsp; </span><a href="/user/day?id={{$item->id}}&action=remove">删除</a></td>
                            <td> {{ $item->mark}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
