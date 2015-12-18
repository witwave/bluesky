<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="_token" content="{{ csrf_token() }}"/>
        <title>@yield('title')</title>
        <!-- Bootstrap core CSS
        ================================================== -->
        <link href="/uikit/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template
        ================================================== -->
        <link href="/uikit/css/uikit.css" rel="stylesheet">
        <link href="/assets/css/timepicki.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/uikit/js/html5shiv.js"></script>
        <script src="/uikit/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="preload tile-1-bg">
        <!-- Preloader
        ============================================ -->
        <div class="page-preloader">
            <div class="vcenter"> <div class="vcenter-this"><img class="anim" src="/images/loader.gif" alt="loading..." /></div></div>
        </div>
        <!-- /Preloader
        ============================================ -->
        <!-- Page Wrapper
        1.page-wrapper shadow boxed-wrapper  ===wide
        2.boxed-wrapper                      ===box
        ++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="page-wrapper shadow">
        	@include('include.header')
            @yield('content')
            @include('include.footer')
        </div>
        <!-- /Page Wrapper
        ++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!-- Javascript
        ================================================== -->
        <script src="/uikit/js/jquery-latest.min.js"></script>
        <script src="/assets/js/timepicki.js"></script>

        <script src="/uikit/js/uikit.js"></script>

        <!-- /JavaScript
        ================================================== -->
    </body>
</html>