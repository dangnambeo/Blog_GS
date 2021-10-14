@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Thêm Chuyên Mục')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>

        @if(session('tb'))
        <div class="alert alert-success" role="alert">
            {{ session('tb')}}
        </div>
        @endif

    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postAddCate')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Chuyên Mục</label>
                    <input class="form-control" name=" cate_tittle" type="text">
                  </div>
                  <div class="form-group">
                    <label>Thứ Tự</label>
                    <select class="form-control" name=" ordinal">
                        <option value="0">top</option>
                        <option value="1">second</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Trạng Thái</label>
                      <select class="form-control" name=" status">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                      </select>
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

@endsection


