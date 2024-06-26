@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Alternatif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Tabel Alternatif</li>
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
                        <div class="card-body">
                            <div class="callout callout-danger">
                                <h5>Catatan!</h5>
                                <p>Setiap data laptop wajib diisi agar hasil perhitungan dan pengambilan keputusan dapat diproses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Alternatif</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('alternatif.create')}}" class="btn btn-md btn-primary">Tambah Alternatif</a>
                            <a href="{{route('metode.proses-data')}}" class="btn btn-md btn-primary">Proses Pengambilan Keputusan</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 200px">Id Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <th>Data Laptop</th>
                                        <th style="width: 100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->id_alternatif}}</td>
                                            <td>{{$item->nama_alternatif}}</td>
                                            <td>
                                                <a href="{{route('nilai.index', $item->id_alternatif)}}" class="btn btn-sm btn-success d-flex justify-content-center"><i class="fas fa-plus"></i></a>
                                            </td>
                                            <td class="d-flex d-inline-flex"> 
                                                <a href="{{route('alternatif.edit', $item->id_alternatif)}}" class="btn btn-sm btn-warning m-1" title="Ubah"><i class="fas fa-pen"></i></a>
                                                <form action="{{route('alternatif.delete', $item->id_alternatif)}}" method="POST">
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
                    </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection