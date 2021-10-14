@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Danh sách các loại tin')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle')</h1>
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
                                <th>Mã Loại Tin</th>
                                <th>Tên Loại Tin</th>
                                <th>Tên Chuyên Mục</th>
                                <th>Thứ Tự</th>
                                <th>
                                    <a class="btn btn-primary waves-effect waves-light btn-xs"
                                        href="{{ route('AddType') }}">
                                        <i class="typcn typcn-plus"></i> Thêm Loại tin
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($type as $list_type)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $list_type->type_tittle }}</td>
                                    <td>{{ $list_type->category->cate_tittle }}</td>
                                    <td>
                                        @if ($list_type->ordinal_type == 1)
                                            {{ 'Second' }}

                                        @else
                                            {{ 'Top' }}
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                            href="{{ route('EditType', $list_type->type_id) }}">
                                            <i class="typcn typcn-edit"></i> Sửa
                                        </a>
                                        <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                            href="{{ route('DelType', $list_type->type_id) }}"
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
