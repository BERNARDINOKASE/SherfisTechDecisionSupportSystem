@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Alternatif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Ubah Alternatif</li>
                    </ol>
                </div>
            </div>
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
                            <h3 class="card-title">Form Ubah Alternatif</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('alternatif.update', $data->id_alternatif)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_alternatif">Nama Alternatif</label>
                                    <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="{{$data->nama_alternatif}}">
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