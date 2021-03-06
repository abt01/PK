<!-- Header Container  -->
<header id="header" class=" variantleft type_2">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">

                    <div class="form-group languages-block ">
                        <form action="{{asset('user/index.html')}}" method="post" enctype="multipart/form-data" id="bt-language">
                            <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                            </a>

                        </form>
                    </div>
                </div>
                <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
                    <div class="tabBlock" id="TabBlock-1">
                        <ul class="top-link list-inline">
                            @if (auth()->guest())
                                <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                                <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
                                <li class="register"><a href="{{route('register')}}" title="Register"><span>Register</span></a></li>
                            @else
                                <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Welcome</span></a></li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret" style = "position:relative; left:80px; top:2px ;"  ></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
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
                    <form method="GET" action="{{asset('user/index.html')}}">
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
                                                    </li>

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
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
