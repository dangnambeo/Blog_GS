@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Quản lí Người Dùng')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle')</h1>

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
                                            <img class="rounded" alt="64x64" src="{{ asset($list->avatar) }}"
                                                style="width: 100px; height: 66px;">

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
                                            href="{{ route('EditUser', $list->user_id) }}">
                                            <i class="typcn typcn-edit"></i> Sửa
                                        </a>
                                        <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                            href="{{ route('DelUser', $list->user_id) }}"
                                            data-confirm="Bạn có muốn xóa người dùng">
                                            <i class=" typcn typcn-times"></i> Xóa
                                        </a>
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
@section('script')
    <script>
        $('.delete').on("click", function(e) {
            e.preventDefault();
            var choice = confirm($(this).attr('data-confirm'));
            if (choice) {
                window.location.href = $(this).attr('href');
            }
        });
    </script>
@endsection
