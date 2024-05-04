@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Kriteria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Ubah Kriteria</li>
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
                        <h3 class="card-title">Form Ubah Kriteria</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('kriteria.update', $data->id_kriteria)}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Kriteria</label>
                                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="{{$data->nama_kriteria}}">
                            </div>
                            <div class="form-group">
                                <label for="bobot_kriteria">Tingkat Kerusakan</label>
                                <select class="form-control select2" style="width: 100%;" name="tingkat_kerusakan">
                                    <option selected="selected" value="">-Tingkat Kerusakan-</option>
                                    <option value="RINGAN">RINGAN</option>
                                    <option value="SEDANG">SEDANG</option>
                                    <option value="BERAT">BERAT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bobot_kriteria">Bobot Kriteria</label>
                                <input type="number" class="form-control" id="bobot_kriteria" name="bobot_kriteria" value="{{$data->bobot_kriteria}}">
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