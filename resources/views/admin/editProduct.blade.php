@extends('admin/layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
                <small>Edit {{$product->name}}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Product</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('layouts.error')
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="/admin/products/{{$product->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="word">Edit Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  value="{{$product->name}}" placeholder="Enter Name of product" >
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Edit Description</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" placeholder="Enter Description of product">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Edit Price</label>
                                        <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Enter Price of product">
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category" class="form-control select2" style="width: 100%;">
                                            <option value="Kheri" selected="selected">Kheri</option>
                                            <option value="Kohati Soft">Kohati Soft</option>
                                            <option value="Kohati Smile">Kohati Smile</option>
                                            <option value="Sawana/Sawas">Sawana/Sawas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Availability</label>
                                        <select name="availability" class="form-control select2" style="width: 100%;">
                                            <option value="1" selected="selected">In Stock</option>
                                            <option value="0">Out of Stock</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Size</label>
                                        <select name="size" class="form-control select2" style="width: 100%;">
                                            <option value="40" selected="selected">add custom sizes here</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="sound">Edit Quantity</label>
                                        <input type="number" class="form-control" id="quantity" value="{{$product->quantity}}" name="quantity" placeholder="Enter Quantity of product">
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="picture">Edit Image input</label>

                                        <input type="file" id="picture" name="picture">

                                        <p class="help-block">Select Image for Qr item</p>
                                        <img src="{{url($product->getPicture())}}" class="img-responsive" alt="User Image" width="100%" height="50%">
                                    </div>
                                    <input type="text" value="{{$product->id}}" name="id" id="id" hidden >



                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" name="submit" value="update" id="update" class="btn btn-primary">
                                <input type="submit" name="submit" value="delete" id="delete" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
