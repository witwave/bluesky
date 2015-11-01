@extends('layouts.main')
@section('content')
    <section class="page-info-block boxed-section">
        <!-- Container -->
        <div class="container cont-pad-x-15">
            <!-- Breadcrumb -->
            <ol class="breadcrumb pull-left">
                <li><a href="/"><i class="ti ti-home"></i></a></li>
                <li class="active">我的购物车</li>
            </ol>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Container -->
    </section>




    <section class="content-block default-bg">
        <!-- Container -->
        <div class="container cont-pad-t-sm">
            @if ($cart && count($cart)>0)
            <!-- Cart -->
            <div class="cart">
                <!-- Cart Contents -->
                <table class="cart-contents" id="cart">
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
                        <?php $total_credit += $row->credit * $row->qty?>
                        <tr>
                            <td class="image hidden-xs">
                                <img src="{{ $row->options->image}}" alt="{{ $row->name }}">
                                {{$row->options->has('size') ? $row->options->size : ''}}
                            </td>
                            <td class="details">
                                <div class="clearfix">
                                    <div class="pull-left no-float-xs">
                                        <a href="/product/{{$row->id}}.html" class="title">{{$row->name}}</a>

                                        <div class="rating hide">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star disabled"></i>
                                            <i class="fa fa-star disabled"></i>
                                        </div>
                                        <span>商品编码: {{$row->options->sku}}</span>
                                    </div>
                                    <div class="action pull-right no-float-xs">
                                        <div class="clearfix">
                                            <button class="edit hide"><i class="fa fa-pencil"></i></button>
                                            <button class="refresh hide"><i class="fa fa-refresh"></i></button>
                                            <button class="delete" name="delete" data="{{ $row->rowid }}"><i
                                                        class="fa fa-trash-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="qty">
                                <input type="number" value="{{ $row->qty }}" name="qty" data="{{ $row->rowid }}">
                            </td>
                            <td class="unit-price hidden-xs"><span class="currency">￥</span> {{$row->price}}</td>
                            <td class="total-price"><span class="currency">￥</span>{{$row->subtotal}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" rowspan="3" class="terms">
                                <h5><i class="fa fa-info-circle"></i> 说明</h5>
                            </td>
                            <td style="border-bottom: 1px solid #DDD;">
                                总价
                            </td>
                            <td class="price" style="border-bottom: 1px solid #DDD;">
                                <strong style="color: red"> ￥ {{Cart::total()}}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #DDD;">
                                可获得积分
                            </td>
                            <td class="price" style="border-bottom: 1px solid #DDD;">{{$total_credit}}</td>
                        </tr>
                        <tr>
                            <td>
                                共计
                                <small>(不含运费)</small>
                            </td>
                            <td class="price" ><strong style="color: red">￥ {{Cart::total()}}</strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <!-- /Cart Contents -->
            </div>
            <!-- /Cart -->
            <!-- Cart Buttons -->
            <div class="cart-buttons clearfix">
                <a class="btn btn-base checkout" href="checkout.html"><i class="icon-left fa fa-shopping-cart"></i>去结算</a>
                <a class="btn btn-primary checkout" href="category.html"><i class="icon-left fa fa-arrow-left"></i>继续购物</a>
            </div>
            <!-- /Cart Buttons -->
            @else
                <div class="cart">
                    <h4 class="text-center">您的购物车还没有选购任何商品</h4>
                </div>
                <div class="cart-buttons clearfix">

                <a class="btn btn-primary checkout" href="category.html"><i class="icon-left fa fa-arrow-left"></i>去购物吧</a></div>
            @endif
        </div>
        <!-- /Container -->
    </section>
    <div class="newsletter-block boxed-section overlay-dark-m cover-2-bg">
        <!-- Container -->
        <div class="container">
            <form>
                <!-- Row -->
                <div class="row grid-10">
                    <!-- Col -->
                    <div class="col-sm-3 col-md-2">
                        <span class="case-c">订阅新品</span>
                    </div>
                    <!-- Col -->
                    <!-- Col -->
                    <div class="col-sm-6 col-md-8">
                        <input class="form-control" type="text" placeholder="请输入电子邮箱">
                    </div>
                    <!-- Col -->
                    <!-- Col -->
                    <div class="col-sm-3 col-md-2">
                        <button class="btn btn-block btn-color yellow-bg"><i class="icon-left fa fa-envelope"></i>提交
                        </button>
                    </div>
                    <!-- /Col -->
                </div>
                <!-- /Row -->
            </form>
        </div>
        <!-- /Container -->
    </div>
@endsection