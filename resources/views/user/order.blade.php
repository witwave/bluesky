@extends('layouts.user')
@section('title')
我的订单
@endsection
@section('main')
    <ol class="breadcrumb">
        <li><a href="/index.html">首页</a></li>
        <li><a href="/user.html">会员中心</a></li>
        <li class="active">我的订单</li>
    </ol>
    <!-- Form Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            我的订单
        </div>
        <div class="panel-body">
          <table class="cart-contents table table-bordered">
              <thead>
              <tr>
                  <th class="hidden-xs" style="text-align:center">商品</th>
                  <th class="hidden-xs" style="text-align:center">单价(元)</th>
                  <th style="text-align:center">数量</th>
                  <th style="text-align:center">运费</th>
                  <th style="text-align:center">实付款(元)</th>
                  <th style="text-align:center">交易状态</th>
                  <th style="text-align:center">交易操作</th>
              </tr>
              </thead>
              <tbody>
              @foreach($orders as $row)
              <tr>
                <td colspan="9">
                  <small><strong>{{date('Y-m-d',strtotime($row->created_at))}}</strong> <span>订单号:</span>  {{ $row->out_order_id}}</small>
              </td>
            </tr>
                @foreach($row->products as $index=>$product)
                    <tr>
                        <td>{{ $product->name}}</td>
                        <td style="text-align:center;vertical-align:middle">{{ $product->price}}</td>
                        <td style="text-align:center;vertical-align:middle">{{ $product->qty}}</td>
                        <td style="text-align:center;vertical-align:middle">{{ $product->mail_fee}}</td>
                        @if($index==0)
                          <td style="text-align:center;vertical-align:middle" rowspan="{{ count($row->products)}}">
                            {{ $row->paid}}<br/>
                            (含运费：{{ $row->mail_fee}})
                          </td>
                          @if($row->payment_status=="wait")
                          <td  style="text-align:center;vertical-align:middle" rowspan="{{ count($row->products)}}">
                            <a href="" style="display:block"><small>等待付款</small></a>
                            <a href=""><small>订单详情</small></a>
                          </td>
                          <td style="text-align:center;vertical-align:middle" rowspan="{{ count($row->products)}}"><a href="#">去付款</a></td>
                          @endif
                        @endif
                    </tr>
                @endforeach
                <tr>  <td colspan="9"></td></tr>
              @endforeach
              </tbody>
          </table>
        </div>
    </div>
@endsection
