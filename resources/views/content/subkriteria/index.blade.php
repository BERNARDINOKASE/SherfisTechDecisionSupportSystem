@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Subkriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tabel Subkriteria</li>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Subkriteria - {{$idKriteria->nama_kriteria}}</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('subkriteria.create')}}" class="btn btn-md btn-primary">Tambah Subkriteria</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Subkriteria dan nilai</th>
                                        <th style="width: 10px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_subkriteria}} ({{$item->nilai_subkriteria}})</td>
                                            <td> 
                                                {{-- <a href="{{route('alternatif.edit', $item->id)}}" class="btn btn-sm btn-warning m-1" title="Ubah"><i class="fas fa-pen"></i></a> --}}
                                                <form action="{{route('subkriteria.delete', $item->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger m-1" title="Hapu"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
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