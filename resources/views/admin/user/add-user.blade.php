@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Thêm Người Dùng')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Thêm Người Dùng</h1>
    <div class="card mb-4">
        <div class="card-body"></div>
    </div>
    <div class="card mb-4">
        <div class="card-body" style="margin: 20px">
            <form action="{{ route('postAddUser')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên Đầy Đủ</label>
                    <input class="form-control" name=" full_name" type="text">
                  </div>
                  <div class="form-group">
                    <label>Tạo Tên Đăng Nhập</label>
                    <input class="form-control" name="user_name" type="text">
                  </div>
                  <div class="form-group">
                    <label>Ảnh Đại diện</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
                  </div>
                  <div class="form-group">
                      <label>Cấp Quản Lý</label>
                      <select class="form-control" name=" level">
                        <option value="0">Admin</option>
                        <option value="1">Bloger</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Tạo Mật Khẩu</label>
                    <input class="form-control" name="password" type="password">
                  </div>
                  <div class="form-group">
                    <label>Nhập Lại Mật Khẩu</label>
                    <input class="form-control" name="password2" type="password">
                  </div>
                  <button type="submit" value="Save" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection


