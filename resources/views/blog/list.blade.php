@extends('layouts.main')
@section('content')
<section class="intro-block intro-page boxed-section cover-4-bg overlay-dark-m">
  
  <!-- Container -->
  <div class="container">
    <!-- Section Title -->
    <div class="section-title invert-colors no-margin-b">
      <h2>blog home</h2>
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
      <li><a href="#">other</a></li>
      <li class="active">blog</li>
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
    <!-- Row -->
    <div class="row">
      <!-- Main Col -->
      <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
        
        <!-- Blog Entry -->
        <article class="blog-entry">
          
          <img src="images/slides/slide4.jpg" alt="pic">
          <h4><a href="blog-post.html">Brand new theme released</a></h4>
          <div class="meta">
            <span class="date"><i class="fa fa-calendar"></i><a href="#">Feb 11, 2015</a></span>
            <span class="author"><i class="fa fa-user"></i><a href="#">By admin</a></span>
            <span class="tag"><i class="fa fa-tags"></i><a href="#">Design </a>, <a href="#">Web</a></span>
            <span class="comments"><i class="fa fa-comments"></i><a href="#">4 Comments</a></span>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="blog-post.html" class="continue btn btn-primary">read more</a>
          
        </article>
        <!-- /Blog Entry -->
        
        <!-- Blog Entry -->
        <article class="blog-entry">
          
          <img src="images/slides/slide2.jpg" alt="pic">
          <h4><a href="blog-post.html">Top 10 must have fashion accesories.</a></h4>
          <div class="meta">
            <span class="date"><i class="fa fa-calendar"></i><a href="#">Feb 8, 2015</a></span>
            <span class="author"><i class="fa fa-user"></i><a href="#">By admin</a></span>
            <span class="tag"><i class="fa fa-tags"></i><a href="#">Design </a>, <a href="#">Web</a></span>
            <span class="comments"><i class="fa fa-comments"></i><a href="#">4 Comments</a></span>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="blog-post.html" class="continue btn btn-primary">read more</a>
          
        </article>
        <!-- /Blog Entry -->
        
        <!-- Blog Entry -->
        <article class="blog-entry">
          
          <img src="images/slides/slide1.jpg" alt="pic">
          <h4><a href="blog-post.html">The hottest fashion trends</a></h4>
          <div class="meta">
            <span class="date"><i class="fa fa-calendar"></i><a href="#">Jan 20, 2015</a></span>
            <span class="author"><i class="fa fa-user"></i><a href="#">By admin</a></span>
            <span class="tag"><i class="fa fa-tags"></i><a href="#">Design </a>, <a href="#">Web</a></span>
            <span class="comments"><i class="fa fa-comments"></i><a href="#">4 Comments</a></span>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="blog-post.html" class="continue btn btn-primary">read more</a>
          
        </article>
        <!-- /Blog Entry -->
        
        <!-- Pagination -->
        <ul class="pagination no-margin-y">
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
      <div class="side-col side-col-padded col-sm-4 col-md-4">
        <!-- Side Widget -->
        <div class="side-widget">
          
          <h5 class="boxed-title">page topics</h5>
          
          <ul class="ul-toggle">
            <li><a href="#"><i class="icon fa fa-angle-right"></i>About our company</a><i class="toggler ti ti-plus"></i>
            <ul>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>First Topic Link</a></li>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>Second Topic Link</a></li>
              <li><a href="#"><i class="icon fa fa-angle-right"></i>Third Topic Link</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="icon fa fa-angle-right"></i>Our Mission &amp; Vision</a><i class="toggler ti ti-plus"></i>
          <ul>
            <li><a href="#">First Topic Link</a></li>
            <li><a href="#">Second Topic Link</a></li>
            <li><a href="#">Third Topic Link</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="icon fa fa-angle-right"></i>Clients and case studies</a><i class="toggler ti ti-plus"></i>
        <ul>
          <li><a href="#">First Topic Link</a></li>
          <li><a href="#">Second Topic Link</a></li>
          <li><a href="#">Third Topic Link</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="icon fa fa-angle-right"></i>Our portfolio</a></li>
      <li><a href="#"><i class="icon fa fa-angle-right"></i>Price Plans</a></li>
    </ul>
    
  </div>
  <!-- /Side Widget -->
  
  <!-- Side Widget -->
  <div class="side-widget">
    
    <h5 class="boxed-title">recent posts</h5>
    
    <ul class="vlinks vlinks-iconed vlinks-ruled-dots vlinks-lg">
      <li><img src="images/thumb1.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>5 comments</span></li>
      <li><img src="images/thumb2.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>10 comments</span></li>
      <li><img src="images/thumb3.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>22 comments</span></li>
    </ul>
    
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