@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Order History</li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Order History</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-center">Order ID</td>
                        <td class="text-center">Qty</td>
                        <td class="text-center">Status</td>
                        <td class="text-center">Date Added</td>
                        <td class="text-right">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <a href="{{route('product')}}"><img width="85" class="img-thumbnail" title="kheri" alt="" src="{{asset('user/img/demo/cms/i11.jpg')}}">
                            </a>
                        </td>
                        <td class="text-left"><a href="{{route('product')}}">Brown Single Sole Kheri</a>
                        </td>
                        <td class="text-center">#214521</td>
                        <td class="text-center">1</td>
                        <td class="text-center">Shipped</td>
                        <td class="text-center">21/06/2019</td>
                        <td class="text-right">RS 4000</td>
                        <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{route('order-information')}}" data-original-title="View"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="{{route('product')}}"><img  width="85" class="img-thumbnail" title="" alt="" src="{{asset('user/img/demo/cms/image2.jpg')}}">
                            </a>
                        </td>
                        <td class="text-left"><a href="{{route('product')}}">Kohati Sandals</a>
                        </td>
                        <td class="text-center">#1565245</td>
                        <td class="text-center">1</td>
                        <td class="text-center">Shipped</td>
                        <td class="text-center">20/06/2019</td>
                        <td class="text-right">RS 1500</td>
                        <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{route('order-information')}}" data-original-title="View"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
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
            </div>			</aside>
        <!--Right Part End -->
    </div>
@endsection
