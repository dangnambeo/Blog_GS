@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Xem Bài Viết(demo)')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-body">
            <a class="post-edit" href="{{ route('EditPost',$post->id) }}">
                <img style="width: 35px;" class="" src="icon/fix.png" alt="">
                <span style="font-size: 20px;font-weight: bold;font-style: italic;">
                    Sửa Bài Viết Này
                </span>
            </a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="container-post">
                <div class="main-heading">
                 <div class="author-post">
                   <div class="img-author">
                       @if (($post->user->avatar) != Null)
                            <img src="{{$post->user->avatar}}" alt="author">
                       @endif
                   </div><!--img-author-->
                   <div class="author-name">
                     <p>{{$post->user->user_name}}</p>
                   </div><!--author-name-->
                   <div class="info-author">
                     <a href="#"><i class="fas fa-eye"></i></a>
                   </div><!--info-author-->
                 </div><!--author-post-->
                 <div class="tittle">
                   <h1>{{$post->tittle}}</h1>
                 </div><!--tittle-->
                 <div class="post-date">
                    {{$post->created_at->format('d/m/Y')}}
                 </div><!--post-date-->
                </div><!--main-heading-->
                <div class="img-post">
                    @if (($post->img_post) != Null)
                        <img src="{{$post->img_post}}" alt="">
                    @endif
                </div><!--img-post-->
                <div class="content">
                  <p>
                    {!!$post->content!!}
                  </p>
                </div><!--content-->
               </div><!--container-post-->
    </div>
</div>
@endsection

