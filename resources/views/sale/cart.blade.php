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
	<div class="container cont-pad-t-sm">
		<!-- Cart -->
		<div class="cart">
			<!-- Cart Contents -->
			<table class="cart-contents">
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
					@foreach($cart as $row)
					<tr>
						<td class="image hidden-xs"><img src="images/products/product1.jpg" alt="product">
							{{$row->options->has('size') ? $row->options->size : ''}}
						</td>
						<td class="details">
							<div class="clearfix">
								<div class="pull-left no-float-xs">
									<a href="#" class="title">{{$row->name}}</a>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star disabled"></i>
										<i class="fa fa-star disabled"></i>
									</div>
									<span>Code: GK0904</span>
								</div>
								<div class="action pull-right no-float-xs">
									<div class="clearfix">
										<button class="edit"><i class="fa fa-pencil"></i></button>
										<button class="refresh"><i class="fa fa-refresh"></i></button>
										<button class="delete"><i class="fa fa-trash-o"></i></button>
									</div>
								</div>
							</div>
						</td>
						<td class="qty">
							<input type="text" value="{{ $row->qty }}" name="">
						</td>
						<td class="unit-price hidden-xs"><span class="currency">￥</span> {{$row->price}}</td>
						<td class="total-price"><span class="currency">￥</span>{{$row->subtotal}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<!-- /Cart Contents -->
			<!-- Cart Summary -->
			<table class="cart-summary">
				<tbody><tr>
					<td class="terms">
						<h5><i class="fa fa-info-circle"></i> 说明</h5>
						<p></p>
					</td>
					<td class="totals">
						<table class="cart-totals">
							<tbody>
							<tr>
								<td>商品总价</td>
								<td class="price">￥ 4500.00</td>
							</tr>
							<tr>
								<td>获得积分</td>
								<td class="price">100</td>
							</tr>
							<tr>
								<td class="cart-total">共计<small>(不含运费)</small></td>
								<td class="cart-total price">￥ 5250.00</td>
							</tr>
						</tbody>
						</table>
					</td>
				</tr>
			</tbody>
			</table>
			<!-- /Cart Summary -->
		</div>
		<!-- /Cart -->
		<!-- Cart Buttons -->
		<div class="cart-buttons clearfix">
			<a class="btn btn-base checkout" href="checkout.html"><i class="icon-left fa fa-shopping-cart"></i>去结算</a>
			<a class="btn btn-primary checkout" href="category.html"><i class="icon-left fa fa-arrow-left"></i>继续购物</a>
		</div>
		<!-- /Cart Buttons -->
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
					<button class="btn btn-block btn-color yellow-bg"><i class="icon-left fa fa-envelope"></i>提交</button>
				</div>
				<!-- /Col -->
			</div>
			<!-- /Row -->
		</form>
	</div>
	<!-- /Container -->
</div>
@endsection