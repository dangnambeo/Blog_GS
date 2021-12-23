<header class="header">
    <div class="header-section row">
        <div class="col-md-2 logo">
            <img src="{{ asset("FE_asset/image/logo.png") }}" alt="logo" />
        </div>
        <div class="col-md-7 menu">
            <div class="navigation">
                <ul class="nav-menu">
                    <li class="menu-item">
                        <a href="{{ route('index') }}" class="item-link">Trang Chủ</a>
                    </li>
                    @if(!empty($cates))
                        @foreach($cates as $cate)
                            <li class="menu-item">
                                <a href="{{ route('viewcate',$cate->cate_id) }}" class="item-link">{{ $cate -> cate_tittle }}</a>
                                @if(count($cate->type) > 0)
                                <ul class="sub-menu">
                                    @foreach($cate->type as $types)
                                        <li class="sub-item">
                                            <a href="{{ route("viewtype",$types->type_id) }}" class="">{{ $types->type_tittle }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-md-3 search">
            <form action="">
                <input
                    class="form-control"
                    type="text"
                    placeholder="Tìm kiếm..."
                    aria-label="Search"
                />
                <button class="search-button fas fa-search" type="submit"></button>
            </form>
        </div>
    </div>
</header>
