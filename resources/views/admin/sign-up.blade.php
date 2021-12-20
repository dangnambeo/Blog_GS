
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->


    <!-- App css -->
    <link href="{{ asset("admin_asset/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{ asset("admin_asset/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("admin_asset/css/app.min.css") }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body style=" background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="text-center account-logo-box">
                        <div class="mt-2 mb-2">
                            <a href="#" class="text-success">
                                <span><img src="{{ asset("images/blog.jpg") }}" alt="" width="100%"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('post-dangki') }}" method="POST">
                            <div class="form-group">
                                <input name="full_name" class="form-control" type="text" id="full_name" required="" placeholder="Tên đầy đủ">
                            </div>

                            <div class="form-group">
                                <input name="user_name" class="form-control" type="text" id="username" required="" placeholder="Tên đăng nhập">
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password2" type="password" required="" id="password" placeholder="Nhập Lại Mật Khẩu">
                            </div>
                            <div class="form-group">
                                <input type="text" name="level" class="form-control form-control-user" value="0"
                                       placeholder="Bloger" hidden>
                            </div>


                            <div class="form-group account-btn text-center mt-2">
                                <div class="col-12">
                                    <button class="btn width-md btn-bordered btn-danger waves-effect waves-light" type="submit">Đăng ký</button>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->


            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- Vendor js -->
<script src="{{ asset("admin_asset/js/vendor.min.js") }}"></script>

<!-- App js -->
<script src="{{ asset("admin_asset/js/app.min.js") }}"></script>

</body>

</html>
