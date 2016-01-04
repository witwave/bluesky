@extends('layouts.main')
@section('content')
<section class="page-info-block boxed-section">
    <!-- Container -->
    <div class="container cont-pad-x-15">
        <!-- Breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="/"><i class="ti ti-home"></i></a></li>
            <li class="active">提交订单</li>
        </ol>
        <!-- /Breadcrumb -->
        <!-- hlinks -->
        <ul class="page-links pull-right hlinks hlinks-icons color-icons-borders color-icons-bg-hovered">
            <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
        </ul>
        <!-- /hlinks -->
    </div>
    <!-- /Container -->
</section>
<section class="content-block default-bg">
    <!-- Container -->
    <div class="container cont-pad-y-sm">
        <!-- Row -->
        <div class="row">
            <!-- Main Col -->
            <div class="main-col col-md-9 mgb-30-xs">
                <!-- Checkout Accordion -->
                <div class="panel-group checkout" id="accordion">
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <!-- Heading -->
                        <div class="panel-heading heading-iconed">
                            <h4 class="panel-title case-c">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="icon-left">1</i> 收货信息
                                </a>
                            </h4>
                        </div>
                        <!-- /Heading -->
                        <!-- Collapse -->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- Panel Body -->
                            <div class="panel-body">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->

                                </div>
                                <!-- /Col -->
                            </div>
                            <!-- /Row -->
                        </div>
                        <!-- /Panel Body -->
                    </div>
                    <!-- /Collapse -->
                </div>
                <!-- /Panel -->
                <!-- Panel -->
                <div class="panel panel-default">
                    <!-- Heading -->
                    <div class="panel-heading heading-iconed">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <i class="icon-left">2</i> 配送方式
                            </a>
                        </h4>
                    </div>
                    <!-- /Heading -->
                    <!-- Collapse -->
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <p></p>
                            <div class="radio"><label><input value="" name="shipping-opt" type="radio" >上门自取</label></div>
                            <div class="radio"><label><input value="" name="shipping-opt" type="radio" checked="true" >送货上门</label></div>
                            <!-- Form -->
                            <form>
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>收货人</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>收货人电话</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <!-- Col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control">
                                                <option>请选择</option>
                                                <option>上海</option>
                                                <option>江苏</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <!-- Col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control">
                                                <option>请选择</option>
                                                <option>浦东新区</option>
                                                <option>静安</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <!-- Col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control">
                                                <option>请选择</option>
                                                <option>城区</option>
                                                <option>北蔡镇</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <div class="col-md-12">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label>收货人地址</label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <!-- /Form Group -->

                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>邮编</label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                </div>
                                <!-- /Row -->
                            </form>
                            <!-- Form -->
                        </div>
                        <!-- /Panel Body -->
                    </div>
                    <!-- /Collapse -->
                </div>
                <!-- /Panel -->
                <!-- Panel -->
                <div class="panel panel-default hide">
                    <!-- Heading -->
                    <div class="panel-heading heading-iconed">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <i class="icon-left">3</i> Shippping Information
                            </a>
                        </h4>
                    </div>
                    <!-- /Heading -->
                    <!-- Collapse -->
                    <div id="collapseThree" class="panel-collapse collapse">
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <p>Please select a shipping method.</p>
                            <div class="radio"><label><input value="" name="acnt-opt" type="radio" checked="">Cash on delivery</label></div>
                            <div class="radio"><label><input value="" name="acnt-opt" type="radio">Send by courier</label></div>
                        </div>
                        <!-- /Panel Body -->
                    </div>
                    <!-- /Collapse -->
                </div>
                <!-- /Panel -->
                <!-- Panel -->
                <div class="panel panel-default">
                    <!-- Heading -->
                    <div class="panel-heading heading-iconed">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                <i class="icon-left">3</i> 支付方式
                            </a>
                        </h4>
                    </div>
                    <!-- /Heading -->
                    <!-- Collapse -->
                    <div id="collapseFour" class="panel-collapse collapse">
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <div class="radio"><label><input value="" name="pay-opt" type="radio" checked="">支付宝</label></div>
                            <div class="radio"><label><input value="" name="pay-opt" type="radio">微信支付</label></div>
                            <div class="radio"><label><input value="" name="pay-opt" type="radio" >网银</label></div>
                            <hr>
                            <button class="btn btn-primary btn-sm btn-bigger">提交订单</button>
                        </div>
                        <!-- /Panel Body -->
                    </div>
                    <!-- /Collapse -->
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Accordion -->
        </div>
        <!-- /Main Col -->
        <!-- Side Col -->
        <div class="side-col col-md-3">
            <!-- Side Widget -->
            <div class="order-summary">
                <table>
                    <tbody>
                    <tr>
                        <td>商品</td>
                        <td class="price">￥{{Cart::total()}}</td>
                    </tr>
                    <tr>
                        <td>运费</td>
                        <td class="price"><span class="success">￥50.00</span></td>
                    </tr>
                    <tr class="total">
                        <td> 总计 </td>
                        <td class="price">￥{{Cart::total()}}</td>
                    </tr>
                    </tbody>
                </table>
                <a class="btn btn-default btn-block btn-bigger" href="/">继续购买</a>
                <button class="btn btn-primary btn-block btn-bigger">提交订单</button>
            </div>
            <!-- /Side Widget -->
        </div>
        <!-- /Side Col -->
    </div>
    <!-- /Row -->
    </div>
    <!-- /Container -->
</section>
@endsection