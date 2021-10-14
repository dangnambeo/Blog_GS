<header class="header">
    <div class="header-top row">
        <div class="col-md-4 header-follow">
            <a class="btn-follow"  target="_blank" href="{{ route('index') }}"><i class="fab fa-twitter"></i>&nbsp<span>Follow</span></a>
            &nbsp
            <a target="_blank" href="{{ route('index') }}"><i class="fab fa-google-plus-g"></i></a>
            &nbsp
            <a target="_blank" href="{{ route('index') }}"><i class="fab fa-facebook-f"></i></a>
        </div>
        <div class="col-md-4 logo">
            <a href="{{ route('index') }}" style="font-family: Sansita Swashed; font-style: italic; font-weight: bold">Giám Sát và Xét Nghiệm</a>
        </div>
        <div class="col-md-4 search">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
              </form>
        </div>
    </div><!--header-top-->
    <div class="navbar">
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Giám Sát và Xét Nghiệm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index') }}">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                @if(!empty(($cates)))
                @foreach ($cates as $cate)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewcate',$cate->cate_id) }}">{{$cate->cate_tittle}}</a>
                        <ul class="sub-menu">
                            @foreach ($cate->type as $types)
                                <li class="item"><a href="{{ route('viewtype',$types->type_id) }}">{{ $types->type_tittle }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                @endif
              </ul>
            </div>
        </nav>
    </div><!--navbar-->
</header><!--header-->
