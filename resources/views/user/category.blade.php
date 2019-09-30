
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('user/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('user/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('user/ico/apple-touch-icon-72-precomposed.pn')}}g">
    <link rel="apple-touch-icon-precomposed" href="{{asset('user/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('user/ico/favicon.png')}}">

    <!-- Google web fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('user/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/lib.css')}}" rel="stylesheet">
    <link href="{{asset('user/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('user/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/footer1.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/header1.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/checkout.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{asset('user/css/theme.css')}}" rel="stylesheet">

    <!-- <link href="css/responsive.css" rel="stylesheet"> -->


</head>

<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">


                    </div>
                    <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
                        <div class="tabBlock1" id="TabBlock-1">
                            <ul class="top-link list-inline">
                                <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                                <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
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
                    <div id="sosearchpro" class="col-xs-12 col-sm-8 col-md-5 search-pro">

                        <form method="GET" action="index.html">
                            <div id="search0" class="search input-group">
                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
                                <span class="input-group-btn">
										<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
									</span>
                            </div>

                        </form>

                    </div>
                    <!-- //end Search -->

                    <!-- Secondary menu -->
                    <div class="col-md-4 col-sm-4 col-xs-5 shopping_cart pull-right">
                        <div class="header-text hidden-xs">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>	   Call Us: (+92) 334-0167330</p>
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
                        <!--//cart-->
                    </div>
                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">


                    <!-- Main menu -->
                    <div class="megamenu-hori header-bottom-right  col-md-12 col-sm-12 col-xs-12 ">
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
                                                        <a href="{{route('home2')}}" class="clearfix menu1">
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
                                                                        <a href="#" class="title-submenu">Kohati Soft</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu">Sawana/Sawas</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>

                                                                                    </ul>
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
                                                            <strong>About </strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('contact')}}" class="clearfix menu1">
                                                            <strong>Contact Us</strong>
                                                            <span class="label"></span>
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

        <!-- Navbar switcher -->
        <!-- //end Navbar switcher -->

    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="header-main">
            <li class="home"><a href="index.html" >Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li> Categories</li>
        </ul>

        <div class="row">
            <!--Left Part Start -->
            <aside class="col-sm-4 col-md-3 type-1" id="column-left">
                <div class="module menu-category titleLine">
                    <h3 class="modtitle">Categories</h3>
                    <div class="modcontent">
                        <div class="box-category">
                            <ul id="cat_accordion" class="list-group">
                                <li class="hadchild"><a href="{{route('category')}}" class="cutom-parent">Kheri</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: block;">
                                        <li><a href="{{route('category')}}">Single Sole</a></li>
                                        <li><a href="{{route('category')}}">Double Sole</a></li>

                                    </ul>
                                </li>

                                <li class=""><a href="{{route('category')}}" class="cutom-parent">Kohati Soft</a>  <span class="dcjq-icon"></span></li>
                                <li class=""><a href="{{route('category')}}" class="cutom-parent">Kohati Smile</a>    <span class="dcjq-icon"></span></li>
                                <li class=""><a href="{{route('category')}}" class="cutom-parent">Sawana/Sawas</a>  <span class="dcjq-icon"></span></li>

                            </ul>
                        </div>


                    </div>
                </div>

            </aside>
            <!--Left Part End -->

            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8 type-1">
                <div class="products-category">
                    <div class="module banner-left">
                        <div class="modcontent clearfix">
                            <div class="banners">
                                <div>
                                    <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/bann.png')}}" alt="left-image" width="1549" height="250"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Filters -->

                    <div class="product-filter filters-panel">
                        <div class="row">
                            <div class="col-md-5 visible-lg">
                                <div class="view-mode">
                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="short-by-show form-inline text-right col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                <div class="text">
                                    <p>item 01 - 16 of 47 total</p>
                                </div>
                                <div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                    <select id="input-sort" class="form-control" onchange="location = this.value;">

                                        <option value="" selected="selected">Default </option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                        <option value="">Price (High &gt; Low)</option>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="" selected="selected">5</option>
                                        <option value="">10</option>
                                        <option value="">15</option>
                                        <option value="">25</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Filters -->
                    <!--changed listings-->
                    <div class="products-list grid">
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i11.jpg')}}" alt=""></a>
                                        <!--Sale Label-->
                                        <span class="new">New</span>

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{route('product')}}"> Product #01</a></h4>
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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt=""></a>
                                        <!--Sale Label-->
                                        <span class="new">New</span>

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
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
                                            <span class="price-new">RS 1300</span>

                                        </div>

                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i4.png')}}" alt="" width="130" height="170"></a>
                                        <!--Sale Label-->
                                        <span class="new">New</span>

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt=""></a>
                                        <!--Sale Label-->

                                        <span class="sale">-11%</span>
                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

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
                                            <span class="price-new">RS 2500</span>
                                            <span class="price-old">RS 2800</span>
                                        </div>

                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>

                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i5.png')}}" alt="" width="130" height="170"></a>
                                        <!--Sale Label-->


                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{route('product')}}">Product #05</a></h4>
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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i6.png/')}}" alt="" width="130" height="170"></a>
                                        <!--Sale Label-->


                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i11.jpg')}}" alt=""></a>
                                        <!--Sale Label-->


                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{route('product')}}">Product #07</a></h4>
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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i4.png')}}" alt="" width="130" height="170"></a>
                                        <!--Sale Label-->

                                        <span class="sale">-11%</span>
                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{route('product')}}">Product #08</a></h4>
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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a   class="product-img" href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt=""></a>
                                        <!--Sale Label-->
                                        <span class="new">New</span>

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{route('product')}}">Dummy product #09</a></h4>
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
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>

                    </div>				<!--// End Changed listings-->
                    <!-- Filters -->
                    <div class="product-filter filters-panel">
                        <div class="row">
                            <div class="col-md-5 visible-lg">
                                <div class="view-mode">
                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="short-by-show form-inline text-right col-lg-7 col-sm-12 col-xs-12">
                                <div class="text">
                                    <p>item 01 - 10 of 47 total</p>
                                </div>
                                <div class="box-pagination text-right">
                                    <ul class="pagination">
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#" >2</a></li>
                                        <li><a href="#" >3</a></li>
                                        <li><a href="#" >4</a></li>
                                        <li><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Filters -->

                </div>

            </div>


        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->

    <footer class="footer-container type_footer2">


        <!-- Footer Top Container -->

        <div class="footer-mid">
            <div class="container">
                <div class="row">
                    <div class=" help">
                        <div class="footer-mid-left col-sm-6 col-xs-12">
                            <h3>NEED HELP? </h3>
                            <p>Call us anytime at (+92) 334-0167330</p>
                        </div>
                        <div class="footer-mid-right col-sm-6 col-xs-12">
                            <div class="btn-sub">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Your email address ..." name="search">
                                <button type="submit" class="button-search btn btn-primary" name="submit_search">Subscribe</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Mid -->
        <section class="footer-top">
            <div class="container content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
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
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                        <li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-information">
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




                </div>
            </div>
        </section>
        <!-- /Footer Top Container -->


        <div class="footer-bottom-block ">
            <div class=" container">
                <div class="row">
                    <div class="footer-bottom-header">

                        <div class="col-xs-12 col-sm-7 pay">
                            <ul>

                                <li><img src="{{asset('user/img/demo/payment/jazz.png')}}" alt=""></li>
                                <li><img src="{{asset('user/img/demo/payment/easy2.png')}}" alt=""></li>
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


    <!-- End Social widgets -->

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


    <!-- Theme files
    ============================================ -->


    <script type="text/javascript" src="{{asset('user/js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/themejs/addtocart.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/themejs/application.js')}}"></script>
    <script type="text/javascript"><!--
        // Check if Cookie exists
        if($.cookie('display')){
            view = $.cookie('display');
        }else{
            view = 'grid';
        }
        if(view) display(view);
        //--></script>
</body>
</html>
