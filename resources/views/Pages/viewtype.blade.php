@extends('layout.master')
@extends('layout.header')
@section('title')
{{ $type->type_tittle }}
@endsection
@section('content')
    <div class="container">
        <div class="news-content">
                    <div class="tittle-post">
                        <h2 class="tittle-name">
                            <span class="name-tittle">{{ $type->type_tittle }}</span>
                        </h2>
                        <hr>
                </div><!--tittle-post-->
                <div class="row list-post">
                    @foreach ($posts_type as $posts_types)
                        <div class="col-md-4 post-list">
                            <div class="list">
                                <div class="img-post">
                                    <img src="{{ $posts_types->img_post }}" alt="viruss">
                                </div><!--img-post-->
                                <div class="post">
                                    <h4 class="name-post"><a href="{{ route('viewpost',$posts_types->id) }}">{{ $posts_types->tittle }}</a></h4>
                                    <span class="content-post">
                                        {!! $posts_types->short_content !!}
                                    </span>
                                    <div class="post-footer">
                                    <span class="author-img">
                                        @if (($posts_types->user->avatar) != Null)
                                            <img src="{{ $posts_types->user->avatar }}" class="rounded-circle" alt="Cinque Terre" width="40" height="40">
                                        @endif
                                    </span><!--author-img-->
                                    <span class="author-meta">
                                        <span class="post-name">
                                            <a href="{{ route('viewauthor',$posts_types->user_id) }}">{{ $posts_types->user->user_name }}</a>
                                        </span>
                                        <span class="post-date">
                                            {{ $posts_types->created_at->format('d/m/Y')  }}
                                        </span>
                                    </span><!--author-meta-->
                                    <span class="post-read-more">
                                        <a href="{{ route('viewpost',$posts_types->id) }}"><i class="fas fa-bookmark"></i></a>
                                    </span><!--post-read-more-->
                                    </div><!--post-footer-->
                                </div><!--post-->
                            </div><!--list-->
                        </div><!--post-list-->
                    @endforeach
            </div><!--list-post-->
            {{ $posts_type->links() }}
        </div><!--new-content-->
    </div><!--container-->
@endsection
