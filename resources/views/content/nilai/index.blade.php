@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Data Laptop</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tabel Data Laptop</li>
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
                            <h3 class="card-title">Tabel Data Laptop {{$alternatif->nama_alternatif}}</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('nilai.create', $alternatif->id_alternatif)}}" class="btn btn-md btn-primary">Tambah Data Laptop</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>id Kriteria</th>
                                        <th>Kondisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->id_kriteria}}</td>
                                            {{-- <td>{{$item->kriteria}}</td> --}}
                                            @if ($item->kondisi == 1)
                                                <td>Normal (0)</td>
                                            @elseif($item->kondisi == 3)
                                                <td>Perbaikan Kecil (3)</td>
                                            @elseif($item->kondisi == 5)
                                                <td>Perbaikan Besar (5)</td>
                                            @elseif($item->kondisi == 10)
                                                <td>Ganti Komponen (10)</td>
                                            @endif
                                            {{-- <td>{{$item->kondisi}}</td> --}}
                                            <td> 
                                                {{-- <a href="{{route('alternatif.edit', $item->id_alternatif)}}" class="btn btn-sm btn-warning m-1" title="Ubah"><i class="fas fa-pen"></i></a> --}}
                                                <form action="{{route('nilai.delete', $item->id)}}" method="POST">
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