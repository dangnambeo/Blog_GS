<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/login/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/login/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(images/blog.jpg);">
                <span class="login100-form-title-1">
                    Đăng nhập
                </span>
            </div>

            <form class="login100-form validate-form" action="{{ route('post-login') }}" method="POST">
                {{ csrf_field() }}
                <div class="wrap-input100 validate-input m-b-26" data-validate="Không được để trống ô này">
                    <span class="label-input100">Tên đăng nhập</span>
                    <input class="input100" type="text" name="user_name" placeholder="">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate="Không được để trống ô này">
                    <span class="label-input100">Mật khẩu</span>
                    <input class="input100" type="password" name="password" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Đăng nhập
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('admin_asset/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin_asset/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin_asset/login/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
