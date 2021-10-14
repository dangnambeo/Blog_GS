@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Sửa Người Dùng')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Người Dùng</h1>
        <div class="card mb-4">
            <div class="card-body"></div>
        </div>
        <div class="card mb-4">
            <div class="card-body" style="margin: 20px">
                <form action="{{ route('postEditUser', $user->user_id) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tên Đầy Đủ:</label>
                        <input class="form-control" name=" full_name" type="text" value="{{ $user->full_name }}"
                            disabled=''>
                    </div>
                    <div class="form-group">
                        <label>Tạo Tên Đăng Nhập:</label>
                        <input class="form-control" name="user_name" type="text" value="{{ $user->user_name }}">
                    </div>
                    <div class="form-group">
                        <label>Ảnh Đại diện:</label>
                        <div class="img-avatar">
                            <img class="avatar" src="{{ $user->avatar }}">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cấp Quản Lý:</label>
                        <select class="form-control" name=" level">
                            <option {{ $user->level == 0 ? ' selected' : '' }} value="0">Admin</option>
                            <option {{ $user->level == 1 ? ' selected' : '' }} value="1">Bloger</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="change_pass" name="change_pass">
                        <label>Tạo Mật Khẩu Mới:</label>
                        <input class="form-control pass" type="password" name="password" placeholder="Nhập mật khẩu mới"
                            disabled="">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu mới:</label>
                        <input class="form-control pass" type="password" name="password2"
                            placeholder="Nhập lại mật khẩu mới" disabled="">
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Lưu</button>
                    <a href="{{ route('list-user') }}" class="btn btn-danger btn" role="button"
                        aria-pressed="true">Hủy</a>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#change_pass").change(function() {
                if ($(this).is(":checked")) {
                    $(".pass").removeAttr('disabled');
                } else {
                    $(".pass").attr('disabled', '');
                }
            });
        });

    </script>
@endsection
