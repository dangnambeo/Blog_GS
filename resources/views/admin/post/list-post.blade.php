@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle','Danh sách bài viết')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">@yield('tittle') <span>|</span> <a class="user-add" href="{{ route('AddPost') }}"><img class="" src="icon/blogadd_icon.png" alt=""></a></h1>
    <div class="card mb-4">
        <div class="card-body">
        </div>
    </div>
    <div class="card mb-4 post">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable" width="100%" style="font-size: 14px;text-align: center" >
                    <thead>
                        <tr align="center">
                            <th>Mã Bài Viết</th>
                            <th>Tiêu Đề</th>
                            <th>Ảnh</th>
                            <th>Nội Dung Ngắn</th>
                            <th>Tin Nổi Bật</th>
                            <th>Chuyên Mục</th>
                            <th>Loại Tin</th>
                            <th>Tác Giả</th>
                            <th>Ngày Tạo</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach ($post as $list_post)
                            <tr>
                                <td>{{$i}}</td>
                                <td class="custom-text">{{$list_post->tittle}}</td>
                                <td>
                                    @if (($list_post->img_post) != Null)
                                        <img class="avatar" src="{{$list_post->img_post}}">
                                    @else
                                        <img src="icon/null.png" alt="">
                                        <p style="color: red; font-weight: bold;font-style: italic">Chưa Có ảnh bài viết</p>
                                    @endif
                                </td>
                                <td class="custom-text">{!!$list_post->short_content!!}</td>
                                <td>
                                    @if(($list_post->hot_news) ==1)
                                    <i style="font-size: 20px;color: #f1c40f" class="far fa-star"></i>
                                    @else
                                        <i style="font-size: 20px;color: #f1c40f" class="fas fa-star"></i>
                                    @endif
                                </td>
                                <td>{{$list_post->category->cate_tittle}}</td>
                                <td>{{$list_post->type->type_tittle}}</td>
                                <td>{{$list_post->user->user_name}}</td>
                                <td>{{$list_post->created_at->format('d/m/Y')}}</td>
                                <td><a href="{{ route('ViewPost',$list_post->id) }}" class="btn btn-link"><i style="font-size: 20px;color: #2ecc71" class="far fa-eye"></i></a></td>
                                <td><a href="{{ route('EditPost',$list_post->id) }}" class="btn btn-link"><i style="font-size: 20px;color: #00b3ee" class="fas fa-edit"></i></a></td>
                                <td><a href="{{ route('DelPost',$list_post->id) }}" class="btn btn-link" href=""><i style="font-size: 20px;color: red" class="fas fa-calendar-times"></i></a></td>
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

