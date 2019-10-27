@extends('admin/layout')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
                <small>details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Products</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content ">

            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">All Products</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Description</th>
                                    <th>Availability</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Created At</th>
                                    <th>Update Item</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->availability}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->picture}}</td>
                                        <td>{{$item->category}}</td>
                                        <td>{{$item->size}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td><form action="/admin/products/{{$item->id}}/edit" method="get">
                                                <button type="submit" class="btn btn-primary ">Edit</button>
                                            </form></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Description</th>
                                    <th>Availability</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Created At</th>
                                    <th>Update Item</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>



    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
