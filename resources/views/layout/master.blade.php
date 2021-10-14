<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}" >
    <link rel="shortcut icon" href="{{asset('/') }}/images/blog.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}/FE_asset/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}/FE_asset/fonts/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Shadows Into Light' rel='stylesheet'>
    <title>@yield('title')</title>
</head>
<body class="body">

    <section class="section">
    @yield('banner')
     @yield('content')
    </section><!--section-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> Copyright &copy;
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                      <a href="{{ route('index') }}">Privacy Policy</a>
                    &middot;
                    <a href="{{ route('index') }}">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
