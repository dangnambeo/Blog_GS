@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Quản lí Người Dùng')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle') <span>|</span> <a class="user-add"
                href="{{ route('AddUser') }}"><i class="fas fa-user-plus"></i></a></h1>
        <div class="card mb-4">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="datatable" width="100%"
                        style="font-size: 14px;text-align: center">
                        <thead>
                            <tr align="center">
                                <th>Mã Người Dùng</th>
                                <th>Tên Đầy Đủ</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Cấp Quản Lý</th>
                                <th style="text-align: center">
                                    <a class="btn btn-primary waves-effect waves-light btn-xs"
                                        href="{{ route('AddUser') }}">
                                        <i class="fas fa-user-plus"></i> Thêm người dùng
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($user as $list)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $list->full_name }}</td>
                                    <td>{{ $list->user_name }}</td>
                                    <td>
                                        @if ($list->avatar == null)
                                            <p style="color: red;font-weight: bold">Bạn chưa thêm ảnh đại diện</p>
                                        @else
                                            <img class="avatar" src="{{ $list->avatar }}">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($list->level == 1)
                                            {{ 'Bloger' }}

                                        @else
                                            {{ 'Admin' }}
                                        @endif
                                    </td>
                                    <td style="text-align: center">

                                        <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                           href="{{ route('xuat_sp',$sp->ID) }}">
                                            <i class="typcn typcn-edit"></i> Sửa
                                        </a>
                                        <a class="btn btn-pinterest waves-effect waves-light btn-xs delete" href="{{ route('del_sp', $sp->ID) }}"
                                           data-confirm="Bạn có muốn xóa sinh phẩm?">
                                            <i class=" typcn typcn-times"></i> Xóa
                                        </a>
                                    </td>
                                    <td><a href="{{ route('EditUser', $list->user_id) }}" class="btn btn-link"><i
                                                style="font-size: 20px;color: #00b3ee" class="fas fa-edit"></i></a></td>
                                    <td><a href="{{ route('DelUser', $list->user_id) }}" class="btn btn-link" href=""><i
                                                style="font-size: 20px;color: red" class="fas fa-calendar-times"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
