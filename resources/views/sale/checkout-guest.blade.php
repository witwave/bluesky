@extends('layouts.main')
@section('title')
    订单结算页
@endsection
@section('content')
    <section class="page-info-block boxed-section">
        <!-- Container -->
        <div class="container cont-pad-x-15">
            <!-- Breadcrumb -->
            <ol class="breadcrumb pull-left">
                <li><a href="/"><i class="ti ti-home"></i></a></li>
                <li class="active">填写订单信息</li>
            </ol>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Container -->
    </section>
    <section class="content-block default-bg">
        <div class="container cont-pad-y-sm">
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-danger btn-lg btn-block"> 无需注册，轻松下单</button>
                </div>
                <div class="col-md-6">
                    <div class="text-center"
                         style="background-color: #CCCCCC;line-height: 24px;padding-top: 6px;padding-bottom: 6px">
                        已是会员？ <a class="btn btn-danger " href="/auth/login?return={{ Request::getRequestUri()}}">
                            立即登录 </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-block default-bg">
        <!-- Container -->
        <div class="container cont-pad-y-sm">
            <!-- Row -->
            <div class="row">
                <form method="POST" action="/checkout" id="checkoutForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">填写订单信息</div>
                            <div class="panel-body">
                                <strong>收货人信息</strong>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-horizontal" name="fmAddress">
                                            <div class="form-group">
                                                <label for="inputReceiver"
                                                       class="col-sm-2 col-md-2  control-label">收货人</label>

                                                <div class="col-sm-10 col-md-4 ">
                                                    <input type="text" name="receiver" class="form-control"
                                                           id="receiver_name" name="receiver_name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">所在地区</label>

                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="receiver_province"
                                                                    name="receiver_province" data="province"
                                                                    ref="#receiver_city">
                                                                <option value="">请选择</option>
                                                                @foreach($province as $item)
                                                                    <option value="{{$item->region_code}}">{{$item->region_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="receiver_city"
                                                                    name="receiver_city">
                                                                <option value="">请选择</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="col-sm-2 control-label">详细地址</label>

                                                <div class="col-sm-10">
                                                    <input type="text" name="receiver_address" class="form-control"
                                                           id="receiver_address" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile" class="col-sm-2 col-md-2 control-label">手机号码</label>

                                                <div class="col-sm-10 col-md-4">
                                                    <input type="text" name="receiver_mobile" class="form-control"
                                                           id="receiver_mobile">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-2 col-md-2 control-label">电话</label>

                                                <div class="col-sm-10 col-md-4">
                                                    <input type="text" name="receiver_phone" class="form-control"
                                                           id="receiver_phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="button" class="btn btn-danger">保存收货人信息</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-2 col-md-2 control-label">收货地址</label>
                                                <div class="col-sm-10 col-md-10">
                                                   <p style="padding-top: 8px">曾丹丹，86-13482839254，上海 上海市 浦东新区 康桥镇 康杉路151弄 康馨花园 22-502 ，000000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <strong>订购人信息</strong>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="booker_name"
                                                       name="booker_name" placeholder="您的姓名"
                                                       style="margin-right:5px">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="您的联系电话"
                                                       id="booker_phone" name="booker_phone"
                                                       style="margin-right:5px">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="您的电子邮箱"
                                                       id="booker_email" name="booker_email"
                                                       style="margin-right:5px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <strong>配送信息</strong>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div>
                                                <div class="form-group col-sm-2">
                                                    <label>配送日期</label>
                                                    <input type="text" name="require_send_day"
                                                           value="{{ $require_send_day }}" class="form-control input-sm"
                                                           data-call="jui-datepicker" placeholder=""
                                                           data-options="{{ $date_picker_options }}">
                                                </div>
                                                <div class="form-group col-sm-10">
                                                    <label>配送时段</label>

                                                    <div>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="require_send_type"
                                                                   id="require_send_type" value="不限" checked> 不限
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="require_send_type"
                                                                   id="require_send_type" value="上午"> 上午
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="require_send_type"
                                                                   id="require_send_type" value="下午"> 下午
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="require_send_type"
                                                                   id="require_send_type" value="晚上"> 晚上
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="require_send_type"
                                                                   id="require_send_type" value="定时"> 定时
                                                        </label>
                                                        <label class="radio-inline">
                                                        <select  name="require_send_time"
                                                                 id="require_send_time" class="form-control">
                                                            <option>请选择</option>
                                                            @foreach($times as $item)
                                                                <option value="{{$item}}">{{$item}}</option>
                                                            @endforeach
                                                        </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>贺卡内容</label>
                                                    <textarea class="form-control" rows="3" name="card"
                                                              placeholder="如需署名,请写在留言后面"></textarea>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>留言</label>
                                                    <input class="form-control" name="special_content"
                                                           placeholder="如有特殊要求请注明,我们尽量满足，120字以内:)"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <strong>支付及配送 </strong>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">配送方式</label>

                                                <div class="col-sm-10">
                                                    <div class="radio">
                                                        <label class="radio-line">
                                                            <input value="" name="self_get" type="radio" checked="true"
                                                                   value="false">送货上门
                                                        </label>
                                                        <label class="radio-line">
                                                            <input value="" name="self_get" type="radio" value="true">上门自取
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="store_province"
                                                                    name="store_province" ref="#store_city"
                                                                    data="province">
                                                                <option value="">请选择</option>
                                                                @foreach($province as $item)
                                                                    <option value="{{$item->region_code}}">{{$item->region_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="store_city" data="partner"
                                                                    ref="#partner_id">
                                                                <option value="">请选择</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <br/>
                                                            <select class="form-control" id="partner_id"
                                                                    name="partner_id">
                                                                <option value="">请选择门店</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">支付方式</label>

                                                <div class="col-sm-10">
                                                    <div class="radio">
                                                        <label>
                                                            <input value="支付宝" name="pay_type" type="radio" checked>支付宝
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input value="微信支付" name="pay_type" type="radio"
                                                                      disabled>微信支付
                                                            <small>(紧张开发中)</small>
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input value="网银" name="pay_type" type="radio" disabled>网银
                                                            <small>(紧张开发中)</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <strong>商品清单 </strong>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="cart-contents table" id="cart">
                                            <thead>
                                            <tr>
                                                <th class="hidden-xs">图片</th>
                                                <th>描述</th>
                                                <th>数量</th>
                                                <th class="hidden-xs">单价</th>
                                                <th>总价</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $total_credit = 0?>
                                            @foreach($cart as $row)
                                                <?php $total_credit += $row->options->credit * $row->qty?>
                                                <tr>
                                                    <td class="image hidden-xs">
                                                        <img src="{{ $row->options->image}}" alt="{{ $row->name }}">
                                                        {{$row->options->has('size') ? $row->options->size : ''}}
                                                    </td>
                                                    <td class="details">
                                                        <div class="clearfix">
                                                            <div class="pull-left no-float-xs">
                                                                <a href="/product/{{$row->id}}.html"
                                                                   class="title">{{$row->name}}</a>

                                                                <span>商品编码: {{$row->options->sku}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="qty">
                                                        {{ $row->qty }}
                                                    </td>
                                                    <td class="unit-price hidden-xs"><span
                                                                class="currency">￥</span> {{$row->price}}
                                                    </td>
                                                    <td class="total-price"><span
                                                                class="currency">￥</span>{{$row->subtotal}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <style>
                                            dl.dl-horizontal > dt {
                                                margin: 0 0 10px 0;
                                                padding: 0;
                                                line-height: 14px;
                                            }
                                        </style>
                                        <br/>
                                        <dl class="dl-horizontal pull-right">
                                            <dt>商品总价:</dt>
                                            <dd>￥{{Cart::total()}}</dd>
                                            <dt>可获得积分:</dt>
                                            <dd>{{$total_credit}}</dd>
                                            <dt>运费:</dt>
                                            <dd>{{$ship_fee}}</dd>
                                            <dt>共计:</dt>
                                            <dd>￥{{$pay_fee}}</dd>
                                        </dl>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="cart-buttons clearfix">
                            <button type="submit" class="btn btn-base checkout"><i
                                        class="icon-left fa fa-shopping-cart"></i>提交订单
                            </button>
                            <a class="btn btn-primary checkout" href="cart.html"><i
                                        class="icon-left fa fa-arrow-left"></i>修改购物车</a>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </section>
    <script type="javascript">

    </script>
@endsection