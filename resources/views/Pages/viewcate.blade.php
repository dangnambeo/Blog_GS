@extends('layout.master')
@extends('layout.header')
@section('title')
{{ $cate->cate_tittle }}
@endsection
@section('content')
    <div class="container">
        <div class="news-content">
                    <div class="tittle-post">
                        <h2 class="tittle-name">
                            <span class="name-tittle">{{ $cate->cate_tittle }}</span>
                        </h2>
                        <hr>
                </div><!--tittle-post-->
                <div class="row list-post">
                    @foreach ($posts_cate as $posts_cates)
                        <div class="col-md-4 post-list">
                            <div class="list">
                                <div class="img-post">
                                    <img src="{{ $posts_cates->img_post }}" alt="viruss">
                                </div><!--img-post-->
                                <div class="post">
                                    <h4 class="name-post"><a href="{{ route('viewpost',$posts_cates->id) }}">{{ $posts_cates->tittle }}</a></h4>
                                    <span class="content-post">
                                        {!! $posts_cates->short_content !!}
                                    </span>
                                    <div class="post-footer">
                                    <span class="author-img">
                                        @if (($posts_cates->user->avatar) != Null)
                                            <img src="{{ $posts_cates->user->avatar }}" class="rounded-circle" alt="Cinque Terre" width="40" height="40">
                                        @endif
                                    </span><!--author-img-->
                                    <span class="author-meta">
                                        <span class="post-name">
                                            <a href="{{ route('viewauthor',$posts_cates->user_id) }}">{{ $posts_cates->user->user_name }}</a>
                                        </span>
                                        <span class="post-date">
                                            {{ $posts_cates->created_at->format('d/m/Y')  }}
                                        </span>
                                    </span><!--author-meta-->
                                    <span class="post-read-more">
                                        <a href="{{ route('viewpost',$posts_cates->id) }}"><i class="fas fa-bookmark"></i></a>
                                    </span><!--post-read-more-->
                                    </div><!--post-footer-->
                                </div><!--post-->
                            </div><!--list-->
                        </div><!--post-list-->
                    @endforeach
                    {{ $posts_cate->links() }}
            </div><!--list-post-->

        </div><!--new-content-->
    </div><!--container-->
@endsection
