<!DOCTYPE html>
<html lang="en" class="style-1">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>欢迎登录</title>
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
            <div class="form-panel width-33pc width-100pc-xs hcenter">
            <header>欢迎登录</header>
            <fieldset>
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>注意!</strong> 您的输入有误.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form method="POST" action="/auth/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="return" value="{{ $return }}">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email"  name="email" class="form-control" placeholder="请输入邮箱" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password"  name="password" class="form-control" placeholder="输入密码" value="{{ old('password') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="remember">记住我 </label>
                    <a class="pull-right">忘记密码?</a>
                  </div>
                  <button class="btn btn-default btn-lg btn-block" type="submit">登录</button>
                </form>
              </fieldset>
            </div>
            <!-- /Form Panel -->
            <div class="align-center">还不有帐号? <a href="/auth/register">注册</a></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
    <script src="/uikit/js/jquery-latest.min.js"></script>
  </body>
</html>