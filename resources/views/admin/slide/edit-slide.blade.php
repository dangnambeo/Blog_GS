@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Sửa Slide')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>
    <div class="card mb-4">
        <div class="card-body"></div>
    </div>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postEditSlide',$slides->slide_id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Slide:</label>
                    <input class="form-control" name="slide_name" type="text" value="{{$slides->slide_name}}">
                  </div>
                  <div class="form-group">
                    <label>Ảnh Slide:</label>
                    <div class="img-post">
                        <img class="avatar" src="{{$slides->slide_img}}">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="slide_img">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nội Dung:</label>
                    <textarea style="resize: none" name="content_slide" class="form-control" id="ckeditor" rows="8">
                        {!!$slides->content_slide!!}
                    </textarea>
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

@endsection


