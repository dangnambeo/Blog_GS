@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Sửa Bài Viết')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>
    <div class="card mb-4">
        <div class="card-body"></div>
    </div>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postEditPost',$post->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tiêu Đề:</label>
                    <input class="form-control" name="tittle" type="text" value="{{$post->tittle}}">
                  </div>
                  <div class="form-group">
                    <label>Ảnh Bài Viết:</label>
                    <div class="img-post">
                        <img class="avatar" src="{{$post->img_post}}">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_post">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nội Dung Ngắn:</label>
                    <textarea name="short_content" class="form-control" id="ckeditor" rows="8">{!!$post->short_content!!}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Nội Dung:</label>
                    <textarea name="content" class="form-control" id="ckeditor1" rows="8">{!!$post->content!!}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Tin Nổi Bật</label>
                    <select class="form-control" name=" hot_news">
                        <option {{($post->hot_news) == 1? ' selected':''}} value="0">Tin Nổi Bật</option>
                        <option {{($post->hot_news) == 1? ' selected':''}} value="1">Tin Thường</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Chuyên Mục:</label>
                    <select class="form-control" name="cate_id" id="cate">
                        @foreach ($cate as $cate)
                            <option  {{($post->category->cate_id) == ($cate->cate_id)? ' selected':''}} value="{{$cate->cate_id}}">{{$cate->cate_tittle}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Loại Tin:</label>
                    <select class="form-control" name="type_id" id="type">
                        @foreach ($type as $types)
                            <option  {{($post->type->type_id) == ($types->type_id)? ' selected':''}} value="{{$types->type_id}}">{{$types->type_tittle}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="form-group">

                      <input hidden class="form-control" name="user_id" type="text" value="{{Auth::user()->user_id}}" readonly="">
                    </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#cate").change(function(){
                var cate_id = $(this).val();
                $.get("ajax/type/"+cate_id,function(data){
                    $("#type").html(data);
                });
            });
        });
    </script>
@endsection

