@extends('layouts.main')
@section('content')
<!-- Main Container Starts -->
<div id="main-container" class="container">
	<div class="row">
		<!-- Primary Content Starts -->
		<div class="col-md-9">
			<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Spices &amp; Herbs</li>
			</ol>
			<!-- Breadcrumb Ends -->
			<!-- Main Heading Starts -->
			<h2 class="main-heading2">
			Spices &amp; Herbs
			</h2>
			<!-- Main Heading Ends -->
			<!-- Category Intro Content Starts -->
			<div class="row cat-intro">
				<div class="col-sm-3">
					<img src="images/misc/cat-thumb-img1.jpg" alt="Image" class="img-responsive img-thumbnail" />
				</div>
				<div class="col-sm-9 cat-body">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<p>
						It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
			</div>
			<!-- Category Intro Content Ends -->
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
						<label class="control-label">Sort</label>
					</div>
					<div class="col-md-3 text-right">
						<select class="form-control">
							<option value="default" selected="selected">Default</option>
							<option value="NAZ">Name (A - Z)</option>
							<option value="NZA">Name (Z - A)</option>
						</select>
					</div>
					<div class="col-md-1 text-right">
						<label class="control-label" for="input-limit">Show</label>
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
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/15.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #1 Ends -->
				<!-- Product #2 Starts -->
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/14.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #2 Ends -->
				<!-- Product #3 Starts -->
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/5.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #3 Ends -->
				<!-- Product #4 Starts -->
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/6.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #4 Ends -->
				<!-- Product #5 Starts -->
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/7.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #5 Ends -->
				<!-- Product #6 Starts -->
				<div class="col-md-4 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/8.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4><a href="product.html">Wedding Decoration</a></h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
								<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
								<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product #6 Ends -->
			</div>
			<!-- Product Grid Display Ends -->
		</div>
		<!-- Primary Content Ends -->
		<!-- Sidebar Starts -->
		<div class="col-md-3">
			<!-- Categories Links Starts -->
			<h3 class="side-heading">Categories</h3>
			<div class="list-group">
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Wedding Decoration
				</a>
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Wedding Jewellery
				</a>
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Wedding Flowers
				</a>
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Bridal Dress
				</a>
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Bridal Suits
				</a>
				<a href="category-grid.html" class="list-group-item">
					<i class="fa fa-chevron-right"></i>
					Wedding rings
				</a>
			</div>
			<!-- Categories Links Ends -->
			<!-- Shopping Options Starts -->
			<h3 class="side-heading">Shopping Options</h3>
			<div class="list-group">
				<div class="list-group-item">
					Brands
				</div>
				<div class="list-group-item">
					<div class="filter-group">
						<label class="checkbox">
							<input name="filter1" type="checkbox" value="br1" checked="checked" />
							Brand Name 1
						</label>
						<label class="checkbox">
							<input name="filter2" type="checkbox" value="br2" />
							Brand Name 2
						</label>
						<label class="checkbox">
							<input name="filter2" type="checkbox" value="br2" />
							Brand Name 3
						</label>
					</div>
				</div>
				<div class="list-group-item">
					Manufacturer
				</div>
				<div class="list-group-item">
					<div class="filter-group">
						<label class="radio">
							<input name="filter-manuf" type="radio" value="mr1" checked="checked" />
							Manufacturer Name 1
						</label>
						<label class="radio">
							<input name="filter-manuf" type="radio" value="mr2" />
							Manufacturer Name 2
						</label>
						<label class="radio">
							<input name="filter-manuf" type="radio" value="mr3" />
							Manufacturer Name 3
						</label>
					</div>
				</div>
				<div class="list-group-item">
					<button type="button" class="btn btn-main">Filter</button>
				</div>
			</div>
			<!-- Shopping Options Ends -->
			<!-- Bestsellers Links Starts -->
			<h3 class="side-heading">Bestsellers</h3>
			<div class="product-col">
				<div class="image">
					<img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive" />
				</div>
				<div class="caption">
					<h4>
					<a href="product-full.html">Wedding Decoration</a>
					</h4>
					<div class="description">
						We are so lucky living in such a wonderful time. Our almost unlimited ...
					</div>
					<div class="price">
						<span class="price-new">$199.50</span>
						<span class="price-old">$249.50</span>
					</div>
					<div class="cart-button button-group">
						<button type="button" title="Wishlist" class="btn btn-wishlist">
						<i class="fa fa-heart"></i>
						</button>
						<button type="button" title="Compare" class="btn btn-compare">
						<i class="fa fa-bar-chart-o"></i>
						</button>
						<button type="button" class="btn btn-cart">
						Add to cart
						<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</div>
			</div>
			<!-- Bestsellers Links Ends -->
		</div>
		<!-- Sidebar Ends -->
	</div>
</div>
<!-- Main Container Ends -->
@endsection