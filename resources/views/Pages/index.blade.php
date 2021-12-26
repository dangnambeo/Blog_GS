@extends('layout.master')
@extends('layout.header')
@section('title', 'Giám sát và Xét Nghiệm')
@section('content')
    <div class="featured-post">
        <div class="featured-header">
            <h2>Bài Nổi Bật</h2>
        </div>
        @foreach ($hot_new as $news)
            <div class="featured-content hover-post">
                <a href="#">
                    
                </a>
                <div class="featured-title">
                    <header>
                        <a href="#">
                            <h3>{{ $news->tittle }}</h3>
                        </a>
                        <div class="featured-post-info">
                            <a href="#">
                                <span class="post-author">{{ $news->user->user_name }}</span>
                                <span class="post-cates">{{ $news->category->cate_tittle }}</span>
                            </a>
                        </div>
                    </header>
                    <p class="post-content-featured">
                        {!! $news->short_content !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="laster-post">
        <div class="laster-header">
            <h2>Bài viết mới nhất</h2>
        </div>
        <ul>
            @foreach ($post_all as $new_post)
                <li class="post-list cart">
                    <a class="post-list-cates" href="#">{{ $new_post->category->cate_tittle }} </a>
                    <div class="post-list-container hover-post">
                        <a href="#">
                            <img src="{{ asset($new_post->img_post) }}" alt="" />
                        </a>
                        <div class="post-list-content">
                            <header>
                                <a href="#">
                                    <h3>{{ $new_post->title }}</h3>
                                </a>
                                <div class="post-list-info">
                                    <a href="#">
                                        <span class="post-author">{{ $new_post->user->user_name }}</span>
                                        <span class="post-time">{{ $new_post->created_at }}</span>
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
            @endforeach

            <li class="post-list cart">
                <a class="post-list-cates" href="Page.html"> Trò Chơi</a>
                <div class="post-list-container hover-post">
                    <a href="#">
                        <img src="image/genshin.jpg" alt="" />
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
                        <img src="imaged/hp.jpg" alt="" />
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
                        <img src="image/penhous.jpg" alt="" />
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
@endsection
