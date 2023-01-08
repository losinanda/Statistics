@extends('admin.layout.master')
@section('title', 'Frequency Distribution Data')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 mr-1">
            <div class="col-sm-6">
                <h1 class="m-0">Frequency Distribution Data <span class="ml-2 h6 font-weight-light"></span></h1>
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
                            Frequency Distribution Data Table
                        </h3>
                    </div><!-- /.card-header -->

                    {{-- <div class="card-body"> --}}
                    <div class="tab-content p-0 text-justify">
                        {{-- <div class="card"> --}}
                        <!-- /.card-header -->
                        <div class="table p-4">
                            <table id="table2" class="table table-bordered h6">
                                <thead>
                                    <t>
                                        <th>No.</th>
                                        <th>Score</th>
                                        <th> Frequency</th>
                                    </t>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($score as $s)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $s->score }}</td>
                                        <td>{{ $s->frequency }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="card-footer clearfix d-flex justify-content-end">
                            {{ $score->links() }}
                        </div> --}}
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