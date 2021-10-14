<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đăng Kí</title>
    <base href="{{ asset('') }}">
    <link href="{{ url('/') }}/admin_asset/css/styles.css" rel="stylesheet" />
    <link href="{{ url('/') }}/admin_asset/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
    <div class="signup">

    </div>
    @if (session('eror'))
        <div class="alert alert-warning" role="alert">
            {{ session('eror') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row" style="padding: 0">
                        <div class="col-lg-6">
                            <img src="{{ url('/') }}/images/blog.jpg"
                                style="width: 100%; height: 100%; border-radius: 5px 0 0 5px" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" style="font-family: charm; font-weight: bold">Đăng Kí</h1>
                                </div>
                                <form class="user" action="{{ route('post-dangki') }}" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="full_name" class="form-control form-control-user"
                                            placeholder="Tên Đầy Đủ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="user_name" class="form-control form-control-user"
                                            placeholder="Tên Đăng Nhập">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            placeholder="Mật Khẩu">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password2" class="form-control form-control-user"
                                            placeholder="Nhập Lại Mật Khẩu">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="level" class="form-control form-control-user" value="0"
                                            placeholder="Bloger" hidden>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng Kí">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
