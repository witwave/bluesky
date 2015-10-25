@extends('layouts.main')
@section('content')
<!-- Main Container Starts -->
<div id="main-container" class="container">
	<div class="row">
		<!-- Primary Content Starts -->
		<div class="col-md-9">
			<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="/index.html">首页</a></li>
				<li class="active">当季新品</li>
			</ol>
			<!-- Breadcrumb Ends -->

			<!-- Product Filter Starts -->
			<div class="product-filter">
				<div class="row">
					<div class="col-md-4">
						<div class="display">
							<a href="category-list.html">
								<i class="fa fa-th-list" title="List View"></i>
							</a>
							<a href="category-grid.html" class="active">
								<i class="fa fa-th" title="Grid View"></i>
							</a>
						</div>
					</div>
					<div class="col-md-2 text-right">
						<label class="control-label">排序</label>
					</div>
					<div class="col-md-3 text-right">
						<select class="form-control">
							<option value="default" selected="selected">认</option>
							<option value="NAZ">Name (A - Z)</option>
							<option value="NZA">Name (Z - A)</option>
						</select>
					</div>
					<div class="col-md-1 text-right">
						<label class="control-label" for="input-limit">显示</label>
					</div>
					<div class="col-md-2 text-right">
						<select id="input-limit" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3" selected="selected">3</option>
						</select>
					</div>
				</div>
			</div>
			<!-- Product Filter Ends -->
			<!-- Product Grid Display Starts -->
			<div class="row">
				<!-- Product #1 Starts -->
				@foreach($products as $item)
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<a href="/product/{{$item->id}}.html">
							<img src="{{ $item->images?$imagine->getUrl($item->images[0]->path,'medium'):''}}" alt="{{ $item->name }}"  class="img-responsive" >
							</a>
						</div>
						<div class="caption">
							<h4><a href="product.html">{{$item->name}}</a></h4>
							<div class="description">
								{{$item->short_description}}
							</div>
							<div class="price">
								<span class="price-new">￥{{$item->price}}</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" class="btn btn-cart">
								加入购物车
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- Product Grid Display Ends -->
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