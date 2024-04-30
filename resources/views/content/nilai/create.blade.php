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
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
                        <form action="{{route('nilai.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Alternatif</label>
                                    {{-- <input disabled type="text" class="form-control" value="{{$alternatif->nama_alternatif}}"> --}}
                                    {{-- <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea> --}}
                                    <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" value="{{$alternatif->id_alternatif}}" readonly>
                                    @if ($errors->has('id_alternatif'))
                                        <span class="text-danger">{{$errors->first('id_alternatif')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Kriteria</label>
                                    <select class="form-control" id="id_kriteria" name="id_kriteria">
                                        <option value="">-- Nama Kriteria --</option>
                                        @foreach ($kriteria as $item)
                                            <option value="{{$item->id_kriteria}}">{{$item->nama_kriteria}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_kriteria'))
                                        <span class="text-danger">{{$errors->first('id_kriteria')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="kondisi">Kondisi</label>
                                    <select class="form-control" id="kondisi" name="kondisi">
                                        <option value="">-- Kondisi --</option>
                                            <option value="1">Normal</option>
                                            <option value="3">Perbaikan Kecil</option>
                                            <option value="5">Perbaikan Besar</option>
                                            <option value="10">Ganti Komponen</option>
                                    </select>
                                    @if ($errors->has('kondisi'))
                                        <span class="text-danger">{{$errors->first('kondisi')}}</span>
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