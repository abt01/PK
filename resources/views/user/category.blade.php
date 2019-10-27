@extends('layouts.layout')

@section('content')
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
    @endsection
