
<!doctype html>
<html lang="en">
<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset("admin_asset/login/css/style.css") }}">

</head>
<body>
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div class="img" style="background-image: url({{ asset("images/blog.jpg") }});"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Đăng Nhập</h3>
                            </div>

                        </div>
                        <form action="{{ route('post-login') }}" method="POST" class="signin-form">
                            {{ csrf_field() }}
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" id="username" name="user_name" required>
                                <label class="form-control-placeholder" for="username">Tên đăng nhập</label>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" required>
                                <label class="form-control-placeholder" for="password-field">Mật khẩu</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                            </div>
                        </form>
                        @if(count($users) <= 0)
                            <p class="text-center">Chưa có tài khoản <a href="{{ route("dangki") }}">Tạo tài khoản</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset("admin_asset/login/js/jquery.min.js") }}"></script>
<script src="{{ asset("admin_asset/login/js/popper.js") }}"></script>
<script src="{{ asset("admin_asset/login/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin_asset/login/js/main.js") }}"></script>
@include('sweetalert::alert')
</body>
</html>

