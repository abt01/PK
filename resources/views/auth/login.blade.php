@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
                    <li class="home"><a href="{{route('home2')}}">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li class="home"><a href="#">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>  Login</li>
                </ul>

                <div class="row">
                    <div id="content" class="col-sm-12">
                        <div class="page-login">

                            <div class="account-border">
                                <div class="row">
                                    <div class="col-sm-6 new-customer">
                                        <div class="well">
                                            <h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
                                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                        </div>
                                        <div class="bottom-form">
                                            <a href="{{route('home2')}}" class="btn btn-default pull-right">Continue</a>
                                        </div>
                                    </div>


                                    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-6 customer-login">
                                            <div class="well">
                                                <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Login</h2>
                                                <p><strong>Login to continue shopping</strong></p>
                                                <div class="form-group">
                                                    <label class="control-label " for="input-email">E-Mail Address</label>
                                                    <input type="text" name="email" value="" id="input-email" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label " for="input-password">Password</label>
                                                    <input type="password" name="password" value="" id="input-password" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="bottom-form">

                                                <input type="submit" value="Login" class="btn btn-default pull-right" />
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>

            </div>
        </div>
    </div>
    @endsection
