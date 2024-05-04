@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tentang Sistem Pendukung Keputusan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tentang SPK</li>
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
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="fs-4">Sistem Pendukung Keputusan</h3>
                            Sistem Pendukung Keputusan (SPK) adalah sistem yang membantu pengambilan keputusan dengan menyediakan informasi, model, atau alat yang dibutuhkan untuk menganalisis data dan mempertimbangkan berbagai alternatif keputusan. 
                            Tujuan utama dari SPK adalah untuk membantu pengambil keputusan menghadapi situasi yang kompleks atau ambigu dengan menyediakan dukungan yang terstruktur dan sistematis. <br><br>
                            SPK menggunakan berbagai teknik dan pendekatan, termasuk analisis statistik, pemodelan matematis, kecerdasan buatan, dan teknik pengambilan keputusan multi-kriteria. 
                            SPK dapat digunakan dalam berbagai bidang, mulai dari bisnis dan manajemen hingga ilmu sosial, teknik, kesehatan, dan lainnya. <br><br>
                            Secara umum, SPK membantu pengambil keputusan dengan: <br>
                            <ol>
                                <li>Mengorganisir dan menyajikan data secara terstruktur.</li>
                                <li>Membantu menganalisis data dan mengidentifikasi pola atau tren.</li>
                                <li>Membangun model atau simulasi untuk memprediksi hasil dari berbagai keputusan.</li>
                                <li>Memfasilitasi pemilihan alternatif keputusan dengan mempertimbangkan berbagai faktor dan kriteria.</li>
                                <li>Memberikan rekomendasi atau saran berdasarkan analisis yang dilakukan.</li>
                            </ol>
                            Penerapan SPK dapat membantu organisasi atau individu untuk membuat keputusan yang lebih baik dan lebih terinformasi, serta meningkatkan efisiensi dan efektivitas dalam proses pengambilan keputusan.
                        </div>
                        <div class="card-body">
                            <h3 class="fs-4">Metode Weight Product</h3>
                            Metode Weight Product (WP) adalah salah satu metode dalam Sistem Pendukung Keputusan (SPK) yang digunakan untuk melakukan pemilihan alternatif berdasarkan kriteria tertentu.
                            Metode ini sering digunakan dalam pengambilan keputusan multi-kriteria, di mana alternatif dipertimbangkan berdasarkan beberapa kriteria yang saling berbeda. <br> <br>
                            Metode Weight Product dianggap sederhana dan mudah dipahami, tetapi perlu diingat bahwa dalam pengambilan keputusan nyata, perlu dilakukan analisis lebih lanjut untuk memastikan bahwa hasilnya relevan dan sesuai dengan tujuan pengambilan keputusan. 
                            Selain itu, metode ini memiliki asumsi bahwa setiap kriteria independen satu sama lain, sehingga penting untuk mempertimbangkan konteks spesifik dari masalah yang dihadapi dalam penggunaannya.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection