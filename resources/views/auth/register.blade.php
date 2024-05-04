@extends('auth.layouts.main')
@section('auth')
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="index2.html">Registrasi</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg"><b>Sherfis Tech</b><br>Sistem Pendukung Keputusan</p>

                <form action="{{route('post.register')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Full name"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Password"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Retype password"
                        />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block"
                            >
                                Buat akun
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{route('login')}}" class="text-center"
                        >Sudah punya akun?</a
                    >
                </div>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{asset('assets/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/')}}/dist/js/adminlte.min.js"></script>
</body>
@endsection