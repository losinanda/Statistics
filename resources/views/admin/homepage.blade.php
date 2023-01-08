@extends('admin.layout.master')
@section('title', 'Homepage')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <div class="row">
                <!-- Left col -->
                <section class="col-lg connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                What is statistic?
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0 text-justify">
                                Statistics is a scientific method of organizing data by numbers and interpreting them. From
                                a research point of view, there are several roles for statistics, such as:
                                <ul>
                                    <li>To understand the
                                        diversity of values ​​from a number of observation targets. </li>
                                    <li>Make research easy with tables,
                                        graphs, charts, and more. </li>
                                    <li>An overview of numbers. </li>
                                    <li>Facilitate in drawing conclusions. </li>
                                </ul>
                                {{-- <br><br>

                            The term 'statistics' is different from 'statistics' (statistics).

                            Statistics are widely applied in various disciplines, both natural sciences (eg astronomy
                            and biology as well as social sciences (including sociology and psychology), as well as in
                            business, economics, and industry. Statistics are also used in government for various
                            purposes; Population census is one of the most well-known procedures. Other statistical
                            applications that are now popular are polling procedures (for example, conducted before the
                            general election), and quick count (quick count of election results) or quick count. In the
                            field of computing, statistics can also be used applied in pattern recognition and
                            artificial intelligence.
                            <br><br>
                            The use of the term statistics has its roots in terms in modern Latin statisticum collegium
                            ("council of state") and Italian statista ("statesman" or "politician"). Gottfried Achenwall
                            (1749) used Statistics in German for the first time as a name for the activity of analyzing
                            state data, interpreting it as "the science of the state". At the beginning of the 19th
                            century there has been a shift in meaning to "the science of collecting and classifying
                            data". Sir John Sinclair introduced this name (Statistics) and meaning into English. So, in
                            principle, statistics initially only deals with data used by administrative and government
                            institutions. Data collection continues, especially through censuses which are conducted
                            regularly to provide information on population changes that change over time.
                            <br><br>
                            In the 19th century and early 20th century statistics began to use many fields in
                            mathematics, especially probability. The branch of statistics that is currently widely used
                            to support the scientific method, inference statistics, was developed in the second half of
                            the 19th century and early 20th century by [Ronald Fisher] (founder of statistical
                            inference), Karl Pearson (linear regression method) , and William Sealey Gosset (examined
                            the problem of small samples). The use of statistics today can be said to have touched all
                            fields of science, from astronomy to linguistics. The fields of economics, biology and its
                            applied branches, as well as psychology are heavily influenced by statistics in their
                            methodology. As a result, combined sciences such as econometrics, biometrics (or
                            biostatistics) and psychometrics were born.
                            <br><br>
                            Although there are those who consider statistics as a branch of mathematics, others consider
                            statistics as a field that is closely related to mathematics in terms of its history and
                            applications. In Indonesia, statistical studies are mostly included in the mathematics and
                            natural science faculties, either in separate departments or in association with
                            mathematics. --}}
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
