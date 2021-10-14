@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Danh sách chuyên mục')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle') <span>|</span> <a class="user-add" href="{{ route('AddCate') }}"><img class="" src="icon/addcate_icon.png" alt=""></a></h1>
    <div class="card mb-4">
        <div class="card-body">
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" style="font-size: 14px;text-align: center" >
                    <thead>
                        <tr align="center">
                            <th>Mã Chuyên Mục</th>
                            <th>Tên Chuyên Mục</th>
                            <th>Thứ Tự</th>
                            <th>Trạng Thái</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach ($cate as $list_cate)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$list_cate->cate_tittle}}</td>
                                <td>
                                    @if($list_cate->ordinal  ==1)
                                    {{"Second"}}

                                    @else
                                        {{"Top"}}
                                    @endif
                                </td>
                                <td>
                                    @if(($list_cate->status) ==1)
                                    {{"Hiện"}}

                                    @else
                                        {{"Ẩn"}}
                                    @endif
                                </td>
                                <td><a href="{{ route('EditCate',$list_cate->cate_id) }}" class="btn btn-link"><i style="font-size: 20px;color: #00b3ee" class="fas fa-edit"></i></a></td>
                                <td>
                                    <a href="{{ route('DelCate',$list_cate->cate_id) }}" class="btn btn-link" href=""><i style="font-size: 20px;color: red" class="fas fa-calendar-times"></i></a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
