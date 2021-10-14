@extends('layout.master')
@extends('layout.header')
@section('title')
    {{ $viewpost->tittle }}
@endsection
@section('content')
        <div class="row main">
            <div class="col-md-8 container-post">
                <div class="main-heading">
                    <div class="author-post">
                        <div class="img-author">
                            @if (($viewpost->user->avatar) != Null)
                                <img src="{{ $viewpost->user->avatar }}" alt="author">
                            @endif
                        </div><!--img-author-->
                        <div class="author-name">
                            <p>{{ $viewpost->user->user_name }}</p>
                        </div><!--author-name-->
                        <div class="info-author">
                            <a href="{{ route('viewauthor',$viewpost->user_id) }}"><i class="fas fa-eye"></i></a>
                        </div><!--info-author-->
                    </div><!--author-post-->
                    <div class="tittle">
                    <h1>{{ $viewpost->tittle }}</h1>
                    </div><!--tittle-->
                    <div class="post-date">
                        {{ $viewpost->created_at->format('d/m/Y')  }}
                    </div><!--post-date-->
                </div><!--main-heading-->
            <div class="img-post">
                @if (($viewpost->img_post) !=Null )
                    <img src="{{ $viewpost->img_post }}" alt="">
                @endif
            </div><!--img-post-->
            <div class="content">
                <p>
                    {!! $viewpost->content!!}
                </p>
            </div><!--content-->
            </div><!--container-post-->
            <div class="col-md-4 container-post-right">
            <div class="category">
                <h4>
                <span>Chuyên mục</span>
                </h4>
                <ul class="list-cate">
                    @foreach ($type as $itemtype)
                         <li class="item-cate"><a href="{{ route('viewtype',$itemtype->type_id) }}">{{ $itemtype->type_tittle }}</a></li>
                    @endforeach
                </ul><!--list-cate-->
            </div><!--category-->
            </div><!--container-post-right-->
        </div><!--row-->
        <div class="footer-list-post">
            <div class="row">
                @foreach ($itempost as $post_item)
                    <div class="col-md-4 post-list">
                        <div class="list">
                        <div class="img-post">
                            <img src="{{ $post_item->img_post }}" alt="viruss">
                            </div><!--img-post-->
                            <div class="post">
                            <h4 class="name-post"><a href="{{ route('viewpost',$post_item->id) }}">{{ $post_item->tittle }}</a></h4>
                            <div class="post-footer">
                                <span class="author-img">
                                    @if (($post_item->user->avatar)!=Null)
                                        <img src="{{ $post_item->user->avatar }}" class="rounded-circle" alt="Cinque Terre" width="40" height="40">
                                    @endif
                                </span><!--author-img-->
                                <span class="author-meta">
                                    <span class="post-name">
                                        <a href="{{ route('viewauthor',$post_item->user_id) }}">{{ $post_item->user->user_name }}</a>
                                    </span>
                                    <span class="post-date">
                                        {{ $post_item->created_at->format('d/m/Y')  }}
                                    </span><!--post-date-->
                                </span><!--author-meta-->
                                <span class="post-read-more">
                                    <a href="{{ route('viewpost',$post_item->id) }}"><i class="fas fa-bookmark"></i></a>
                                </span><!--post-read-more-->
                            </div><!--post-footer-->
                            </div><!--post-->
                        </div><!--list-->
                    </div><!--post-list-->
                @endforeach
            </div><!--row-->
        </div><!--footer-list-post-->
@endsection
