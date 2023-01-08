@extends('admin.layout.master')
@section('title', 'Single Data')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mr-1">
                <div class="col-sm-6">
                    <h1 class="m-0">Single Data <span class="ml-2 h6 font-weight-light"></span></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="d-flex">
                <div class="ml-2 mt-2 mr-auto">
                    <a href="#" class="btn btn-secondary btn-rounded mr-2" data-toggle="modal"
                        data-target="#modalAddDataForm">
                        Add Data</a>
                </div>
                <div class="ml-2 mt-2">
                    <a href="#" class="btn btn-success btn-rounded mr-2" data-toggle="modal"
                        data-target="#modalImportDataForm">
                        Import Data</a>
                </div>
                <div class="ml-2 mt-2">
                    <a href="{{ route('export-score') }}" class="btn btn-info btn-rounded mr-2">
                        Export Data</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
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
                                Single Data Table
                            </h3>
                        </div><!-- /.card-header -->

                        {{-- <div class="card-body"> --}}
                        <div class="tab-content p-0 text-justify">
                            {{-- @if (session('sucess'))
                                <div class="alert alert-sucsess alert-dismissible fade show" role="alert">
                                    {{ session('sucess') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif --}}
                            {{-- <div class="card"> --}}
                            <!-- /.card-header -->

                            {{-- <div class="table-responsive">
                                <table id="table1" class="table table-bordered h6">
                                    <thead>
                                        <tr class="d-flex ml-4 mt-4">
                                            <th class="col-sm-1">No.</th>
                                            <th class="col-sm-2">Score</th>
                                            <th class="col-sm-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($score as $key => $s)
                                            <tr class="d-flex ml-4">
                                                <td class="col-sm-1">
                                                    {{ ($score->currentpage() - 1) * $score->perpage() + $key + 1 }}</td>
                                                <td class="col-sm-2">{{ $s->score }}</td>
                                                <td class="col-sm-2">
                                                    <a href="#" class="mr-3 btn btn-primary btn-rounded btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#modalEditDataForm{{ $s->id_score }}">
                                                        <i class="fas fa-edit mr-1"></i>
                                                        Edit
                                                    </a>
                                                    <a href="/deletedata/{{ $s->id_score }}"
                                                        class="btn btn-danger btn-rounded btn-sm"
                                                        onclick="return confirm('Are you sure want to delete the data?')">
                                                        <i class="fas fa-trash mr-1"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            {{-- Modal3 
                                            <div class="modal fade" id="modalEditDataForm{{ $s->id_score }}" tabindex="-1"
                                                role="dialog" aria-labelledby="myModal3Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h4 class="modal-title w-100 font-weight-bold">Edit Data Form
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="/editdata/post/{{ $s->id_score }}">
                                                            <div class="modal-body mx-3">
                                                                <div class="md-form mb-4">
                                                                    @csrf
                                                                    <label data-error="wrong" data-success="right"
                                                                        for="score">Score</label>
                                                                    <input type="number" name="score"
                                                                        value="{{ $s->score }}"
                                                                        class="form-control validate">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-center">
                                                                <button class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> --}}

                            <div class="table p-4">
                                <table id="table1" class="table table-bordered h6">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Score</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($score as $s)
                                            <tr>
                                                <td> {{ $no++ }} </td>
                                                <td>{{ $s->score }}</td>
                                                <td>
                                                    <a href="#" class="mr-3 btn btn-primary btn-rounded btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#modalEditDataForm{{ $s->id_score }}">
                                                        <i class="fas fa-edit mr-1"></i>
                                                        Edit
                                                    </a>
                                                    <a href="/deletedata/{{ $s->id_score }}"
                                                        class="btn btn-danger btn-rounded btn-sm"
                                                        onclick="return confirm('Are you sure want to delete the data?')">
                                                        <i class="fas fa-trash mr-1"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            {{-- Modal3  --}}
                                            <div class="modal fade" id="modalEditDataForm{{ $s->id_score }}" tabindex="-1"
                                                role="dialog" aria-labelledby="myModal3Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h4 class="modal-title w-100 font-weight-bold">Edit Data Form
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="/editdata/post/{{ $s->id_score }}">
                                                            <div class="modal-body mx-3">
                                                                <div class="md-form mb-4">
                                                                    @csrf
                                                                    <label data-error="wrong" data-success="right"
                                                                        for="score">Score</label>
                                                                    <input type="number" name="score"
                                                                        value="{{ $s->score }}"
                                                                        class="form-control validate">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-center">
                                                                <button class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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

    {{-- Modal1 --}}
    <div class="modal fade" id="modalAddDataForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Data Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/addsingledata">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            @csrf
                            <label data-error="wrong" data-success="right" for="score">Score</label>
                            <input type="number" name="score" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal2 --}}
    <div class="modal fade" id="modalImportDataForm" tabindex="-1" role="dialog" aria-labelledby="myModal2Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Import Data Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/import" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            @csrf
                            <label class="form-label" for="excel">Select file:</label>
                            <input type="file" class="form-control" id="excel" name="excel" />
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
