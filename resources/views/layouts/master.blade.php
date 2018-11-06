<html lang="zxx">
    <head>
        <title>PTY Shoes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <base href="{{asset('')}}">
        <script type="application/x-javascript">
            addEventListener("load", function () {
            	setTimeout(hideURLbar, 0);
            }, false);
            
            function hideURLbar() {
            	window.scrollTo(0, 1);
            }
        </script>
        <!-- //custom-theme -->
        <link href="pages/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="pages/css/shop.css" type="text/css" media="screen" property="" />
        <link href="pages/css/style7.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="pages/css/flexslider.css" type="text/css" media="screen" />
        <link href="pages/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="pages/css/contact.css">
        <link rel="stylesheet" href="pages/css/about.css" type="text/css" media="screen" property="" />
        <!-- Owl-carousel-CSS -->
        <link rel="stylesheet" type="text/css" href="pages/css/jquery-ui1.css">
        <link href="pages/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome-icons -->
        <link href="pages/css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons 
            <link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
                rel="stylesheet">
            <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"> -->
    </head>
    <body>
        <!-- banner -->
        @yield('header')
        @yield('content')
        @yield('slidebar')
        @include('layouts.signup')
        @include('layouts.footer')
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- js -->
        <script type="text/javascript" src="pages/js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- cart-js -->
        <script src="pages/js/minicart.js"></script>
        <!-- <script>
            shoe.render();
            
            shoe.cart.on('shoe_checkout', function (evt) {
                var items, len, i;
            
                if (this.subtotal() > 0) {
                    items = this.items();
            
                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
        </script> -->

        <!-- //cart-js -->
        <!-- /nav -->
        <script src="pages/js/modernizr-2.6.2.min.js"></script>
        <script src="pages/js/classie.js"></script>
        <script src="pages/js/demo1.js"></script>
        <!-- //nav -->
        <!--search-bar-->
        <script src="pages/js/search.js"></script>
        <!--//search-bar-->
        <!-- price range (top products) -->
        <script src="pages/js/jquery-ui.js"></script>
        <script>
            //<![CDATA[ 
            $(window).load(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [50, 6000],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
            
            }); //]]>
        </script>
        <!-- //price range (top products) -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="pages/js/move-top.js"></script>
        <script type="text/javascript" src="pages/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smoth-scrolling -->
        <script type="text/javascript" src="pages/js/bootstrap-3.1.1.min.js"></script>
    </body>
        