<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('tittle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="">

    <!-- Table datatable css -->
    <link href="{{ asset('admin_asset/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/fixedHeader.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/scroller.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/fixedColumns.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--Select2-->


    <link href="{{ asset('admin_asset/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />



    <!--Select2-->

    <link href="{{ asset('admin_asset/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('admin_asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('admin_asset/css/style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-success rounded-circle noti-icon-badge">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 m-0">
                                <span class="float-right">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-settings-outline"></i>
                                </div>
                                <p class="notify-details">New settings
                                    <small class="text-muted">There are new settings available</small>
                                </p>
                            </a>

                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);"
                            class="dropdown-item text-center text-primary notify-item notify-all">
                            See all Notification
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>



                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        @if (Auth::user()->avatar == null)

                        @else
                            <img src="{{ asset(Auth::user()->avatar) }}" alt="user-image" class="rounded-circle">
                        @endif
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->user_name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">

                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="#" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo3.png') }}" alt="" height="60">

                    </span>
                    <span class="logo-sm">
                        <span class="logo-sm-text-dark">BLOG</span>
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">
                        <li>
                            <a href="{{ route('home') }}" class="waves-effect waves-light">
                                <i class="fas fa-home"></i>
                                <span> Trang ch??? </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('list-post') }}" class="waves-effect waves-light">
                                <i class="  ion ion-md-cube"></i>
                                <span> Qu???n L?? B??i Vi???t</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('list-cate') }}" class="waves-effect waves-light">
                                <i class="  ion ion-md-cube"></i>
                                <span> Qu???n L?? Chuy??n m???c</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('list-type') }}" class="waves-effect waves-light">
                                <i class="fas fa-globe-africa"></i>
                                <span> Qu???n L?? Lo???i Tin</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('slide') }}" class="waves-effect waves-light">
                                <i class=" mdi mdi-sitemap"></i>
                                <span> Qu???n L?? Slide</span>
                            </a>
                        </li>
                        @if (Auth::user()->level == 0)
                            <li>
                                <a href="{{ route('list-user') }}" class="waves-effect waves-light">
                                    <i class="mdi mdi-account-group"></i>
                                    <span> Qu???n L?? Ng?????i D??ng</span>
                                </a>
                            </li>
                        @endif
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted mt-0">For Help ?</h5>
                    <p class="___class_+?63___"><span class="text-info">Email:</span>
                        <br /> support@support.com
                    </p>
                    <p class="mb-0"><span class="text-info">Call:</span>
                        <br /> (+123) 123 456 789
                    </p>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->



        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <!-- Start Content-->
                    @yield('content')
                    <!-- end container-fluid -->
                </div>
            </div>
            <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2021 &copy; BLOG-GS
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('admin_asset/js/vendor.js') }}"></script>

    <!-- plugin js -->
    <script src="{{ asset('admin_asset/libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/jquery-ui/jquery-ui.min.js') }}"></script>


    <!-- Datatable plugin js -->
    <script src="{{ asset('admin_asset/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/buttons.print.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/datatables/dataTables.fixedColumns.min.js') }}"></script>

    <!--Select2-->


    <script src="{{ asset('admin_asset/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/select2/select2.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('admin_asset/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>


    <!--Select2-->

    <script src="{{ asset('admin_asset/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_asset/libs/pdfmake/vfs_fonts.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('admin_asset/js/pages/datatables.init.js') }}"></script>

    <!--SweetAlert-->

    <!-- Plugins js -->
    <script src="{{ asset('admin_asset/libs/dropify/dropify.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('admin_asset/js/pages/form-fileuploads.init.js') }}"></script>

    <!--SweetAlert-->

    <script src="{{ asset('admin_asset/js/pages/form-advanced.init.js') }}"></script>

    <script src="{{ asset('admin_asset/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
    </script>

    <!-- App js -->
    <script src="{{ asset('admin_asset/js/app.js') }}"></script>
    <!-- Plugins js -->
    @yield('script')
    @include('sweetalert::alert')
</body>

</html>
