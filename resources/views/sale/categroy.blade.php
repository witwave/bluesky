@extends('layouts.main')
@section('content')
<section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
  <!-- Container -->
  <div class="container">
    <!-- Section Title -->
    <div class="section-title invert-colors no-margin-b">
      <h2>category title</h2>
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
      <li><a href="#">Pages</a></li>
      <li class="active">features</li>
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
  <div class="container cont-main no-pad-t">
    
    <!-- Row -->
    <div class="row">
      <!-- Main Col -->
      <div class="main-col col-sm-9 col-md-9">
        
        <!-- Products Filter -->
        <div class="products-filter clearfix">
          <div class="display">
            <span class="show-list" onclick="changeView('list')"><span class="text hidden-xs">List</span><i class="icon fa fa-th-list"></i></span>
            <span class="show-grid" onclick="changeView('grid')"><span class="text hidden-xs">Grid</span><i class="icon fa fa-th"></i></span>
          </div>
          <div class="filter"><b class="hidden-xs">No</b>
            <select>
              <option value="9" selected="selected">9</option>
              <option value="12">12</option>
              <option value="15">15</option>
              <option value="18">18</option>
            </select>
          </div>
          
          <div class="filter"><b class="hidden-xs">Sort By</b>
            <select>
              <option value="9" selected="selected">Date</option>
              <option value="12">Price</option>
              <option value="15">Popularity</option>
            </select>
          </div>
          
        </div>
        <!-- /Products Filter -->
        
        <!-- Row -->
        <div class="product-grid row grid-20 mgb-20">
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product1.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                  <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                  <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                  <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <span class="label label-sale">sale</span>
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Grey winter jacket</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price price-old">$2350</span><span class="price">$1500</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product2.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                  <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                  <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                  <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Black lase blouse</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price">$2600</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product3.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                  <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                  <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                  <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <span class="label label-hot">popular</span>
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Chinese style coat</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price">$840</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product4.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                  <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                  <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                  <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Long striped dress</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price">$1820</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product5.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                  <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                  <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                  <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Srapless night dress</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price">$675</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <div class="col-sm-6 col-md-4">
            
            <!-- product -->
            <div class="product clearfix">
              
              <!-- Image -->
              <div class="image">
                <a href="product.html" class="main"><img src="images/products/product6.jpg" alt=""></a>
                <ul class="additional">
                  <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                  <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                  <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                  <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                </ul>
              </div>
              <!-- Image -->
              
              <span class="label label-sale">sale</span>
              
              <!-- Details -->
              <div class="details">
                
                <a class="title" href="product.html">Gold detailed dress</a>
                
                <!-- rating -->
                <ul class="hlinks hlinks-rating">
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                  <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                </ul>
                <!-- /rating -->
                
                <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                
                <!-- Price Box -->
                <div class="price-box">
                  <span class="price price-old">$1550</span><span class="price">$1220</span>
                </div>
                <!-- /Price Box -->
                
                <!-- buttons -->
                <div class="btn-group">
                  <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>
                  <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                </div>
                <!-- /buttons -->
                
              </div>
              <!-- /Details -->
              
            </div>
            <!-- /product -->
            
          </div>
          <!-- /Col -->
        </div>
        <!-- /Row -->
        
        <!-- Pagination -->
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
        <!-- /Pagination -->
        
      </div>
      <!-- /Main Col -->
      
      <!-- Side Col -->
      <div class="side-col col-sm-3 col-md-3">
        <!-- Side Widget -->
        <div class="side-widget no-margin-l">
          
          <h5 class="boxed-title">sub categories</h5>
          
          <!-- ul-toggle -->
          <ul class="ul-toggle font-size-sm">
            <li><a href="#"><i class="icon fa fa-angle-right"></i>Handbags</a><i class="toggler ti ti-plus"></i>
            <ul>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>Dresses</a></li>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>Shoes</a></li>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>Sun Glasses</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="icon fa fa-angle-right"></i>Shoes</a><i class="toggler ti ti-plus"></i>
          <ul>
            <li><a href="#"><i class="icon fa fa-angle-right"></i>Dresses</a></li>
            <li><a href="#"><i class="icon fa fa-angle-right"></i>Shoes</a></li>
            <li><a href="#"><i class="icon fa fa-angle-right"></i>Sun Glasses</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="icon fa fa-angle-right"></i>Dresses</a><i class="toggler ti ti-plus"></i>
        <ul>
          <li><a href="#"><i class="icon fa fa-angle-right"></i>Dresses</a></li>
          <li><a href="#"><i class="icon fa fa-angle-right"></i>Shoes</a></li>
          <li><a href="#"><i class="icon fa fa-angle-right"></i>Sun Glasses</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="icon fa fa-angle-right"></i>Sun Glasses</a></li>
      <li><a href="#"><i class="icon fa fa-angle-right"></i>Hair Products</a></li>
    </ul>
    <!-- /ul-toggle -->
    
  </div>
  <!-- /Side Widget -->
  
  
  <!-- Side Widget -->
  <div class="side-widget no-margin-l">
    
    <h5 class="boxed-title">price filter</h5>
    
    <!-- Price Range Form -->
    <form class="side-form-panel">
      <label>Min Price</label>
      <div class="form-group slider-group">
        <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#min1" data-options="{min:0, max:1000, value:500}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
        <input id="min1" class="form-control" value="500" type="text">
      </div>
      <label>Max Price</label>
      <div class="form-group slider-group">
        <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#max1" data-options="{min:0, max:1000, value:500}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
        <input id="max1" class="form-control" value="500" type="text">
      </div>
      <button class="btn btn-outline btn-block">submit</button>
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
<div class="newsletter-block boxed-section overlay-dark-m cover-2-bg">

<!-- Container -->
<div class="container">
<form>
<!-- Row -->
<div class="row grid-10">
  <!-- Col -->
  <div class="col-sm-3 col-md-2">
    <span class="case-c">get newsletter</span>
  </div>
  <!-- Col -->
  
  <!-- Col -->
  <div class="col-sm-6 col-md-8">
    <input class="form-control" type="text" placeholder="Enter your email address">
  </div>
  <!-- Col -->
  
  <!-- Col -->
  <div class="col-sm-3 col-md-2">
    <button class="btn btn-block btn-color yellow-bg"><i class="icon-left fa fa-envelope"></i>subscribe</button>
  </div>
  <!-- /Col -->
  
</div>
<!-- /Row -->
</form>
</div>
<!-- /Container -->

</div>
@endsection