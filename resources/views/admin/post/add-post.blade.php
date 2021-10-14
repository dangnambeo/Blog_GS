@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Thêm Bài Viết')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle')</h1>

        <div class="card mb-4">
            <div class="card-body" style="margin: 20px">
                <form action="{{ route('postAddPost') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Tiêu Đề:</label>
                        <input class="form-control" name="tittle" type="text">
                    </div>
                    <div class="form-group">
                        <label>Ảnh Bài Viết:</label>
                        <input type="file" class="dropify" data-height="210" name="img_post" />
                    </div>
                    <div class="form-group">
                        <label>Nội Dung Ngắn:</label>
                        <textarea style="resize: none" name="short_content" class="form-control" id="ckeditor"
                            rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội Dung:</label>
                        <textarea style="resize: none" name="content" class="form-control" id="ckeditor1"
                            rows="8"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Chuyên Mục:</label>
                                <select class="form-control" name="cate_id" id="cate">
                                    <option value="">--Chọn Chuyên Mục--</option>
                                    @foreach ($cate as $cate)
                                        <option value="{{ $cate->cate_id }}">{{ $cate->cate_tittle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Loại Tin:</label>
                                <select class="form-control" name="type_id" id="type">
                                    <option value="">--Chọn Loại Tin--</option>
                                    @foreach ($type as $types)
                                        <option value="{{ $types->type_id }}">{{ $types->type_tittle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tin Nổi Bật</label>
                                <select class="form-control" name=" hot_news">
                                    <option>-----</option>
                                    <option value="0">Tin Nổi Bật</option>
                                    <option value="1">Tin Thường</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input hidden class="form-control" name="user_id" type="text" value="{{ Auth::user()->user_id }}"
                            readonly="">
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#cate").change(function() {
                var cate_id = $(this).val();
                $.get("../ajax/type/" + cate_id, function(data) {
                    $("#type").html(data);
                });
            });
        });
    </script>
@endsection
