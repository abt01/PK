
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Peezar Khana</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="{{asset('user/ico/favicon.png')}}">

    <!-- Google web fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('user/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/owl-carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/lib.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('user/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/footer2.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/header2.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{asset('user/css/home2.css')}}" rel="stylesheet">
    <!-- <link href="css/responsive.css')}}'" rel="stylesheet"> -->



</head>

<body class="common-home res layout-home2 banners-effect-7">
<div id="wrapper" class="wrapper-full">
    <div  class="">

        <!-- Header Container  -->
        <header id="header" class=" variantleft type_2">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">

                            <div class="form-group languages-block ">
                                <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                    <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                    </a>

                                </form>
                            </div>
                        </div>
                        <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
                            <div class="tabBlock" id="TabBlock-1">
                                <ul class="top-link list-inline">
                                    <li class="wishlist hidden-xs"><a href="{{route('wishlist')}}" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                                    <li class="login"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
                                    <li class="register"><a href="{{route('register')}}" title="Register"><span>Register</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->

            <!-- Header center -->
            <div class="header-center left">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="navbar-logo col-md-3 col-sm-12 col-xs-7">
                            <a href="{{route('/')}}"><img src="{{asset('user/img/demo/logo/logo51.png')}}" title="Peezar Khana" alt="Peezar Khana"></a>
                        </div>
                        <!-- //end Logo -->

                        <!-- Search -->
                        <div id="sosearchpro" class=" col-xs-12 col-sm-8 col-md-5 search-pro">
                            <form method="GET" action="index.html">
                                <div id="search0" class="search input-group">


                                    <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
                                    <span class="input-group-btn">
											<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
										</span>
                                </div>
                                <input type="hidden" name="route" value="product/search">
                            </form>

                        </div>
                        <!-- //end Search -->

                        <!-- Secondary menu -->
                        <div class="col-md-4 col-sm-4 col-xs-5 shopping_cart pull-right">
                            <div class="header-text hidden-xs">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>	   Call Us: (+92)3340167330</p>
                            </div>
                            <!--cart-->
                            <div id="cart" class=" btn-group btn-shopping-cart">
                                <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                                    <div class="shopcart">
                                        <span class="handle pull-left"></span>
                                        <span class="number-shopping-cart">0</span>
                                        <span class="title">My Cart</span>
                                        <p class="text-shopping-cart cart-total-full"> RS 0.00 </p>
                                    </div>
                                </a>

                                <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="{{route('product')}}"> <img src="{{asset('user/img/demo/cms/image2.jpg')}}" style="width:70px" alt="Kohati SMile" title="Kohati Smile" class="preview"> </a>  -->
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="{{route('product')}}">Kohati Smile</a> </td>
                                                <td class="text-center"> x1 </td>
                                                <td class="text-center"> RS 2500.00 </td>
                                                <td class="text-right">
                                                    <a href="{{route('product')}}" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="{{route('product')}}"> <img src="{{asset('user/img/demo/cms/i11.jpg')}}" style="width:70px" alt="Kheri" title="Brown Kheri" class="preview"> </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="{{route('product')}}">Brown Kheri</a> </td>
                                                <td class="text-center"> x1 </td>
                                                <td class="text-center"> RS 3000.00 </td>
                                                <td class="text-right">
                                                    <a href="{{route('product')}}" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                    </td>
                                                    <td class="text-right">RS 5500.00</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{route('checkout')}}"><i class="fa fa-share"></i>Checkout</a> </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- //Header center -->

            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="sidebar-menu col-md-3  col-xs-6 hidden-xs">
                            <div class="responsive so-megamenu ">
                                <div class="so-vertical-menu no-gutter compact-hidden">
                                    <nav class="navbar-default">
                                        <div class="container-megamenu vertical ">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            All Categories
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-header">
                                                <button   id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">

                                                </button>
                                            </div>
                                            <div class="vertical-wrapper" >
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu">
                                                            <li class="item-vertical style1 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    <span>Kheri</span>

                                                                </a>
                                                                <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                    <div class="content" style="display: none;">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4 col-sm-6 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Single Sole</a>

                                                                                                </li>

                                                                                            </ul>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Double Sole</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    <span>Kohati Smile</span>

                                                                </a>
                                                            </li>
                                                            <li class="item-vertical ">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span class="label"></span>

                                                                    <span>Kohati</span>

                                                                </a>

                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    <span>Sawana/Sawas</span>

                                                                </a>
                                                                <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                    <div class="content" style="display: none;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4 col-sm-6 static-menu">
                                                                                        <div class="menu">

                                    </nav>
                                </div>
                            </div>

                        </div>


                        <!-- Main menu -->
                        <div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-6 ">
                            <div class="responsive so-megamenu ">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">

                                        <div class="navbar-header">
                                            <button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                        <li class="home hover">

                                                            <p class="close-menu"></p>
                                                            <a href="home2.html" class="clearfix menu1">
                                                                <strong>Home</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>


                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('category')}}" class="clearfix menu1">
                                                                <strong>Categories</strong>
                                                                <span class="label"></span>

                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: 0px; display: none;">
                                                                <div class="content" style="height: 398px; display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img src="{{asset('user/img/demo/cms/image1.jpg')}}" alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img src="{{asset('user/img/demo/cms/i5.png')}}" alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Kheri</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#" class="main-menu">Single Sole</a></li>
                                                                                            <li><a href="#" class="main-menu">Double Sole</a></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Kohati Smile</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Kohati</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Sawana/Sawas</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('about-us')}}" class="clearfix menu1">
                                                                <strong>About</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('contact')}}" class="clearfix menu1">
                                                                <strong> Contact Us</strong>
                                                                <span class="lable"></span>
                                                            </a>

                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- //end Main menu -->

                    </div>
                </div>

            </div>


        </header>
        <!-- //Header Container  -->
        <!-- Block Spotlight1  -->
        <section class="so-spotlight1">
            <div id="so-slideshow" >
                <div class="owl-carousel" data-loop="yes" data-margin="0" data-nav="yes" data-dots="yes" data-items_xs="1" data-items_sm="1" data-items_md="1">
                    <div><a href="#"><img src="{{asset('user/img/demo/cms/i23.jpg')}}" alt="" width="100%" height="auto"></a></div>
                    <div><a href="#"><img src="{{asset('user/img/demo/cms/i3.jpg')}}" alt="" width="100%" ></a></div>
                </div>

            </div>
        </section>
        <!-- //Block Spotlight1  -->

        <!-- Block Spotlight2  -->
        <section class="so-spotlight2">
            <div class="modcontent clearfix">
                <div class="policy-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="banner-policy">
                                    <div class="policy policy1">
                                        <a href="#">
                                            <span class="ico-policy"></span>
                                            <div class="service-info">
                                                <span class="title">Free Shipping & Return</span> <br> <span>Free shipping on orders over RS 3000</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="policy policy2">
                                        <a href="#">
                                            <span class="ico-policy"></span>
                                            <div class="service-info">
                                                <span class="title">Money Guarantee</span> <br><span>30 days money back guarantee</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="policy policy3">
                                        <a href="#">
                                            <span class="ico-policy"></span>
                                            <div class="service-info">
                                                <span class="title">Online Support</span> <br><span>We support online 24/24 on day</span>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- //Block Spotlight2  -->

        <!-- Main Container  -->
        <div class="main-container container">

            <div class="row">
                <aside class="col-md-3 col-sm-4 col-xs-12  content-aside left_column">
                    <div class="special">
                        <h3 class="modtitle">Sale Offers</h3>
                        <hr><hr><hr>
                        <div class="owl-carousel owl-special" data-margin="0" data-loop="yes" data-nav="yes" data-dots="no" data-items_xs="1" data-items_sm="1" data-items_md="1">
                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt=""></a>

                                            <!--Sale Label-->
                                            <span class="sale">-11%</span>
                                        </div>
                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip816167" style="top: -79px; left: 0px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Add to Wish List</div></div></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="time-sale">
                                            <p class="time-day">20 days</p>
                                            <p class="time-hour">11  :  25  :  53</p>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Product #01</a></h4>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                </div>
                                            </div>

                                            <div class="price">
                                                <span class="price-new">RS 2500</span>
                                                <span class="price-old">RS 2800</span>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>
                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i4.png')}}" alt=""></a>
                                            <!--Sale Label-->
                                            <span class="sale">-11%</span>
                                        </div>
                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip8161" style="top: -79px; left: 0px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Add to Wish List</div></div></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="time-sale">
                                            <p class="time-day">20 days</p>
                                            <p class="time-hour">11  :  25  :  53</p>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Product #02</a></h4>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                </div>
                                            </div>

                                            <div class="price">
                                                <span class="price-new">RS 1700</span>
                                                <span class="price-old">RS 1900</span>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>
                        </div>

                </aside>
                <div id="content" class="col-md-9 col-sm-8  col-xs-12">
                    <div class="digital">
                        <div class="row">
                            <div class=" col-sm-12">
                                <h3 class="modtitle">New Arrival</h3>
                                <hr>
                                <hr>
                                <hr>
                                <div class="digital-owl">
                                    <div class=" owl-carousel digital-owl " data-dots="no" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="2" data-items_md="4" data-margin="20">
                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container  second_img ">
                                                        <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i11.jpg')}}" alt=""></a>
                                                        <!--Sale Label-->
                                                        <span class="new">New</span>

                                                        <div class="hover">
                                                            <ul>
                                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product')}}">Product #01</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">RS 4200</span>

                                                        </div>

                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>


                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container  second_img ">
                                                        <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt=""></a>
                                                        <!--Sale Label-->
                                                        <span class="new">New</span>

                                                        <div class="hover">
                                                            <ul>
                                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product')}}">Product#02</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">RS 1300</span>

                                                        </div>

                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>


                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container  second_img ">
                                                        <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i44.jpg')}}" alt="" width="120" height="120"></a>
                                                        <!--Sale Label-->
                                                        <span class="new">New</span>

                                                        <div class="hover">
                                                            <ul>
                                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product')}}">Product #03</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">RS 1900</span>

                                                        </div>

                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>


                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container  second_img ">
                                                        <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i5.png')}}" alt="" width="120" height="120"></a>
                                                        <!--Sale Label-->

                                                        <div class="hover">
                                                            <ul>
                                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product')}}">Product #04</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">RS 1400</span>

                                                        </div>

                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>

                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container  second_img ">
                                                        <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i6.png')}}" alt="" width="120" height="120"></a>
                                                        <!--Sale Label-->

                                                        <div class="hover">
                                                            <ul>
                                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product')}}">Product #06</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">RS 1900</span>

                                                        </div>

                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- //Main Container -->

    <script type="text/javascript">
        <!--
        var $typeheader = 'header-home2';
        //-->
    </script>

    <!-- Footer Container -->
    <footer class="footer-container type_footer1">

        <!-- Footer Top Container -->
        <section class="footer-top">
            <div class="container content">
                <div class="">
                    <div class=" collapsed-block ">
                        <div class="module clearfix">
                            <h3 class="modtitle">Contact Us	</h3>
                            <div class="modcontent">
                                <ul class="contact-address">

                                    <li><span class="fa fa-envelope-o"></span><span>Email : </span> <a href="#"> hussain.qaisrani27@gmail.com</a></li>
                                    <li><p><span class="fa fa-phone"> </span><span>Phone :</span> 03340167330 </p> </li>
                                    <li><p><span class="fa fa-phone"> </span><span>Phone :</span> 03099184977</p> </li>
                                </ul>
                            </div>
                            <div class="share-icon">
                                <ul>
                                    <li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    <li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="instagram"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" box-information">
                        <div class="module clearfix">
                            <h3 class="modtitle">Information</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="{{route('faq')}}">FAQ</a></li>
                                    <li><a href="{{route('order-history')}}">Order history</a></li>
                                    <li><a href="{{route('order-information')}}">Order information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=" box-extras">
                        <div class="module clearfix">
                            <h3 class="modtitle">Extras</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>

                                    <li><a href="{{route('my-account')}}">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>





                </div>
            </div></section>
        <!-- /Footer Top Container -->
        <div class="footer-mid">
            <div class=" help">
                <div class=" container">
                    <div class=" row">
                        <div class="footer-mid-left col-sm-6 col-xs-12">
                            <h3>NEED HELP? </h3>
                            <p>Call us anytime at AT (+92) 334-0167330</p>
                        </div>
                        <div class="footer-mid-right col-sm-6 col-xs-12">
                            <div class="btn-sub">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Your Email Address..." name="subscribe">
                                <button type="submit" class="button-search btn btn-primary" name="submit_subscribe">Subscribe</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer Top Container -->


    <div class="footer-bottom-block ">
        <div class=" container">
            <div class="row">
                <div class="footer-bottom-header">

                    <div class="col-xs-12 col-sm-7 pay">
                        <ul>

                            <li><img src="{{asset('user/')}}img/demo/payment/jazz.png')}}'" alt=""></li>
                            <li><img src="{{asset('user/')}}img/demo/payment/easy2.png')}}'" alt=""></li>
                            <!--	<li><img src="img/demo/payment/paypal.jpg" alt=""></li>
                                <li><img src="img/demo/payment/union.jpg" alt=""></li>
                                <li><img src="img/demo/payment/cirrus.jpg" alt=""></li>
                                <li><img src="img/demo/payment/ebay.jpg" alt=""></li>  -->
                        </ul>
                    </div>
                </div>
                <div class="text-footer-bot">
                    <p>COPYRIGHTS ©2019 PEZAR KHANA. ALL RIGHTS RESERVED. </p>
                </div>
                <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
            </div>
        </div>
    </div>
    </footer>

</div>
<!-- Social widgets -->
<!-- End Social widgets -->
</div>

<!-- Include Libs & Plugins
	============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{asset('user/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/themejs/libs.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/unveil/jquery.unveil.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/datetimepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/modernizr/modernizr-2.6.2.min.js')}}"></script>


<!-- Theme files
	============================================ -->
<script type="text/javascript" src="{{asset('user/js/themejs/application.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/themejs/homepage.js')}}"></script>
<!-- <script type="text/javascript" src="js/themejs/toppanel.js')}}'"></script> -->
<script type="text/javascript" src="{{asset('user/js/themejs/so_megamenu.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/themejs/addtocart.js')}}"></script>
<!-- <script type="text/javascript" src="js/themejs/pathLoader.js')}}'"></script>	 -->




</body>
</html>
