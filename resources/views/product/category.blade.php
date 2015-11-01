@section('title')
    当季新品
@endsection
@extends('layouts.main')
@section('content')
    <?php $index = 0;?>
    <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">

        <!-- Container -->
        <div class="container">
            <!-- Section Title -->
            <div class="section-title invert-colors no-margin-b">
                <h2>当季新品</h2>
                <p class="hidden-xs">Helena is a freelance fashion house specialiasing in print designs and combining fabrics. Our stores can be found all over the world.</p>
            </div>
            <!-- /Section Title -->
        </div>
        <!-- /Container -->
    </section>

    <section class="page-info-block boxed-section">

        <!-- Container -->
        <div class="container cont-pad-x-15">

            <!-- Breadcrumb -->
            <ol class="breadcrumb pull-left">
                <li><a href="#"><i class="ti ti-home"></i></a></li>
                <li class="active">当李新品</li>
            </ol>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Container -->
    </section>

    <section class="content-block default-bg">

        <!-- Container -->
        <div class="container cont-main no-pad-t">

            <!-- Row -->
            <div class="row">

                <!-- Main Col -->
                <div class="main-col col-sm-9 col-md-9">

                    <!-- Products Filter -->
                    <div class="products-filter clearfix">
                        <div class="display">
                            <span class="show-list" onclick="changeView('list')"><span class="text hidden-xs">列表</span><i class="icon fa fa-th-list"></i></span>
                            <span class="show-grid" onclick="changeView('grid')"><span class="text hidden-xs">网格</span><i class="icon fa fa-th"></i></span>
                        </div>

                        <div class="filter"><b class="hidden-xs">显示</b>
                            <select>
                                <option value="9" selected="selected">9</option>
                                <option value="12">12</option>
                                <option value="15">15</option>
                                <option value="18">18</option>
                            </select>
                        </div>

                        <div class="filter"><b class="hidden-xs">排序</b>
                            <select>
                                <option value="9" selected="selected">上架时间</option>
                                <option value="12">价格</option>
                                <option value="15">热度</option>
                            </select>
                        </div>

                    </div>
                    <!-- /Products Filter -->

                    <!-- Row -->
                    <div class="product-grid row grid-20 mgb-20">

                        @foreach ($products as $item)
                            @if ($item->images && count($item->images)>0)
                                <?php $index++;?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="product clearfix">
                                        <div class="image">
                                            <a  class="main" href="/product/{{ $item->id }}.html">
                                                <img src="{{ $imagine->getUrl($item->images[0]->path,'medium')}}" alt="{{ $item->name }}">
                                            </a>
                                            <ul class="additional">
                                                @foreach ($item->images as $index=>$img)
                                                    @if ($index<4)
                                                        <li>
                                                            <a href="/product/{{ $item->id }}.html" title="{{ $item->name }}">
                                                                <img src="{{ $imagine->getUrl($img->path)}}" alt="{{ $item->name }}">
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        @if ($item->featured==1)
                                            <span class="label label-sale">新品</span>
                                        @elseif($item->pv>10)
                                            <span class="label label-hot">热销</span>
                                            @endif
                                                    <!-- Details -->
                                            <div class="details">
                                                <a class="title" href="/product/{{ $item->id }}.html">{{$item->name}}</a>
                                                <!-- rating -->
                                                <ul class="hlinks hlinks-rating">
                                                    <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                    <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                    <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                </ul>
                                                <!-- /rating -->
                                                <p class="desc">{{ $item->short_description}}.</p>
                                                <!-- Price Box -->
                                                <div class="price-box">
                                                    @if ($item->market_price)
                                                        <span class="price price-old">{{$item->market_price}}</span>
                                                    @endif
                                                    <span class="price">￥{{ $item->price}} </span>
                                                </div>
                                                <!-- /Price Box -->
                                                <!-- buttons -->
                                                <div class="btn-group">
                                                    <a class="btn btn-outline btn-base-hover" href="cart.html">加入到购物车</a>
                                                    <!-- <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>-->
                                                </div>
                                                <!-- /buttons -->
                                            </div>
                                            <!-- /Details -->
                                    </div>
                                </div>
                                @endif
                                        <!-- /Col -->
                                @endforeach


                    </div>
                    <!-- /Row -->

                    <!-- Pagination -->
                    <?php echo $products->render(); ?>
                    <!-- /Pagination -->

                </div>
                <!-- /Main Col -->

                <!-- Side Col -->
                <div class="side-col col-sm-3 col-md-3">

                    <!-- Side Widget -->
                    <div class="side-widget no-margin-l">
                        <h5 class="boxed-title">当季新品</h5>
                        <!-- ul-toggle -->
                        <ul class="ul-toggle font-size-sm">
                            @foreach($categories as $category)
                            <li>
                                @if(isset($category['_child']))
                                    <a href="javascript:void(0) "><i class="icon fa fa-angle-right"></i>{{$category['name']}}</a>
                                    <i class="toggler ti ti-plus"></i>
                                    <ul>
                                        @foreach($category['_child'] as $item)
                                            <li><a href="/category-{{$item['id']}}.html"><i class="icon fa fa-angle-right"></i>{{ $item['name'] }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <a href="/category-{{$category['id']}}.html"><i class="icon fa fa-angle-right"></i>{{$category['name']}}</a>
                                @endif
                            </li>
                           @endforeach
                        </ul>
                        <!-- /ul-toggle -->
                    </div>
                    <!-- /Side Widget -->


                    <!-- Side Widget -->
                    <div class="side-widget no-margin-l">

                        <h5 class="boxed-title">价格范围</h5>
                        <!-- Price Range Form -->
                        <form class="side-form-panel" action="/category.html">
                            <label>最小价</label>
                            <div class="form-group slider-group">
                                <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#min1" data-options="{min:0, max:1000, value:80}"><div style="width: 50%;" class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span style="left: 50%;" class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span></div>
                                <input id="min1" class="form-control" value="80" type="text" name="min">
                            </div>
                            <label>最大价</label>
                            <div class="form-group slider-group">
                                <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#max1" data-options="{min:0, max:1000, value:500}"><div style="width: 50%;" class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span style="left: 50%;" class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span></div>
                                <input id="max1" class="form-control" value="500" type="text" name="max">
                            </div>
                            <button class="btn btn-outline btn-block" type="submit">查找</button>
                        </form>
                        <!-- /Price Range Form -->
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


