@extends('main')
@section('auth')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index2.html">Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><b>Sherfis Tech</b><br>Sistem Pendukung Keputusan</p>

                <form action="{{route('post.login')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            name="email"
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
                            class="form-control"
                            placeholder="Password"
                            name="password"
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
                                Masuk
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{route('register')}}" class="text-center"
                        >Belum punya akun?</a
                    >
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('assets/')}}/plugins//jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/')}}/plugins//bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/')}}/dist//js/adminlte.min.js"></script>
</body>    
@endsection