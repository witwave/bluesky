<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Wedding Shoppe Stores - Bootstrap 3 Template</title>
		@include("include/head")
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
		<link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
		<link rel="shortcut icon" href="images/fav.png">
	</head>
	<body>
		<!-- Header Section Starts -->
		<header id="header-area">
			<!-- Header Top Starts -->
			@include('include.header-top')
			<!-- Header Top Ends -->
			<!-- Main Header Starts -->
			@include('include.header-main')
			<!-- Main Header Ends -->
			<!-- Main Menu Starts -->
			@include('include.nav')
			<!-- Main Menu Ends -->
		</header>
		<!-- Header Section Ends -->
		@yield('content')
		@include('include.footer')
		<!-- Footer Section Ends -->
		@include('include.foot')
	</body>
</html>