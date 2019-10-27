@extends('admin.layout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">User profile</li>
            </ol>
        </section>
    <section class="content">
        @include('layouts.error')
        <div class="row">
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#settings" data-toggle="tab">Update Profile</a></li>
                @if(Auth::user()->user_role == 0)
                <li><a href="#user" data-toggle="tab">Add User</a></li>
                @endif
            </ul>
            <div class="tab-content">
                <div class="active tab-pane lockscreen" id="profile">

                    <div class="lockscreen-wrapper">
                        <br><br><br><br><br>
                        <div class="lockscreen-logo">
                            <a href="../../admin/home"><b></b>{{Auth::user()->name}}</a>
                        </div>
                        <!-- User name -->
                        @if(Auth::user()->user_role == 0)
                            <div class="lockscreen-name">Admin</div>
                            @else
                            <div class="lockscreen-name">User</div>
                            @endif

                        <!-- START LOCK SCREEN ITEM -->
                        <div class="lockscreen-item">
                            <!-- lockscreen image -->
                            <div class="lockscreen-image">
                                <img src="../../{{Auth::user()->picture}}" alt="User Image">
                            </div>
                            <!-- /.lockscreen-image -->

                            <!-- lockscreen credentials (contains the form) -->
                            <form class="lockscreen-credentials">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="password" disabled="true" value="{{Auth::user()->email}}">

                                </div>
                            </form>
                            <!-- /.lockscreen credentials -->

                        </div>
                        <!-- /.lockscreen-item -->
                        <div class="help-block text-center">
                            This is users bio that will be added in future
                        </div>
                        <br><br><br><br><br>
                    </div>

                </div>

                <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="post" action="/admin/profile/{{Auth::user()->id}}" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="picture" class="col-sm-2 control-label">Profile Picture</label>

                            <div class="col-sm-10">
                                <input type="file" id="picture" name="picture">

                                <p class="help-block">Edit Profile Picture</p>
                                <img src="../../{{Auth::user()->picture}}" class="img-circle" alt="User Image" width="200px" height="200px">
                            </div>
                            <br><br><br>
                            <label for="name" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            @if(Auth::user()->user_role == 0)
                @include('layouts.addusers')
                @endif
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
        </div>
    </section>
    </div>

    @endsection
