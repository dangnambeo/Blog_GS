@extends('layout.master')
@extends('layout.header')
@section('title','Giám sát và Xét Nghiệm')
@section('banner')
@if (count($slides)>0)
<div class="banner">
    <div id="demo" class="carousel slide" >
    <!-- Indicators -->
        <ul class="carousel-indicators">
        <?php $i =0; ?>
        @foreach ($slides as $banner)
        <li data-target="#demo" data-slide-to="{{$i}}" @if ($i==0)
            class="active"
        @endif></li>
        <?php $i++; ?>
      @endforeach
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $i=0; ?>
      @foreach ($slides as $banner)
      <div @if ($i==0)
          class="carousel-item active"
      @else
          class="carousel-item"
      @endif>
        <img src="{{$banner->slide_img}}" alt="">
      </div>
      <?php $i++ ?>
      @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><!--carousel slide-->
</div><!--banner-->
@endif
@endsection
@section('content')
<div class="container">
    <div class="news-content">
    <div class="tittle-post">
        <h2 class="tittle-name">
        <span class="name-tittle">Tất Cả Bài Viết</span>
        <a class="read-more" href="{{ route('viewall')}}">Xem tất cả >></a>
        </h2>
    <hr>
    </div><!--tittle-post-->
    <div class="row list-post">
        @foreach ($post_all as $baiviet)
        <div class="col-md-6 new-post">
            <div class="row">
                <div class="col-md-5 img-post">
                <img src="{{ $baiviet->img_post }}" alt="viruss">
                </div><!--img-post-->
                <div class="col-md-7 post">
                    <h4 class="name-post"><a href="{{ route('viewpost',$baiviet->id) }}">{{ $baiviet-> tittle }}</a></h4>
                <span class="content-post">
                    {!!  $baiviet->short_content !!}
                </span>
                <div class="post-footer">
                    <span class="author-img">
                        @if (($baiviet->user->avatar)!=Null)
                            <img src="{{ $baiviet->user->avatar }}" class="rounded-circle" alt="Cinque Terre" width="40" height="40">
                        @endif
                    </span><!--author-img-->
                    <span class="author-meta">
                    <span class="post-name">
                        <a href="{{ route('viewauthor',$baiviet->user_id) }}">{{ $baiviet->user->user_name }}</a>
                    </span>
                    <span class="post-date">
                       {{ $baiviet->created_at->format('d/m/Y') }}
                    </span><!--post-date-->
                    </span><!--author-meta-->
                    <span class="post-read-more">
                    <a href="{{ route('viewpost',$baiviet->id) }}"><i class="fas fa-bookmark"></i></a>
                    </span><!--post-read-more-->
                </div><!--post-footer-->
                </div><!--post-->
            </div><!--row-->
        </div><!--new-post-->
        @endforeach
    </div><!--list-post-->
    </div><!--new-content-->
</div><!--container-->
@foreach ($hot as $hot_post)
    @if (count($hot_post->posts)>0)
    <div class="container">
        <div class="news-content">
        <div class="tittle-post">
            <h2 class="tittle-name">
            <span class="name-tittle">{{ $hot_post->cate_tittle }}</span>
            <a class="read-more" href="{{ route('viewcate',$hot_post->cate_id) }}">Xem tất cả >></a>
            </h2>
        <hr>
        </div><!--tittle-post-->
        <div class="row list-post">
            <?php
                $data = $hot_post->posts->where('hot_news',0)->sortByDesc('created_at')->take(4);
            ?>
            @foreach ($data->all() as $dt)
            <div class="col-md-6 new-post">
                <div class="row">
                    <div class="col-md-5 img-post">
                    <img src="{{ $dt->img_post }}" alt="viruss">
                    </div><!--img-post-->
                    <div class="col-md-7 post">
                        <h4 class="name-post"><a href="{{ route('viewpost',$dt->id) }}">{{ $dt-> tittle }}</a></h4>
                    <span class="content-post">
                        {!!  $dt->short_content !!}
                    </span>
                    <div class="post-footer">
                        <span class="author-img">
                            @if (($dt->user->avatar)!=Null)
                                <img src="{{ $dt->user->avatar }}" class="rounded-circle" alt="Cinque Terre" width="40" height="40">
                            @endif
                        </span><!--author-img-->
                        <span class="author-meta">
                        <span class="post-name">
                            <a href="{{ route('viewauthor',$dt->user_id) }}">{{ $dt->user->user_name }}</a>
                        </span>
                        <span class="post-date">
                           {{ $dt->created_at->format('d/m/Y') }}
                        </span><!--post-date-->
                        </span><!--author-meta-->
                        <span class="post-read-more">
                        <a href="{{ route('viewpost',$dt->id) }}"><i class="fas fa-bookmark"></i></a>
                        </span><!--post-read-more-->
                    </div><!--post-footer-->
                    </div><!--post-->
                </div><!--row-->
            </div><!--new-post-->
            @endforeach
        </div><!--list-post-->
        </div><!--new-content-->
    </div><!--container-->
    @endif
@endforeach
@endsection
