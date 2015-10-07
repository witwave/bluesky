<?php $index = 0;?>
<div class="content-block">
  <!-- Container -->
  <div class="container no-pad-t">
    <!-- Product Tabs -->
    <div class="product-tabs">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">
        <li class="active"><a href="#tab-latest" data-toggle="tab" aria-expanded="true">最近</a></li>
        <li class=""><a href="#tab-featured" data-toggle="tab" aria-expanded="false">新品</a></li>
        <li class=""><a href="#tab-trending" data-toggle="tab" aria-expanded="false">最热</a></li>
      </ul>
      <!-- /Nav Tabs -->
      <!-- Tab panes -->
      <div class="tab-content tab-no-borders">
        <!-- Tab Latest -->
        <div class="tab-pane active" id="tab-latest">
          <!-- Row -->
          <div class="row">
            <!-- Col -->
            @foreach ($latest as $item)
            @if ($item->images && count($item->images)>0)
            <?php $index++;?>
            <div class="col-sm-6 col-md-3">
              <div class="product clearfix">
                <div class="image">
                  <a  class="main" href="/product/{{ $item->id }}.html">
                    <img src="{{ $imagine->getUrl($item->images[0]->path,'medium')}}" alt="{{ $item->name }}">
                  </a>
                  <ul class="additional">
                    @foreach ($item->images as  $img)
                    <li>
                      <a href="{{ $imagine->getUrl($img->path,'medium')}}" data-gal="prettyPhoto[gallery {{ $index }}]" title="{{ $item->name }}">
                        <img src="{{ $imagine->getUrl($img->path)}}" alt="{{ $item->name }}">
                      </a>
                    </li>
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
                  <a class="title" href="/product/{{ $item->id }}.html">{{$item->name}}
                     <span class="price">{{ strtotime($item->new_price_date)>time()?date('m月d前',strtotime($item->new_price_date)).$item->new_price:''}}</span>
                  </a>
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
                    @if ($user_type==3)
                    <span class="price">￥{{ $item->partner_price}}</span>
                    @else
                    @if (strtotime($item->new_price_date)>time())
                    <span class="price price-old">{{$item->price}}</span>
                    <span class="price">￥{{ $item->new_price}} </span>
                    @else
                    <span class="price">￥{{ $item->price}}</span>
                    @endif
                    @endif
                  </div>
                  <!-- /Price Box -->
                  <!-- buttons -->
                  <div class="btn-group">
                    <a class="btn btn-outline btn-base-hover" href="cart.html">加入到购物车</a>
                    <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
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
        </div>
        <!-- /Tab Latest -->
        <!-- Tab Featured -->
        <div class="tab-pane" id="tab-featured">
          <!-- Row -->
          <div class="row">

            @foreach ($featured as $item)
            @if ($item->images && count($item->images)>0)
            <?php $index++;?>
            <div class="col-sm-6 col-md-3">
              <div class="product clearfix">
                <div class="image">
                  <a  class="main" href="/product/{{ $item->id }}.html">
                    <img src="{{ $imagine->getUrl($item->images[0]->path,'medium')}}" alt="{{ $item->name }}">
                  </a>
                  <ul class="additional">
                    @foreach ($item->images as  $img)
                    <li>
                      <a href="{{ $imagine->getUrl($img->path,'medium')}}" data-gal="prettyPhoto[gallery {{ $index }}]" title="{{ $item->name }}">
                        <img src="{{ $imagine->getUrl($img->path)}}" alt="{{ $item->name }}">
                      </a>
                    </li>
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
                  <a class="title" href="/product/{{ $item->id }}.html">{{$item->name}}
                     <span class="price">{{ strtotime($item->new_price_date)>time()?date('m月d前',strtotime($item->new_price_date)).$item->new_price:''}}</span>
                  </a>
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
                    @if ($user_type==3)
                    <span class="price">￥{{ $item->partner_price}}</span>
                    @else
                    @if (strtotime($item->new_price_date)>time())
                    <span class="price price-old">{{$item->price}}</span>
                    <span class="price">￥{{ $item->new_price}} </span>
                    @else
                    <span class="price">￥{{ $item->price}}</span>
                    @endif
                    @endif
                  </div>
                  <!-- /Price Box -->
                  <!-- buttons -->
                  <div class="btn-group">
                    <a class="btn btn-outline btn-base-hover" href="cart.html">加入到购物车</a>
                    <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
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
        </div>
        <!-- /Tab Featured -->
        <!-- Tab Trending -->
        <div class="tab-pane" id="tab-trending">
          <!-- Row -->
          <div class="row">
 @foreach ($trending as $item)
            @if ($item->images && count($item->images)>0)
            <?php $index++;?>
            <div class="col-sm-6 col-md-3">
              <div class="product clearfix">
                <div class="image">
                  <a  class="main" href="/product/{{ $item->id }}.html">
                    <img src="{{ $imagine->getUrl($item->images[0]->path,'medium')}}" alt="{{ $item->name }}">
                  </a>
                  <ul class="additional">
                    @foreach ($item->images as  $img)
                    <li>
                      <a href="{{ $imagine->getUrl($img->path,'medium')}}" data-gal="prettyPhoto[gallery {{ $index }}]" title="{{ $item->name }}">
                        <img src="{{ $imagine->getUrl($img->path)}}" alt="{{ $item->name }}">
                      </a>
                    </li>
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
                  <a class="title" href="/product/{{ $item->id }}.html">{{$item->name}}
                     <span class="price">{{ strtotime($item->new_price_date)>time()?date('m月d前',strtotime($item->new_price_date)).$item->new_price:''}}</span>
                  </a>
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
                    @if ($user_type==3)
                    <span class="price">￥{{ $item->partner_price}}</span>
                    @else
                    @if (strtotime($item->new_price_date)>time())
                    <span class="price price-old">{{$item->price}}</span>
                    <span class="price">￥{{ $item->new_price}} </span>
                    @else
                    <span class="price">￥{{ $item->price}}</span>
                    @endif
                    @endif
                  </div>
                  <!-- /Price Box -->
                  <!-- buttons -->
                  <div class="btn-group">
                    <a class="btn btn-outline btn-base-hover" href="cart.html">加入到购物车</a>
                    <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
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
        </div>
        <!-- /Tab Trending -->
      </div>
      <!-- /Tab Panes -->
    </div>
    <!-- /Product Tabs -->
  </div>
  <!-- /Container -->
</div>