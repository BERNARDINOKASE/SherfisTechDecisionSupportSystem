@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-10">
                    <h1 class="m-0">SISTEM PENDUKUNG KEPUTUSAN PENENTUAN PRIORITAS PENGERJAAN LAPTOP</h1>
                </div>
                <!-- /.col -->
                <div class="col-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="">Beranda</a>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$countAlternatif}}</h3>
                            <p>Data Testing</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{route('alternatif.index')}}" class="small-box-footer"
                            >More info
                            <i class="fas fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                {{$countKriteria}}
                            </h3>
                            <p>Kriteria Kerusakan Laptop</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-wrench"></i>
                        </div>
                        <a href="{{route('kriteria.index')}}" class="small-box-footer"
                            >More info
                            <i class="fas fa-arrow-circle-right"></i
                        ></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Keputusan</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 200px">Id Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <th>Nilai Vektor S</th>
                                        <th>Nilai Vektor V</th>
                                        <th>Rangking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatif as $item)
                                        <tr>
                                            <td>{{$item->id_alternatif}}</td>
                                            <td>{{$item->nama_alternatif}}</td>
                                            <td>{{$item->vektor_s}}</td>
                                            <td>{{$item->vektor_v}}</td>
                                            @if ($item->vektor_v == 0)
                                                <td>0</td>
                                            @else
                                                <td>{{$loop->iteration}}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>      
                </section>
                <!-- /.Left col -->
                <section class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Hasil Keputusan</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($vektor_v != 0)
                                <p>Hasil pengambilan keputusan dengan menggunakan metode Weight Product untuk menentukan prioritas pengerjaan laptop pada toko Sherfis Tech adalah
                                    @foreach ($alternatif as $item)
                                        {{$item->nama_alternatif}},
                                    @endforeach
                                </p>
                            @endif
                        </div>
                    </div>
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection