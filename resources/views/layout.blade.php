<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lunoz - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    @yield('style')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    @yield('create')
                </div>

                <div class="d-flex align-items-center">


                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Profile</span>
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Log Out</span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="/" target="_blank" class="logo">
                        <img src="/assets/images/logo-light.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="/dashboard" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
                        </li>
                        @php
                            $menus=\App\Models\Role::select('access')->where('id',Auth::user()->role_id)->first();
                        @endphp
                        @if (count(array_intersect(explode(',',$menus->access),explode(',','raw,wip,finish')))>0)
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Products</span></a>
                            <ul class="sub-menu" aria-expanded="false">

                                @if (array_search('raw',explode(',',$menus->access))!==false)
                                <li><a href="{{ route('raw.index') }}">Raw Products</a></li>
                                @endif
                                @if (array_search('wip',explode(',',$menus->access),true)!==false)
                                <li><a href="{{ route('wip.index') }}">WIP Products</a></li>
                                @endif
                                @if (array_search('finish',explode(',',$menus->access),true)!==false)
                                <li><a href="{{ route('finish.index') }}">Finished Products</a></li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        @if (count(array_intersect(explode(',',$menus->access),explode(',','role')))>0)
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx bx-lock-open-alt"></i><span>Auth</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.index') }}">Admins</a></li>
                                <li><a href="{{ route('role.index') }}">Roles</a></li>
                            </ul>
                        </li>
                        @endif
                        <li><a href="{{ route('user.index') }}" class=" waves-effect"><i class="bx bx-user"></i><span>Customers</span></a></li>
                        
                        <li><a href="{{ route('stock.index') }}" class=" waves-effect"><i class="bx bx bx-fridge"></i><span>Stocks</span></a></li>
                        <li><a href="calendar.html" class=" waves-effect"><i class="bx bx-calendar"></i><span>Calendar</span></a></li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                   <!-- start page title -->
                   <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">@yield('menu')</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('menu')</a></li>
                                        <li class="breadcrumb-item active">@yield('sub_menu')</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            {{date('Y')}} © Lunoz.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/metismenu.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="/assets/plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="/assets/plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="/assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="/assets/js/theme.js"></script>
    @yield('script')

</body>

</html>