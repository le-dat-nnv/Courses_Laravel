<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('back_end/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('back_end/css/admin.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="{{ route('register_frontend') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text"
                                           class="form-control form-control-user @error('firstname') is-invalid @enderror"
                                           name="firstname"
                                           placeholder="First Name" value="{{ old('firstname') }}">
                                    @error('firstname')
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </p>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input type="text"
                                           class="form-control form-control-user @error('lastname') is-invalid @enderror"
                                           name="lastname"
                                           placeholder="Last Name" value="{{ old('lastname') }}">
                                    @error('lastname')
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="form-control form-control-user @error('email') is-invalid @enderror"
                                       name="email"
                                       placeholder="Email Address">
                                @error('email')
                                <p class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password"
                                           class="form-control form-control-user @error('password') is-invalid @enderror"
                                           name="password" placeholder="Password" value="{{ old('password') }}">
                                    @error('password')
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password"
                                           class="form-control form-control-user @error('Repeatpassword') is-invalid @enderror"
                                           name="Repeatpassword" placeholder="Repeat Password">
                                    @error('Repeatpassword')
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('Repeatpassword') }}</strong>
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Đăng ký tài khoản
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('sing_in_front_end') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('back_end/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('back_end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('back_end/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('back_end/js/sb-admin-2.js') }}"></script>

</body>

</html>
