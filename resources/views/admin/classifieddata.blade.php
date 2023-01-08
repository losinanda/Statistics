@extends('admin.layout.master')
@section('title', 'Classified Data')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mr-1">
                <div class="col-sm-6">
                    <h1 class="m-0">Classified Data <span class="ml-2 h6 font-weight-light"></span></h1>
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
                                Classified Data Table
                            </h3>
                        </div><!-- /.card-header -->

                        {{-- <div class="card-body"> --}}
                        <div class="tab-content p-0 text-justify">
                            {{-- <div class="card"> --}}
                            <!-- /.card-header -->
                            <div class="table-responsive">
                                <table class="table table-bordered h6">
                                    <thead>
                                        <tr class="d-flex ml-4 mt-4">
                                            <th class="col-sm-1">No.</th>
                                            <th class="col-sm-2"> Interval Class</th>
                                            {{-- <th class="col-sm-2"> Middle Value</th> --}}
                                            <th class="col-sm-2"> Frequency</th>
                                            <th class="col-sm-2"> Relative Frequency</th>
                                            <th class="col-sm-2"> Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($result as $r)
                                            <tr class="d-flex ml-4">
                                                <td class="col-sm-1">{{ $no++ }}</td>
                                                <td class="col-sm-2">{{ $r['lower_limit'] }} - {{ $r['upper_limit'] }}</td>
                                                {{-- <td class="col-sm-2">{{ $r['middle_value'] }}</td> --}}
                                                <td class="col-sm-2">{{ $r['frequency'] }}</td>
                                                <td class="col-sm-2">{{ $r['relative_frequency'] }}</td>
                                                <td class="col-sm-2">{{ $r['percentage'] }}% </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix d-flex justify-content-end">
                                {{-- {{ $result->links() }} --}}
                            </div>
                            {{-- </div> --}}
                        </div>
                        <!-- /.card -->
                        {{-- </div> --}}
                    </div><!-- /.card-body -->
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
