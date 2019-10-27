@extends('admin/layout')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                QR ITEMS
                <small>details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content ">
            <div class="panel panel-primary">

                <div class="panel-heading">Import and Export Data Into Excel and CSV</div>

                <div class="panel-body">
                    <form role="form" method="post" action="/qrcodes/category" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="box-body">
                            <div class="col-lg-6">


                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="category" class="form-control select2" style="width: 100%;">
                                        @foreach($categories as $category)
                                            <option value="{{$category}}">{{$category}}</option>
                                            @endforeach

                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" value="download" id="download" class="btn btn-primary">
                            <input type="submit" name="submit" value="delete" id="delete" class="btn btn-danger">
                        </div>
                    </form>

                </div>

            </div>

            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">All Qr items</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Word</th>
                                    <th>Frame Color</th>
                                    <th>Text Local</th>
                                    <th>Sound</th>
                                    <th>Picture</th>
                                    <th>Country</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Update Item</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($QRItems as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->word}}</td>
                                        <td>{{$item->frame_color}}</td>
                                        <td>{{$item->text_local}}</td>
                                        <td>{{$item->sound}}</td>
                                        <td>{{$item->picture}}</td>
                                        <td>{{$item->country}}</td>
                                        <td>{{$item->category}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td><form action="/admin/qrcodes/{{$item->id}}/edit" method="get">
                                                <button type="submit" class="btn btn-primary ">Edit</button>
                                            </form></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Word</th>
                                    <th>Frame Color</th>
                                    <th>Text Local</th>
                                    <th>Sound</th>
                                    <th>Picture</th>
                                    <th>Country</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
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