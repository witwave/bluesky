<!-- Header Block
============================================== -->
<header class="header-block line-top">
  <!-- Main Header
  ............................................ -->
  <div class="main-header container">
    <!-- Header Cols -->
    <div class="header-cols">
      <!-- Brand Col -->
      <div class="brand-col hidden-xs">
        <!-- vcenter -->
        <div class="vcenter">
          <!-- v-centered -->
          <div class="vcenter-this">
            <a href="/">
              <img src="/images/logo1.png" alt="BELOVED">
            </a>
          </div>
          <!-- v-centered -->
        </div>
        <!-- vcenter -->
      </div>
      <!-- /Brand Col -->
      <!-- Right Col -->
      <div class="right-col">
        <!-- vcenter -->
        <div class="vcenter">
          <!-- v-centered -->
          <div class="vcenter-this">
            <!-- Nav Side -->
            <nav class="nav-side navbar hnav hnav-sm hnav-borderless" role="navigation">
              <!-- Dont Collapse -->
              <div class="navbar-dont-collapse no-toggle">
                <!-- Nav Right -->

                <ul class="nav navbar-nav navbar-right case-u navbar-center-xs">
                @if (Auth::guest())
                  <li class="dropdown has-panel">
                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-user"></i><span class="hidden-sm">登录</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>
                    <!-- Dropdown Panel -->
                    <div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs" data-keep-open="true">
                      <fieldset>
                        <form method="post" action="/auth/login">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input name="email" class="form-control" placeholder="电子邮箱" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                              <input name="password" class="form-control" placeholder="密码" type="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="checkbox-inline"><input  name="remember" type="checkbox">记住我</label>
                          </div>
                          <button class="btn btn-primary btn-block" type="submit">登录</button>
                        </form>
                      </fieldset>
                    </div>
                    <!-- /Dropdown Panel -->
                  </li>
                  <li class="dropdown has-panel">
                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-pencil-alt"></i><span class="hidden-sm">注册</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>
                    <!-- Dropdown Panel -->
                    <div class="dropdown-menu dropdown-panel arrow-top" data-keep-open="true">
                      <fieldset>
                        <form method="post" action="/auth/register">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input name="email" class="form-control" placeholder="电子邮箱" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                              <input name="password" class="form-control" placeholder="密码" type="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                              <input name="password" class="form-control" placeholder="重复密码" type="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="checkbox-inline"><input name="agree" type="checkbox">我接受网站注册协议.</label>
                          </div>
                          <button class="btn btn-primary btn-block" type="submit">注册</button>
                        </form>
                      </fieldset>
                    </div>
                    <!-- /Dropdown Panel -->
                  </li>
                  @endif
                </ul>
                <!-- /Nav Right-->
              </div>
              <!-- /Dont Collapse -->
            </nav>
            <!-- /Nav Side -->
          </div>
          <!-- /v-centered -->
        </div>
        <!-- /vcenter -->
      </div>
      <!-- /Right Col -->
      <!-- Left Col -->
      <div class="left-col">
        <!-- vcenter -->
        <div class="vcenter">
          <!-- v-centered -->
          <div class="vcenter-this">
            <form class="header-search">
              <div class="form-group">
                <input class="form-control" placeholder="查找" type="text">
                <button class="btn btn-empty"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
          <!-- v-centered -->
        </div>
        <!-- vcenter -->
      </div>
      <!-- /Left Col -->
    </div>
    <!-- Header Cols -->
  </div>
  <!-- /Main Header
  .............................................. -->
  <!-- Nav Bottom
  .............................................. -->
  <nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">
    <!-- Container -->
    <div class="container">
      <!-- Header-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#nav-collapse1">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-navicon"></i>
        </button>
        <a class="navbar-brand visible-xs" href="#"><img src="images/logo-xs.png" alt="B"></a>
      </div>
      <!-- /Header-->
 <!-- Collapse -->
            <div id="nav-collapse2" class="collapse navbar-collapse navbar-absolute">
            <?php $path=strtolower(Request::path()) ?>
              <!-- Navbar Center -->
              <ul class="nav navbar-nav navbar-center line-top case-c">
                <li class="{{ $path=='/'?'active':'' }}"  ><a href="/">首页</a></li>
                <li class="{{ $path=='category.html'?'active':'' }}"><a href="/category.html">新品</a></li>
                <li class="{{ $path=='category-2.html'?'active':'' }}"><a href="/category-2.html">蓓爱</a></li>
                <li class="{{ $path=='category-4.html'?'active':'' }}"><a href="/category-4.html">花礼</a></li>
                <li class="{{ $path=='category-15.html'?'active':'' }}"><a href="/category-15.html">爱品</a></li>
                {{--<li class="{{ $path=='news.html'?'active':'' }}"><a href="/news.html">动态</a></li>--}}
              </ul>
              <!-- /Navbar Center -->

            </div>
            <!-- /Collapse -->
    <!-- Dont Collapse -->
    <div class="navbar-dont-collapse">
      <!-- Navbar btn-group -->
      <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs">
        <!-- Btn Wrapper -->
        <div class="btn-wrapper dropdown">
          <a class="btn btn-outline" data-toggle="dropdown"><i class="ti-user"></i></a>
          <!-- Dropdown Menu -->
          <ul class="dropdown-menu">
            <li><a href="/user/profile">个人资料</a></li>
            <li><a href="/user/order">我的订单</a></li>
            <li><a href="/auth/logout">退出</a></li>
          </ul>
          <!-- /Dropdown Menu -->
        </div>
        <!-- /Btn Wrapper -->
        <!-- Btn Wrapper -->
        <?php $cart=Cart::content()?>
        <div class="btn-wrapper dropdown">
          <a aria-expanded="false" class="btn btn-outline" data-toggle="dropdown">
            @if ($count=count($cart)>0)
              <b class="count count-round">{{$count}}</b>
            @endif
            <i class="ti ti-bag"></i>
          </a>
          <!-- Dropdown Panel -->
          <div class="dropdown-menu dropdown-panel dropdown-right" data-keep-open="true">

            @if (count($cart)>0)
             <section>
              <!-- Mini Cart -->
              <ul class="mini-cart">
                @foreach($cart as $row)
                <!-- Item -->
                <li class="clearfix">
                  <img src="{{ $row->options->image}}" alt="{{ $row->name }}">
                  <div class="text">
                    <a class="title" href="/product/{{$row->id}}.html">{{$row->name}}</a>
                    <div class="details">{{$row->qty}} x ￥{{$row->price}}
                      <div class="btn-group hide">
                        <a class="btn btn-primary" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-default" href="#"><i class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
                <!-- /Item -->
              </ul>

              <!-- /Mini Cart -->
            </section>
            <section>
              <div class="row grid-10">
                <div class="col-md-6">
                  <a class="btn btn-base btn-block margin-y-5" href="cart.html">查看</a>
                </div>
                <div class="col-md-6">
                  <a class="btn btn-primary btn-block margin-y-5" href="checkout.html">付款</a>
                </div>
              </div>
            </section>
            @else
              <section><p></p><span>您的购物车为空</span></p></section>
            @endif
          </div>
          <!-- /Dropdown Panel -->
        </div>
        <!-- /Btn Wrapper -->
      </div>
      <!-- /Navbar btn-group -->

    </div>
    <!-- /Dont Collapse -->
  </div>
  <!-- /Container -->
</nav>
<!-- /Nav Bottom
.............................................. -->
</header>
<!-- /Header Block
============================================== -->