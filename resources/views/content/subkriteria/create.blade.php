@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Subkriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Subkriteria</li>
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
                            <h3 class="card-title">Form Tambah Subkriteria</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('subkriteria.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                {{-- <input type="text" class="form-control" id="subkriterias_id" name="subkriterias_id" > --}}
                                <div class="form-group">
                                    <label for="id_kriteria">Nama Kriteria</label>
                                    <select type="text" class="form-control" id="id_kriteria" name="id_kriteria">
                                            <option value="">-- Nama Kriteria --</option>
                                        @foreach ($kriteria as $item)
                                            <option value="{{$item->id_kriteria}}">{{$item->nama_kriteria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_subkriteria">Nama Subkriteria</label>
                                    <input type="text" class="form-control" id="nama_subkriteria" name="nama_subkriteria">
                                </div>
                                <div class="form-group">
                                    <label for="nilai_subkriteria">Nilai Subkriteria</label>
                                    <input type="number" class="form-control" id="nilai_subkriteria" name="nilai_subkriteria">
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