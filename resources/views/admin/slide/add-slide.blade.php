@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Thêm Slide')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>
    <div class="card mb-4">
        <div class="card-body"></div>
    </div>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postAddSlide')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Slide:</label>
                    <input class="form-control" name="slide_name" type="text">
                  </div>
                  <div class="form-group">
                    <label>Ảnh Slide:</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="slide_img">
                  </div>
                  <div class="form-group">
                    <label>Nội Dung:</label>
                    <textarea style="resize: none" name="content_slide" class="form-control" id="ckeditor" rows="8"></textarea>
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

@endsection


