@extends('admin.layout.master')
@section('title', 'Description Data')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mr-1">
                <div class="col-sm-6">
                    <h1 class="m-0">Description Data <span class="ml-2 h6 font-weight-light"></span></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row mr-1">
                <!-- Left col -->
                <section class="col-lg connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Description Data Table
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0 text-justify">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="d-flex ml-4 mt-4">
                                                    <th class="col-sm-2">Minimum Value</th>
                                                    <th class="col-sm-2">Maximum Value</th>
                                                    <th class="col-sm-2">Total Data</th>
                                                    <th class="col-sm-2">Average</th>
                                                    <th class="col-sm-2">Standard Deviation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="d-flex ml-4">
                                                    <td class="col-sm-2">{{ $min }}</td>
                                                    <td class="col-sm-2">{{ $max }}</td>
                                                    <td class="col-sm-2">{{ $count }}</td>
                                                    <td class="col-sm-2">{{ $avg }}</td>
                                                    <td class="col-sm-2">{{ $deviation }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer clearfix">
                                        {{-- {{!! $score->links() !!}} --}}
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
