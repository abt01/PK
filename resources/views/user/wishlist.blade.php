@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="home"><a href="#">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> My Wish List</li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">My Wish List</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-right">Stock</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <a  href="{{route('product')}}"><img width="70px" src="{{asset('user/img/demo/cms/image3.jpg')}}" alt="Black Kheri" title="Black Kheri">
                            </a>
                        </td>
                        <td class="text-left"><a href="{{route('product')}}">Black Kheri</a>
                        </td>
                        <td class="text-left">Pt 001</td>
                        <td class="text-right">In Stock</td>
                        <td class="text-right">
                            <div class="price"> <span class="price-new">RS 2800</span> <span class="price-old">RS 3000</span></div>

                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary"
                                    title="" data-toggle="tooltip"
                                    onclick="cart.add('48');"
                                    type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
                            </button>
                            <a class="btn btn-danger wishlist-remove" title="" data-toggle="tooltip" href="#"data-original-title="Remove"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="{{route('product')}}"><img width="70px" src="{{asset('user/img/demo/cms/i5.png')}}" alt="chocolate Brown Shoes" title="chocolate Brown Shoes"></a>
                        </td>
                        <td class="text-left"><a href="{{route('product')}}">Chocolate Brown Kheri</a>
                        </td>
                        <td class="text-left">Pt 002</td>
                        <td class="text-right">Pre-Order</td>
                        <td class="text-right">
                            <div class="price"> <span class="price-new">Rs 1700</span> </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary"
                                    title="" data-toggle="tooltip"
                                    onclick="" type="button"
                                    data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
                            </button>
                            <a class="btn btn-danger wishlist-remove"  title="" data-toggle="tooltip"
                               href="#" data-original-title="Remove"><i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--Middle Part End-->
        <aside class="col-sm-3 hidden-xs" id="column-right">
            <h2 class="subtitle">Account</h2>
            <div class="list-group">
                <ul class="list-item">
                    <li><a href="{{route('login')}}">Login</a>
                    </li>
                    <li><a href="{{route('register')}}">Register</a>
                    </li>
                    <li><a href="#">Forgotten Password</a>
                    </li>
                    <li><a href="#">My Account</a>
                    </li>
                    <li><a href="#">Address Books</a>
                    </li>
                    <li><a href="{{route('wishlist')}}">Wish List</a>
                    </li>
                    <li><a href="{{route('order-history')}}">Order History</a>
                    </li>

                </ul>
            </div>
        </aside>
    </div>
@endsection
