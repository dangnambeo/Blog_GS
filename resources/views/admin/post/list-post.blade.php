@extends('admin.layout.master')
@extends('admin.layout.header')
@section('tittle', 'Danh sách bài viết')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@yield('tittle') <span>|</span> <a class="user-add"
                href="{{ route('AddPost') }}"><img class="" src="icon/blogadd_icon.png" alt=""></a></h1>
        <div class="card mb-4">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-4 post">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="datatable" width="100%"
                        style="font-size: 14px;text-align: center">
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
                                <th>
                                    <a class="btn btn-primary waves-effect waves-light btn-xs"
                                        href="{{ route('AddPost') }}">
                                        <i class="typcn typcn-plus"></i> Thêm bài viết
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($post as $list_post)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td class="custom-text">{{ $list_post->tittle }}</td>
                                    <td>
                                        @if ($list_post->img_post != null)
                                            <img class="rounded" alt="64x64"
                                                src="{{ asset($list_post->img_post) }}"
                                                style="width: 100px; height: 66px;">

                                        @else

                                        @endif
                                    </td>
                                    <td class="custom-text">{!! $list_post->short_content !!}</td>
                                    <td>
                                        @if ($list_post->hot_news == 1)
                                            <i style="font-size: 20px;color: #f1c40f" class="far fa-star"></i>
                                        @else
                                            <i style="font-size: 20px;color: #f1c40f" class="fas fa-star"></i>
                                        @endif
                                    </td>
                                    <td>{{ $list_post->category->cate_tittle }}</td>
                                    <td>{{ $list_post->type->type_tittle }}</td>
                                    <td>{{ $list_post->user->user_name }}</td>
                                    <td>{{ $list_post->created_at->format('d/m/Y') }}</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-success waves-effect waves-light btn-xs"
                                            href="{{ route('ViewPost', $list_post->id) }}">
                                            <i class="typcn typcn-edit"></i> Xem bài viết
                                        </a>
                                        <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                            href="{{ route('DelPost', $list_post->id) }}"
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
