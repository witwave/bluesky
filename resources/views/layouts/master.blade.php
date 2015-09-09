<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="。">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>App Name - @yield('title')</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">
       
        
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>