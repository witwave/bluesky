@extends('layouts.main')
@section('content')
<!-- Main Container Starts -->
<div id="main-container" class="container">
	<div class="row">
		<!-- Primary Content Starts -->
		<div class="col-md-9">
			<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="index.html">首页</a></li>
				<li><a href="category-list.html">目录</a></li>
				<li class="active">商品</li>
			</ol>
			<!-- Breadcrumb Ends -->
			<!-- Product Info Starts -->
			<div class="row product-info">
				<!-- Left Starts -->
				
				<div class="col-sm-5 images-block">
					 @if ($product->images && count($product->images)>0)
					<p>
						<img src="/{{ $imagine->getUrl($product->images[0]->path,'medium')}}" alt="{{ $product->name }}" class="img-responsive thumbnail"/>
					</p>
					<ul class="list-unstyled list-inline">
						@foreach($product->images as $index=>$img)
						@if ($index>0 && $index<3)
						<li>
							<img src="/{{ $imagine->getUrl($img->path)}}" alt="{{ $product->name }}"  class="img-responsive thumbnail">
						</li>
						@endif
						@endforeach
					</ul>
				   @endif
				</div>
				<!-- Left Ends -->
				<!-- Right Starts -->
				<div class="col-sm-7 product-details">
					<!-- Product Name Starts -->
					<h2>{{$product->name}}</h2>
					<!-- Product Name Ends -->
					<hr />
					<!-- Manufacturer Starts -->
					<ul class="list-unstyled manufacturer">
						<li>
							<span>品牌:</span> {{$product->brand}}
						</li>
						<li><span>积分:</span> {{$product->credit}}</li>
						<li><span>花材:</span> {{$product->material}}</li>
					</ul>
					<!-- Manufacturer Ends -->
					<hr />
					<!-- Price Starts -->
					<div class="price">
						<span class="price-head">价格 :</span>
						<span class="price-new">￥{{$product->price}}</span>
					</div>
					<!-- Price Ends -->
					<hr />
					<!-- Available Options Starts -->
					<div class="options">
						<div class="form-group">
							<label class="control-label text-uppercase" for="input-quantity">数量:</label>
							<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
						</div>
						<div class="cart-button button-group">
							<button type="button" title="Wishlist" class="btn btn-wishlist">
							<i class="fa fa-heart"></i>
							</button>
							<button type="button" title="Compare" class="btn btn-compare">
							<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button" class="btn btn-cart">
							加入购物车
							<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
					</div>
					<!-- Available Options Ends -->
					<hr />
				</div>
				<!-- Right Ends -->
			</div>
			<!-- product Info Ends -->
			<!-- Product Description Starts -->
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
			<!-- Additional Information Ends -->
		</div>
		<!-- Primary Content Ends -->
		<!-- Sidebar Starts -->
		<div class="col-md-3">
			<!-- Categories Links Starts -->
			<h3 class="side-heading">目录</h3>
			<div class="list-group">
				@foreach($categories as $category)
					<a href="/category-grid-{{$category['id']}}.html" class="list-group-item">
						<i class="fa fa-chevron-right"></i>
						{{$category['name']}}
					</a>
				@endforeach
			</div>
			<!-- Categories Links Ends -->
		</div>
		<!-- Sidebar Ends -->
	</div>
</div>
<!-- Main Container Ends -->
@endsection