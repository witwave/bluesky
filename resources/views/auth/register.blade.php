<!DOCTYPE html>
<html lang="en" class="style-1">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <!-- Bootstrap core CSS
    ================================================== -->
    <link href="/uikit/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template
    ================================================== -->
    <link href="/uikit/css/uikit.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/uikit/js/html5shiv.js"></script>
    <script src="/uikit/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="tile-1-bg">
    <!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
            <header>欢迎注册</header>
            <fieldset>
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form method="POST" action="/auth/register">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" name="nickname" class="form-control" placeholder="请输入呢称" value="{{ old('nickname') }}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="请输入常用邮箱" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="请输入重复密码">
                  </div>
                </div>
                <div class="form-group hide">
                  <label class="checkbox-inline"><input type="checkbox" name="agree">我同意 <a class="href">蓓爱花坊</a> 使用协议</label>
                </div>
                <button class="btn btn-default btn-lg btn-block" type="submit" >注册</button>
              </form>
            </fieldset>
          </div>
          <!-- /Form Panel -->
          <div class="align-center">已有帐号? <a href="/auth/login">直接登录</a></div>
                <div class="align-center"><small>注册用户表示接受 <a class="href">蓓爱花坊</a> 使用协议</label></small></div>
        </div>
        <!-- /Container -->
      </div>
      <!-- /Vcenter this -->
    </div>
    <!-- /Vcenter -->
  </div>
  <!-- /Empty Block
  ================================================== -->
  <!-- Javascript
  ================================================== -->
  <script src="/uikit/js/jquery-latest.min.js"></script>
  <script src="/uikit/js/uikit.js"></script>
  <!-- /JavaScript
  ================================================== -->
</body>
</html>
