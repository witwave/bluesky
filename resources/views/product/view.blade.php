@section('title')
    {{$product->name}}
@endsection
@extends('layouts.main')
@section('content')
    <section class="page-info-block page-info-alt  boxed-section">

        <!-- Container -->
        <div class="container cont-pad-x-15">

            <!-- Breadcrumb -->
            <ol class="breadcrumb pull-left">
                <li><a href="#"><i class="ti ti-home"></i></a></li>
                <li><a href="#">当季新品</a></li>
                <li class="active">{{$product->name}}</li>
            </ol>
            <!-- /Breadcrumb -->

        </div>
        <!-- /Container -->

    </section>
    <section class="content-block has-sidebar default-bg">
        <!-- Container -->
        <div class="container no-pad-t">

            <!-- Product Row -->
            <div class="row product-details">

                <!-- Col -->
                <div class="col-md-5 mgb-30-xs">

                    <!-- Slider Wrapper -->
                    <div class="main-slider">
                        <!-- BxSlider -->
                        @if ($product->images && count($product->images)>0)
                            <div class="bx-wrapper size-sm">
                                <div class="bx-viewport">
                                    <ul class="bxslider" data-call="bxslider" data-options="{pagerCustom:'#thumb-pager', controls:false}">
                                        @foreach($product->images as $index=>$img)
                                            <li>
                                                <a href="#">
                                                    <img src="/{{ $imagine->getUrl($img->path,'medium')}}" alt="{{ $product->name }}" class="fillw"/>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="bx-controls"></div>
                            </div>
                        @endif

                        <!-- /BxSlider -->
                    </div>
                    <!-- /Slider Wrapper -->

                    <!-- Slider Wrapper -->
                    <div class="thumb-slider bx-controls-box">
                        <!-- BxSlider -->
                        <div class="bx-wrapper size-sm">
                            <div class="bx-viewport">
                                <ul id="thumb-pager" class="bxslider" data-call="bxslider" data-options="{pager:false, slides:4, slideMargin:10}">
                                    @if ($product->images && count($product->images)>0)
                                        @foreach($product->images as $index=>$img)
                                            <li class="bx-clone">
                                              <a href="#" data-slide-index="{{ $index%4 }}"> <img src="/{{ $imagine->getUrl($img->path)}}" alt="{{ $product->name }}" class="fillw">
                                              </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="bx-controls bx-has-controls-direction">

                            </div>
                        </div>
                        <!-- /BxSlider -->
                    </div>
                    <!-- /Slider Wrapper -->

                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-7">

                    <div class="product-rating clearfix">
                        <!-- hlinks -->
                        <ul class="hlinks hlinks-rating">
                            <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="active"><i class="icon fa fa-star"></i></a></li>
                            <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /hlinks -->
                        <span class="text">浏览{{$product->pv}}</span>
                    </div>

                    <h3 class="product-title">{{$product->name}}</h3>

                    <div class="price-box">
                        <h4 class="product-price">￥{{$product->price}}</h4>
                    </div>

                    <div class="product-details">
                        <hr/>
                        <!-- Manufacturer Starts -->
                        <ul class="list-unstyled manufacturer">
                            <li>
                                <span>品牌:</span> {{$product->brand}}
                            </li>
                            <li><span>积分:</span> {{$product->credit}}</li>
                            <li><span>花材:</span> {{$product->material}}</li>
                        </ul>
                        <!-- Manufacturer Ends -->
                        <hr/>
                        <!-- Available Options Starts -->
                        <div class="options">
                            <div class="form-group">
                                <label class="control-label text-uppercase" for="input-quantity">数量:</label>
                                <input type="number" name="quantity" value="1" size="2" id="input-quantity"
                                       class="form-control" style="width: 80px"/>
                            </div>
                        </div>
                        <a href="cart.html" class="btn btn-default btn-bigger"><i
                                    class="icon-left ti ti-shopping-cart"></i>加入购物车</a>


                    </div>
                    <!-- /Col -->

                </div>
                <!-- /Product Row -->

                <div class="row">
                    <div class="col-sm-12">
                        <hr class="y-200pc"/>
                        <div class="product-info-box">
                            <h4 class="heading">描述</h4>

                            <div class="content panel-smart">
                                {!!$product->long_description!!}
                            </div>
                        </div>
                        <!-- Product Description Ends -->
                        <!-- Additional Information Starts -->
                        <div class="product-info-box">
                            <h4 class="heading">附加信息</h4>

                            <div class="content panel-smart">
                                <p>
                                    {{$product->ship_description}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Available Options Ends -->
                    <hr/>
                </div>

                <hr class="y-200pc">

                <!-- Row -->
                <div class="row">

                    <!-- Main Col -->
                    <div id="main-col" class="col-md-9 mgb-30-xs">

                        <h4>评论(4)</h4>

                        <!-- Comments List -->
                        <ol class="comments-list">

                            <li class="clearfix">
                                <!-- Avatar -->
                                <div class="avatar">
                                    <img alt="avatar" src="images/avatar.png">
                                </div>
                                <!-- /Avatar -->

                                <div class="comment-box clearfix">
                                    <!-- Author -->
                                    <div class="author clearfix">
                                        <a class="username" href="#">Sean Carter</a>
                                        <span class="date">Feb 16th, 2015 10:14 am</span>
                                    </div>
                                    <!-- /Author -->

                                    <!-- rating -->
                                    <ul class="hlinks hlinks-rating">
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                    </ul>
                                    <!-- /rating -->

                                    <!-- Comment -->
                                    <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It
                                        has roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000
                                        years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words</p>
                                    <!-- /Comment -->
                                </div>

                            </li>

                            <li class="clearfix">
                                <!-- Avatar -->
                                <div class="avatar">
                                    <img alt="avatar" src="images/avatar.png">
                                </div>
                                <!-- /Avatar -->

                                <div class="comment-box clearfix">
                                    <!-- Author -->
                                    <div class="author clearfix">
                                        <a class="username" href="#">Mary Jane</a>
                                        <span class="date">Feb 11th, 2015 4:00 am</span>
                                    </div>
                                    <!-- /Author -->

                                    <!-- rating -->
                                    <ul class="hlinks hlinks-rating">
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                    </ul>
                                    <!-- /rating -->

                                    <!-- Comment -->
                                    <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It
                                        has roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000
                                        years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words</p>
                                    <!-- /Comment -->
                                </div>

                            </li>

                            <li class="clearfix">
                                <!-- Avatar -->
                                <div class="avatar">
                                    <img alt="avatar" src="images/avatar.png">
                                </div>
                                <!-- /Avatar -->

                                <div class="comment-box clearfix">
                                    <!-- Author -->
                                    <div class="author clearfix">
                                        <a class="username" href="#">John Doe</a>
                                        <span class="date">Feb 11th, 2015 12:25 am</span>
                                    </div>
                                    <!-- /Author -->

                                    <!-- rating -->
                                    <ul class="hlinks hlinks-rating">
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                    </ul>
                                    <!-- /rating -->

                                    <!-- Comment -->
                                    <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random
                                        text. It
                                        has roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000
                                        years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words</p>
                                    <!-- /Comment -->
                                </div>

                            </li>

                        </ol>
                        <!-- Comments List / END -->

                        <hr>

                        <h4 class="case-c">add comment</h4>

                        <!-- Comment Form -->
                        <div class="contact-form">
                            <form>
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Your Name - Required" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Your Email - Required" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <!-- /Col -->
                                </div>
                                <!-- /Row -->

                                <div class="form-group">
                                    <textarea placeholder="You Message..." class="form-control" rows="8"></textarea>
                                </div>

                                <button class="btn btn-default  btn-bigger" type="submit">Submit comment</button>
                            </form>
                        </div>
                        <!-- /Contact Form -->
                    </div>
                    <!-- /Main Col -->

                    <!-- Side Col -->
                    <div class="col-md-3">

                        <!-- Side Widget -->
                        <div class="side-widget">

                            <h5 class="boxed-title">similar products</h5>

                            <!-- Slider Wrapper -->
                            <div class="side-products-slider bx-controls-above-right product-no-margin">

                                <!-- BxSlider -->
                                <div style="max-width: 100%; margin: 0px auto;" class="bx-wrapper size-xs">
                                    <div style="width: 100%; overflow: hidden; position: relative; height: 479px;"
                                         class="bx-viewport">
                                        <div style="width: 415%; position: relative; transition-duration: 0s; transform: translate3d(-263px, 0px, 0px);"
                                             class="bxslider" data-call="bxslider" data-options="{pager:false}">
                                            <div style="float: left; list-style: outside none none; position: relative; width: 263px;"
                                                 class="slide bx-clone">
                                                <!-- product -->
                                                <div class="product clearfix">

                                                    <!-- Image -->
                                                    <div class="image">
                                                        <a href="product.html" class="main"><img
                                                                    src="images/products/product8.jpg" alt=""></a>
                                                        <ul class="additional">
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Image -->

                                                    <!-- Details -->
                                                    <div class="details">

                                                        <a class="title" href="product.html">Premium fur jacket</a>

                                                        <!-- rating -->
                                                        <ul class="hlinks hlinks-rating">
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                        </ul>
                                                        <!-- /rating -->

                                                        <p class="desc">Temporibus autem quibusdam et aut officiis
                                                            debitis
                                                            aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                                                        <!-- Price Box -->
                                                        <div class="price-box">
                                                            <span class="price">$8400</span>
                                                        </div>
                                                        <!-- /Price Box -->

                                                        <!-- buttons -->
                                                        <div class="btn-group">
                                                            <a class="btn btn-outline btn-base-hover"
                                                               href="product.html">add
                                                                to cart</a>
                                                            <a class="btn btn-outline btn-default-hover"
                                                               href="product.html"><i class="icon fa fa-heart"></i></a>
                                                        </div>
                                                        <!-- /buttons -->

                                                    </div>
                                                    <!-- /Details -->

                                                </div>
                                                <!-- /product -->
                                            </div>

                                            <!-- Slide -->
                                            <div style="float: left; list-style: outside none none; position: relative; width: 263px;"
                                                 class="slide active">
                                                <!-- product -->
                                                <div class="product clearfix">

                                                    <!-- Image -->
                                                    <div class="image">
                                                        <a href="product.html" class="main"><img
                                                                    src="images/products/product7.jpg" alt=""></a>
                                                        <ul class="additional">
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Image -->


                                                    <span class="label label-sale">sale</span>

                                                    <!-- Details -->
                                                    <div class="details">

                                                        <a class="title" href="product.html">One pice business suit</a>

                                                        <!-- rating -->
                                                        <ul class="hlinks hlinks-rating">
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                        </ul>
                                                        <!-- /rating -->

                                                        <p class="desc">Temporibus autem quibusdam et aut officiis
                                                            debitis
                                                            aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                                                        <!-- Price Box -->
                                                        <div class="price-box">
                                                            <span class="price price-old">$3350</span><span
                                                                    class="price">$2050</span>
                                                        </div>
                                                        <!-- /Price Box -->

                                                        <!-- buttons -->
                                                        <div class="btn-group">
                                                            <a class="btn btn-outline btn-base-hover" href="cart.html">add
                                                                to cart</a>
                                                            <a class="btn btn-outline btn-default-hover"
                                                               href="product.html"><i class="icon fa fa-heart"></i></a>
                                                        </div>
                                                        <!-- /buttons -->

                                                    </div>
                                                    <!-- /Details -->

                                                </div>
                                                <!-- /product -->
                                            </div>
                                            <!-- /Slide -->

                                            <!-- Slide -->
                                            <div style="float: left; list-style: outside none none; position: relative; width: 263px;"
                                                 class="slide">
                                                <!-- product -->
                                                <div class="product clearfix">

                                                    <!-- Image -->
                                                    <div class="image">
                                                        <a href="product.html" class="main"><img
                                                                    src="images/products/product8.jpg" alt=""></a>
                                                        <ul class="additional">
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product8.jpg"
                                                                   data-gal="prettyPhoto[gallery 8]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product8.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Image -->

                                                    <!-- Details -->
                                                    <div class="details">

                                                        <a class="title" href="product.html">Premium fur jacket</a>

                                                        <!-- rating -->
                                                        <ul class="hlinks hlinks-rating">
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li class="active"><a href="#"><i
                                                                            class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                        </ul>
                                                        <!-- /rating -->

                                                        <p class="desc">Temporibus autem quibusdam et aut officiis
                                                            debitis
                                                            aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                                                        <!-- Price Box -->
                                                        <div class="price-box">
                                                            <span class="price">$8400</span>
                                                        </div>
                                                        <!-- /Price Box -->

                                                        <!-- buttons -->
                                                        <div class="btn-group">
                                                            <a class="btn btn-outline btn-base-hover"
                                                               href="product.html">add
                                                                to cart</a>
                                                            <a class="btn btn-outline btn-default-hover"
                                                               href="product.html"><i class="icon fa fa-heart"></i></a>
                                                        </div>
                                                        <!-- /buttons -->

                                                    </div>
                                                    <!-- /Details -->

                                                </div>
                                                <!-- /product -->
                                            </div>
                                            <!-- /Slide -->

                                            <div style="float: left; list-style: outside none none; position: relative; width: 263px;"
                                                 class="slide active bx-clone">
                                                <!-- product -->
                                                <div class="product clearfix">

                                                    <!-- Image -->
                                                    <div class="image">
                                                        <a href="product.html" class="main"><img
                                                                    src="images/products/product7.jpg" alt=""></a>
                                                        <ul class="additional">
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                            <li><a href="images/products/product7.jpg"
                                                                   data-gal="prettyPhoto[gallery 7]"
                                                                   title="Product Name"><img
                                                                            src="images/products/product7.jpg"
                                                                            alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Image -->


                                                    <span class="label label-sale">sale</span>

                                                    <!-- Details -->
                                                    <div class="details">

                                                        <a class="title" href="product.html">One pice business suit</a>

                                                        <!-- rating -->
                                                        <ul class="hlinks hlinks-rating">
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                                        </ul>
                                                        <!-- /rating -->

                                                        <p class="desc">Temporibus autem quibusdam et aut officiis
                                                            debitis
                                                            aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                                                        <!-- Price Box -->
                                                        <div class="price-box">
                                                            <span class="price price-old">$3350</span><span
                                                                    class="price">$2050</span>
                                                        </div>
                                                        <!-- /Price Box -->

                                                        <!-- buttons -->
                                                        <div class="btn-group">
                                                            <a class="btn btn-outline btn-base-hover" href="cart.html">add
                                                                to cart</a>
                                                            <a class="btn btn-outline btn-default-hover"
                                                               href="product.html"><i class="icon fa fa-heart"></i></a>
                                                        </div>
                                                        <!-- /buttons -->

                                                    </div>
                                                    <!-- /Details -->

                                                </div>
                                                <!-- /product -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bx-controls bx-has-controls-direction">
                                        <div class="bx-controls-direction"><a class="bx-prev" href=""></a><a
                                                    class="bx-next"
                                                    href=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /BxSlider -->

                            </div>
                            <!-- /Slider Wrapper -->

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