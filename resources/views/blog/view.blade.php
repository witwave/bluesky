@extends('layouts.main')
@section('content')
<section class="intro-block intro-page boxed-section cover-1-bg overlay-dark-m">
  
  <!-- Container -->
  <div class="container">
    <!-- Section Title -->
    <div class="section-title invert-colors no-margin-b">
      <h2>Single Post</h2>
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
        
        <!-- Post -->
        <article class="blog-entry">
          <img src="/images/slides/slide1.jpg" alt="pic">
          <h4><a href="blog-post.html">Brand new theme released</a></h4>
          <div class="meta">
            <span class="date"><i class="fa fa-calendar"></i><a href="#">June 20, 2013</a></span>
            <span class="author"><i class="fa fa-user"></i><a href="#">By admin</a></span>
            <span class="tag"><i class="fa fa-tags"></i><a href="#">Design </a>, <a href="#">Web</a></span>
            <span class="comments"><i class="fa fa-comments"></i><a href="#">4 Comments</a></span>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <blockquote><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites</p></blockquote>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        </article>
        <!-- Post /END -->
        
        <h4>comments (4)</h4>
        
        <!-- Comments List -->
        <ol class="comments-list">
          <li class="clearfix">
            <div class="avatar">
              <img alt="avatar" src="/images/avatar.png">
            </div>
            <div class="comment-box clearfix">
              <a class="username" href="#">Admin</a>
              <span class="date">Feb 26th, 2015 12:25 am</span>
              <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
            </div>
          </li>
          <li class="clearfix">
            <div class="avatar">
              <img alt="avatar" src="/images/avatar.png">
            </div>
            <div class="comment-box clearfix">
              <a class="username" href="#">Mary Jane</a>
              <span class="date">Feb 6th, 2013 8:35 pm</span>
              <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
            </div>
          </li>
          <li class="clearfix">
            <div class="avatar">
              <img alt="avatar" src="/images/avatar.png">
            </div>
            <div class="comment-box clearfix">
              <a class="username" href="#">John Doe</a>
              <span class="date">Jan 28th, 2015 6:12 pm</span>
              <p class="comment">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
            </div>
          </li>
          
        </ol>
        <!-- Comments List / END -->
        
        <hr>
        
        <h4 class="case-c">add comment</h4>
        
        <!-- Comment Form -->
        <div class="contact-form">
          <form>
            <!-- Nested Row -->
            <div class="row">
              
              <!-- Col -->
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Your Name - Required" class="form-control">
                </div>
              </div>
              <!-- /Col -->
              <!-- Col -->
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Your Email - Required" class="form-control">
                </div>
              </div>
              <!-- /Col -->
              
            </div>
            <!-- /Nested Row -->
            
            <div class="form-group">
              <textarea placeholder="You Message..." class="form-control" rows="8"></textarea>
            </div>
            
            <button class="btn btn-default btn-bigger" type="submit">Submit comment</button>
          </form>
        </div>
        <!-- /Contact Form -->
        
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
      <li><img src="/images/thumb1.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>5 comments</span></li>
      <li><img src="/images/thumb2.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>10 comments</span></li>
      <li><img src="/images/thumb3.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>22 comments</span></li>
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