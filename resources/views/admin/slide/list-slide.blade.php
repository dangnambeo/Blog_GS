@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Danh sách slide')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle')</h1>

    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable" width="100%" style="font-size: 14px;text-align: center" >
                    <thead>
                        <tr>
                            <th>Mã Slide</th>
                            <th>Tên Slide</th>
                            <th>Slide</th>
                            <th>Nội Dung Slide</th>
                            <th>
                                <a class="btn btn-primary waves-effect waves-light btn-xs"
                                   href="{{ route('AddSlide') }}">
                                    <i class="typcn typcn-plus"></i> Thêm slide
                                </a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach ($slides as $list_slide)
                            <tr>
                                <td>{{$list_slide->slide_id}}</td>
                                <td>{{$list_slide->slide_name}}</td>
                                <td style="width: 200px">
                                    <img class="avatar" src="{{ asset($list_slide->slide_img) }}" width="100%" alt="">
                                </td>
                                <td>{!!$list_slide->content_slide!!}</td>
                                <td style="text-align: center">
                                    <a class="btn btn-success waves-effect waves-light btn-xs"
                                       href="{{ route('EditSlide',$list_slide->slide_id) }}">
                                        <i class="typcn typcn-edit"></i> Sửa Slide
                                    </a>
                                    <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                       href="{{ route('DelSlide',$list_slide->slide_id) }}"
                                       data-confirm="Bạn có muốn xóa người dùng">
                                        <i class=" typcn typcn-times"></i> Xóa Slide
                                    </a>
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
