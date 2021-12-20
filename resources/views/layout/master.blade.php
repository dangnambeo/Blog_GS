<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog GS</title>
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

<section class="section">
    <div class="section-main">
        <div class="featured-post">
            <div class="featured-header">
                <h2>Bài Nổi Bật</h2>
            </div>
            <div class="featured-content hover-post">
                <a href="#">
                    <img src="{{ asset("FE_asset/image/img1.jpg") }}" alt="" />
                </a>
                <div class="featured-title">
                    <header>
                        <a href="#">
                            <h3>Đây là tiêu đề đố</h3>
                        </a>
                        <div class="featured-post-info">
                            <a href="#">
                                <span class="post-author">Đăng Nam</span>
                                <span class="post-cates">Beatytull</span>
                            </a>
                        </div>
                    </header>
                    <p class="post-content-featured">
                        “We’re never taught how to navigate the world of medicine from
                        the patient seat.”
                    </p>
                </div>
            </div>
        </div>
        <div class="laster-post">
            <div class="laster-header">
                <h2>Bài viết mới nhất</h2>
            </div>
            <ul>
                <li class="post-list cart">
                    <a class="post-list-cates" href="#"> Cuộc Sống </a>
                    <div class="post-list-container hover-post">
                        <a href="#">
                            <img src="{{ asset("FE_asset/image/deep.jpg") }}" alt="" />
                        </a>
                        <div class="post-list-content">
                            <header>
                                <a href="#">
                                    <h3>Đây tiếp tục lại là 1 cái tiêu đề</h3>
                                </a>
                                <div class="post-list-info">
                                    <a href="#">
                                        <span class="post-author">Đăng Nam</span>
                                        <span class="post-time">AUGUST 6, 2021</span>
                                    </a>
                                </div>
                            </header>
                            <p class="post-content">
                                I first noticed redness and a few scales on my elbows at the
                                start of my freshman year in college. My mom took me to a
                                dermatologist and the diagnosis was swift: I had ...
                            </p>
                        </div>
                    </div>
                </li>
                <li class="post-list cart">
                    <a class="post-list-cates" href="Page.html"> Trò Chơi</a>
                    <div class="post-list-container hover-post">
                        <a href="#">
                            <img src="{{ asset("FE_asset/image/genshin.jpg") }}" alt="" />
                        </a>
                        <div class="post-list-content">
                            <header>
                                <a href="Post.html">
                                    <h3>Đây tiếp tục lại là 1 cái tiêu đề</h3>
                                </a>
                                <div class="post-list-info">
                                    <a href="#">
                                        <span class="post-author">Đăng Nam</span>
                                        <span class="post-time">AUGUST 6, 2021</span>
                                    </a>
                                </div>
                            </header>
                            <p class="post-content">
                                I first noticed redness and a few scales on my elbows at the
                                start of my freshman year in college. My mom took me to a
                                dermatologist and the diagnosis was swift: I had ...
                            </p>
                        </div>
                    </div>
                </li>
                <li class="post-list cart">
                    <a class="post-list-cates" href="#"> Học đường </a>
                    <div class="post-list-container hover-post">
                        <a href="#">
                            <img src="{{ asset("FE_asset/image/hp.jpg") }}" alt="" />
                        </a>
                        <div class="post-list-content">
                            <header>
                                <a href="#">
                                    <h3>Đây tiếp tục lại là 1 cái tiêu đề</h3>
                                </a>
                                <div class="post-list-info">
                                    <a href="#">
                                        <span class="post-author">Đăng Nam</span>
                                        <span class="post-time">AUGUST 6, 2021</span>
                                    </a>
                                </div>
                            </header>
                            <p class="post-content">
                                I first noticed redness and a few scales on my elbows at the
                                start of my freshman year in college. My mom took me to a
                                dermatologist and the diagnosis was swift: I had ...
                            </p>
                        </div>
                    </div>
                </li>
                <li class="post-list cart">
                    <a class="post-list-cates" href="#"> Phim ảnh </a>
                    <div class="post-list-container hover-post">
                        <a href="#">
                            <img src="{{ asset("FE_asset/image/penhous.jpg") }}" alt="" />
                        </a>
                        <div class="post-list-content">
                            <header>
                                <a href="#">
                                    <h3>Đây tiếp tục lại là 1 cái tiêu đề</h3>
                                </a>
                                <div class="post-list-info">
                                    <a href="#">
                                        <span class="post-author">Đăng Nam</span>
                                        <span class="post-time">AUGUST 6, 2021</span>
                                    </a>
                                </div>
                            </header>
                            <p class="post-content">
                                I first noticed redness and a few scales on my elbows at the
                                start of my freshman year in college. My mom took me to a
                                dermatologist and the diagnosis was swift: I had ...
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
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
