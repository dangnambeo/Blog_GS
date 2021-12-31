@extends('layout.master')
@extends('layout.header')
@section('title')
{{ $cate->cate_tittle }}
@endsection
@section('header-content')
    <div class="cate-list">
        <div class="top-cate">
            <div class="title-cates">
                <ul>
                    <li>
                        <a href="#">Blog</a>
                        <i class="fas fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">{{ $cate->cate_tittle }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="list-cates">
            <div class="titlebar">
                <div class="title-main">
                    <h1>
                        <a href="{{ route('index') }}">Blog</a>
                    </h1>
                    <h2>
                        <span>{{ $cate->cate_tittle }}</span>
                    </h2>
                </div>
            </div>
            <div class="blog-list-cate">
                <div class="filter-cate">
                    <h2>Lọc theo chủ đề {{ $cate->cate_tittle }}</h2>
                </div>
                <ul>
                    <li class="active">
                        <a href="#"> Tất cả </a>
                    </li>
                    @foreach($list_type as $l_type)
                        <li>
                            <a href="#"> {{ $l_type -> type_tittle }} </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!--Nội Dung-->
    <section class="section">
        <div class="section-main">
            <div class="laster-post">
                <div class="laster-header">
                    <h2>Bài viết mới nhất</h2>
                </div>
                <ul>
                    @foreach($posts_cate as $p_c)
                    <li class="post-list cart">
                        <a class="post-list-cates" href="{{ route('viewcate',$p_c->type->type_id) }}"> {{ $p_c->type->type_tittle }} </a>
                        <div class="post-list-container hover-post">
                            <a href="#">
                                <img src="{{ asset($p_c->img_post) }}" alt="" />
                            </a>
                            <div class="post-list-content">
                                <header>
                                    <a href="#">
                                        <h3>{{ $p_c -> tittle }}</h3>
                                    </a>
                                    <div class="post-list-info">
                                        <a href="#">
                                            <span class="post-author">{{ $p_c->user->user_name }}</span>
                                            <span class="post-time">{{ $p_c->created_at }}</span>
                                        </a>
                                    </div>
                                </header>
                                <p class="post-content">
                                    {!! $p_c -> short_content !!}
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--Hét Nội Dung-->
@endsection
