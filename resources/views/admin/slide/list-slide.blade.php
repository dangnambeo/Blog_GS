@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Danh sách slide')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle') <span>|</span> <a class="" href="{{ route('AddSlide') }}"><img class="" src="icon/add-slide.png" width="35px" alt=""></a></h1>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable" width="100%" style="font-size: 14px;text-align: center" >
                    <thead>
                        <tr align="center">
                            <th>Mã Slide</th>
                            <th>Tên Slide</th>
                            <th>Slide</th>
                            <th>Nội Dung Slide</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach ($slides as $list_slide)
                            <tr>
                                <td>{{$list_slide->slide_id}}</td>
                                <td>{{$list_slide->slide_name}}</td>
                                <td><img class="avatar" src="{{$list_slide->slide_img}}"></td>
                                <td>{!!$list_slide->content_slide!!}</td>
                                <td><a href="{{ route('EditSlide',$list_slide->slide_id) }}" class="btn btn-link"><i style="font-size: 20px;color: #00b3ee" class="fas fa-edit"></i></a></td>
                                <td><a href="{{ route('DelSlide',$list_slide->slide_id) }}" class="btn btn-link" href=""><i style="font-size: 20px;color: red" class="fas fa-calendar-times"></i></a></td>
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
