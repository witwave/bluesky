<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>
        <!-- Bootstrap core CSS
        ================================================== -->
        <link href="/uikit/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template
        ================================================== -->
        <link href="/uikit/css/uikit.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="uikit/js/html5shiv.js"></script>
        <script src="uikit/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="preload tile-1-bg">
        <!-- Preloader
        ============================================ -->
        <div class="page-preloader">
            <div class="vcenter"> <div class="vcenter-this"><img class="anim" src="images/loader.gif" alt="loading..." /></div></div>
        </div>
        <!-- /Preloader
        ============================================ -->
        <!-- Page Wrapper
        1.page-wrapper shadow boxed-wrapper  ===wide
        2.boxed-wrapper                      ===box
        ++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="page-wrapper shadow">

            @yield('content')

            <!-- Promo Modal
            ============================================ -->
            <div class="modal fade modal-promo" data-call="bs-modal" data-options="{show:true}">
                <!-- Dialog -->
                <div class="modal-dialog">

                    <!-- Promo Image (use background image to allow scaling) -->
                    <div class="promo-img bg-cover" style="background:url(images/modal-promo.jpg)"></div>

                    <!-- Text Col -->
                    <div class="text-col">
                        <div class="text">
                            <h5>daily exclusive deals</h5>

                            <img src="images/modal-promo-xs.jpg" alt="" class="visible-xs mgb-20" />
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</p>

                            <!-- Modal Form -->
                            <form class="form-inline modal-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address"/>
                                </div>
                                <button type="submit" class="btn btn-base">Subscribe</button>
                            </form>
                            <!-- /Modal Form -->
                            <p class="hidden-xs" >Follow us on social media for exclusive deals.</p>

                            <!-- hlinks -->
                            <ul class="hlinks hlinks-icons hlinks-icons-round color-icons-bg color-icons-hovered">
                                <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="icon fa fa-youtube"></i></a></li>
                            </ul>
                            <!-- /hlinks -->
                        </div>
                    </div>
                    <!-- /Text Col -->
                    <button type="button" class="btn-close btn btn-base" data-dismiss="modal"><i class="fa fa-close"></i></button>
                </div>
                <!-- /Dialog -->
            </div>
            <!-- /Promo Modal
            ============================================ -->

        </div>
        <!-- /Page Wrapper
        ++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!-- Javascript
        ================================================== -->
        <script src="uikit/js/jquery-latest.min.js"></script>
        <script src="uikit/js/uikit.js"></script>
        <!-- /JavaScript
        ================================================== -->
    </body>
</html>