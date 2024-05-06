@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Nilai</li>
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
                <!-- left column -->
                <div class="col-md-6">
                <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Nilai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('nilai.update', $nilai->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Alternatif</label>
                                    {{-- <input disabled type="text" class="form-control" value="{{$alternatif->nama_alternatif}}"> --}}
                                    {{-- <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea> --}}
                                    <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" value="{{$nilai->id_alternatif}}" readonly>
                                    @if ($errors->has('id_alternatif'))
                                    <span class="text-danger">{{$errors->first('id_alternatif')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Kriteria</label>
                                    <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" value="{{$nilai->id_kriteria}}" readonly>
                                    @if ($errors->has('id_kriteria'))
                                        <span class="text-danger">{{$errors->first('id_kriteria')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{-- <label for="nilai">Subkriteria</label> --}}
                                    <label for="kondisi">Nilai</label>
                                    <select class="form-control" id="kondisi" name="kondisi">
                                            <option value="">-- Nilai --</option>
                                            <option value="10">Normal</option>
                                            <option value="50">Perbaikan Kecil</option>
                                            <option value="100">Perbaikan Besar</option>
                                    </select>
                                    @if ($errors->has('id_subkriteria'))
                                        <span class="text-danger">{{$errors->first('id_subkriteria')}}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection