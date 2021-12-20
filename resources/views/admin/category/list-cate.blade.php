@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Quản lý chuyên mục')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle') </h1>
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
                                <th>Mã Chuyên Mục</th>
                                <th>Tên Chuyên Mục</th>
                                <th>Thứ Tự</th>
                                <th>Trạng Thái</th>
                                <th>
                                    <a class="btn btn-primary waves-effect waves-light btn-xs"
                                        href="{{ route('AddCate') }}">
                                        <i class="typcn typcn-plus"></i> Thêm Chuyên mục
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($cate as $list_cate)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $list_cate->cate_tittle }}</td>
                                    <td>
                                        @if ($list_cate->ordinal == 1)
                                            {{ 'Second' }}

                                        @else
                                            {{ 'Top' }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($list_cate->status == 1)
                                            {{ 'Hiện' }}

                                        @else
                                            {{ 'Ẩn' }}
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                            href="{{ route('EditCate', $list_cate->cate_id) }}">
                                            <i class="typcn typcn-edit"></i> Sửa
                                        </a>
                                        <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                            href="{{ route('DelCate', $list_cate->cate_id) }}""
                                                        data-confirm=" Bạn có muốn xóa chuyễn mục">
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
