@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Metode</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Metode</li>
                    </ol>
                </div>
            </div>
            @if (session ('success'))
                <div class="col-md-12">
                    <div class="card bg-gradient-success">
                        <div class="card-header">
                            <h3 class="card-title">{{ session ('success') }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            @endif
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Rating Kecocokan</h3>
                        </div>
                        <div class="card-body">
                            {{-- <a href="{{route('alternatif.create')}}" class="btn btn-md btn-primary">Tambah Alternatif</a> --}}
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive" style="height: 400px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>`
                                        <th>Nama Alternatif</th>
                                        @foreach ($kriteria as $item)
                                            <th style="max-width: 77px">{{$item->nama_kriteria}}</th>
                                        @endforeach
                                        {{-- <th style="width: 10px">Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($alternatif as $alter)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$alter->nama_alternatif}}</td>
                                            @foreach ($nilai as $item)
                                                <td class="">{{$item->kondisi}}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach --}}
                                    @foreach ($hasil_vektor_s_all as $item)
                                        <tr>
                                            <td>{$item[]}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        {{-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item">
                                <a class="page-link" href="#">&laquo;</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection