@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Kriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tabel Kriteria</li>
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
                <div class="col-md-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Normalisasi</h3>
                            </div>
    
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama</th>
                                            <th style="width: 10px">Bobot</th>
                                            <th>Normalisasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->nama_kriteria}}</td>
                                                <td>{{$item->bobot_kriteria}}</td>
                                                <td>{{$item->bobot_kriteria/$sum}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- /.card -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Kriteria</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('kriteria.create')}}" class="btn btn-md btn-primary">Tambah Kriteria</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Tingkat Kerusakan</th>
                                        <th style="width: 10px">Bobot</th>
                                        <th>Sub Kriteria</th>
                                        <th style="width: 40px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->id_kriteria}}</td>
                                            <td>{{$item->nama_kriteria}}</td>
                                            <td>{{$item->tingkat_kerusakan}}</td>
                                            <td>{{$item->bobot_kriteria}}</td>
                                            <td>
                                                <a href="{{route('subkriteria.index', $item->id_kriteria)}}" class="btn btn-sm btn-success d-flex justify-content-center"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{route('kriteria.edit', $item->id_kriteria)}}" class="btn btn-sm btn-warning m-1" title="Ubah"><i class="fas fa-pen"></i></a>
                                                <form action="{{route('kriteria.delete', $item->id_kriteria)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger m-1" title="Hapus"><i class="fas fa-trash"></i></button>
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