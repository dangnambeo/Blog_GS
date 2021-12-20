@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Thêm loại tin')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postAddType')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Loại Tin</label>
                    <input class="form-control" name=" type_tittle" type="text">
                 </div>
                 <div class="form-group">
                    <label>Chọn Chuyên Mục:</label>
                    <select class=" select2 form-control" name="cate_id">
                        <option value="">--Chọn Chuyên Mục--</option>
                        @foreach ($cate as $cate)
                            <option value="{{$cate->cate_id}}">{{$cate->cate_tittle}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Thứ Tự</label>
                    <select class="form-control" name="ordinal_type">
                        <option>-----</option>
                        <option value="0">top</option>
                        <option value="1">second</option>
                      </select>
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
