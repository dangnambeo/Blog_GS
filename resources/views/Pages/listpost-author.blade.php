@extends('layout.master')
@extends('layout.header')
@section('title','Tác giả')
@section('content')
<div class="container">
    <div class="news-content">
                <div class="tittle-post" style="text-align: center">
                    <span>
                        @if (($user->avatar) != Null)
                            <img src="{{ $user->avatar }}" alt="" width="100px" height="100px" style="border-radius: 50%">
                        @endif
                    </span>
                    <h2 class="tittle-name">
                        <span class="name-tittle">{{ $user->full_name }}</span>
                    </h2>
                    <hr>
            </div><!--tittle-post-->
            <div class="row list-post">
                @foreach ($post_user as $post_users)
                    <div class="col-md-4 post-list">
                        <div class="list">
                            <div class="img-post">
                                <img src="{{ $post_users->img_post }}" alt="viruss">
                            </div><!--img-post-->
                            <div class="post">
                                <h4 class="name-post"><a href="{{ route('viewpost',$post_users->id) }}">{{ $post_users->tittle }}</a></h4>
                                <span class="content-post">
                                    {!! $post_users->short_content !!}
                                </span>
                            </div><!--post-->
                        </div><!--list-->
                    </div><!--post-list-->
                @endforeach
        </div><!--list-post-->
        {{ $post_user->links() }}
    </div><!--new-content-->
</div><!--container-->
@endsection
