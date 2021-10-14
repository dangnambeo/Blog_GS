@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Thêm loại tin')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postEditType',$type->type_id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Loại Tin</label>
                    <input class="form-control" name=" type_tittle" type="text" value="{{ $type-> type_tittle}}">
                 </div>
                 <div class="form-group">
                    <label>Chọn Chuyên Mục:</label>
                    <select class="form-control" name="cate_id">
                        @foreach ($cate as $cate)
                            <option  {{($type->cate_id) == ($cate->cate_id)? ' selected':''}} value="{{$cate->cate_id}}">{{$cate->cate_tittle}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Thứ Tự</label>
                    <select class="form-control" name=" ordinal_type">
                        <option {{($type->ordinal_type) == 1? ' selected':''}} value="0">top</option>
                        <option {{($type->ordinal_type) == 1? ' selected':''}} value="1">second</option>
                      </select>
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
