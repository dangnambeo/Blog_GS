<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- Style -->

    <link rel="stylesheet" href="{{ asset("FE_asset/css/style.css") }}" />

    <!-- Style -->

    <!--fontaweesome-->
    <link rel="stylesheet" href="{{ asset("FE_asset/fontawesome/css/all.css") }}" />
    <!--fontaweesome-->

    <!--Bootstrap-->

    <link rel="stylesheet" href="{{ asset("FE_asset/bootstrap/css/bootstrap.min.css") }}" />
    <script src="{{ asset("FE_asset/bootstrap/js/bootstrap.js") }}"></script>
    <script src="{{ asset("FE_asset/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

    <!--Bootstrap-->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text&display=swap" rel="stylesheet"/>
</head>
<body class="body">
<!-- Header -->



<!-- End -->

<div class="clean"></div>
@yield('header-content')
<section class="section">
    <div class="section-main">
        @yield('content')
    </div>
</section>

<footer class="footer">
    <div class="footer-main">
        <div class="logo-footer">
            <img src="{{ asset("FE_asset/image/logo.png") }}" alt="" />
        </div>
    </div>
</footer>
</body>
</html>
