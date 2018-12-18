
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <base href="{{ asset('local/storage/app/public/admin') }}/">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{asset('admin')}}">VNG-GROUP</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="{{asset('admin')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> xin chào <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li class="divider"></li>
                        <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>

                        <li>
                            <a href="{{asset('quanlydichvu')}}">
                                <div>
                                    <i class="fa fa-dashboard fa-fw"></i> Các Dịch Vụ Tư Vấn
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Doanh Nghiệp<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('banerdoanhnghiep')}}"> Baner</a>
                                </li>
                                <li>
                                    <a href="{{asset('dichvudoanhnghiep')}}"> Dịch Vụ Thành Lập Doanh Nghiệp</a>
                                </li>
                                <li style="margin-top: unset;">
                                    <a href="{{asset('quanlydoanhnghiep')}}"> Các Lĩnh Vực Khác</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{asset('quanlydatdai')}}">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Đất Đai
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('quanlygiayphep')}}">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Giấy Phép
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('quanlytritue')}}">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Sở Hữu Trí Tuệ
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('quanlytintuc')}}">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Tin Tức
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('quanlynhanvien')}}">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> Nhân Viên Tư Vấn
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('ykienkhachhang')}}">
                                <div>
                                    <i class="fa fa-edit fa-fw"></i> Ý Kiến Khách Hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('lydo')}}">
                                <div>
                                    <i class="fa fa-sitemap fa-fw"></i> Lý Do Lựa Chọn VNG-GROUP
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('dangkinhanbantin')}}">
                                <div>
                                    <i class="fa fa-table fa-fw"></i> Đăng Kí Nhận Bản Tin

                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{asset('tuvankhachhang')}}">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Khách Hàng
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('quanlythanhvien')}}">
                                <div>
                                    <i class="fa fa-user fa-fw"></i> Quản Lý Thành Viên
                                </div>
                            </a>
                        </li>
                        

                        <li id="logout">
                            <a href="{{asset('logout')}}" class="active"><img src="../images/exit-512.png" width="20px" height="20px"> Đăng xuất</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        @yield('main')
                        {{-- <h1 class="page-header">Page Title</h1> --}}
                    </div>
                </div>

                <!-- ... Your content goes here ... -->

            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

    <script src="js/bootstrap-table.min.js"></script>

    <script src="js/xoa.js"></script>



    @yield('script')



</body>
</html>
