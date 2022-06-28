<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/images/favicon.png">
    <title>Pengaduan Web</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pengaduan Web</title>
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/images/favicon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Costum Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {{-- Chart --}}
    <link href="{{ asset('src/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/js/pages/chartist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}"
        rel="stylesheet">
    <link href="{{ asset('src/assets/extra-libs/css-chart/css-chart.css') }}" rel="stylesheet">

    <style>
        .dataTables_filter {
            float: right;
        }

        .dt-button {
            color: #fff;
            background-color: #263238;
            border-color: #263238;
            box-shadow: 0 1px 0 rgb(255 255 255 / 15%);
        }

        .dt-button:hover {
            color: #fff;
            background-color: #263238;
            border-color: #263238;
            box-shadow: 0 1px 0 rgb(255 255 255 / 15%);
        }

        .dataTables_paginate {
            float: right;
        }
    </style>
</head>

<body>
    <div id="app">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        @guest

        @if (Route::has('login'))
        @endif

        @if (Route::has('register'))
        @endif

        @else

        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                                class="ti-menu ti-close"></i></a>

                        <a class="navbar-brand" href="/home">
                            <b class="logo-icon text-white">
                                <i class="bi bi-circle mx-1"></i>
                            </b>
                            <span class="logo-text text-white">
                                Pengaduan <span class="fw-bold">Web</span>
                            </span>
                        </a>

                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>

                    <div class="navbar-collapse collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item d-none d-md-block"><a
                                    class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                    data-sidebartype="mini-sidebar"><i class="icon-arrow-left-circle"></i></a></li>
                        </ul>

                        <ul class="navbar-nav">

                            @guest

                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else



                            <li class="nav-item search-box d-none d-md-block">
                                <form class="app-search mt-3 mr-2">
                                    <input type="text" class="form-control rounded-pill border-0"
                                        placeholder="Search for...">
                                    <a class="srh-btn"><i class="ti-search"></i></a>
                                </form>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{
                                    Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                        <div class="ml-2">
                                            <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                            <p class=" mb-0">{{ Auth::user()->email }}</p>

                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i>
                                        My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"> Logout</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off mr-1 ml-1"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            @endguest

                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span
                                    class="hide-menu">Personal</span></li>

                            @role('Admin')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i><span
                                        class="hide-menu mx-2">Home</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('users.index') }}"><i class="bi bi-people-fill"></i><span
                                        class="hide-menu mx-2">Manage Users</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('roles.index') }}"><i class="bi bi-person-lines-fill"></i><span
                                        class="hide-menu mx-2">Manage Role</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('pengaduan.index') }}"><i class="bi bi-envelope-fill"></i><span
                                        class="hide-menu mx-2">Manage Pengaduan</span></a></li>

                            @else
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i><span
                                        class="hide-menu mx-2">Home</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('pengaduan.index') }}"><i class="bi bi-envelope-fill"></i><span
                                        class="hide-menu mx-2">Manage Pengaduan</span></a></li>
                            @endrole

                        </ul>
                    </nav>

                </div>

            </aside>

            <div class="chat-windows"></div>

            @endguest


            <div class="page-wrapper">

                @guest

                @if (Route::has('login'))
                @endif

                @if (Route::has('register'))
                @endif

                @else

                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-md-5 align-self-center">
                            <h3 class="page-title">Dashboard</h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php $segments = ''; ?>
                                        @foreach(Request::segments() as $segment)
                                        <?php $segments .= '/'.$segment; ?>
                                        <li class="breadcrumb-item ">
                                            <a class="text-info" href="{{ $segments }}">{{$segment}}</a>
                                        </li>
                                        @endforeach
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid">

                    @endguest



                    <div class="row">

                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>

                    @guest

                    @if (Route::has('login'))
                    @endif

                    @if (Route::has('register'))
                    @endif

                    @else

                </div>

                @endguest



                <footer class="footer">
                    © 2020 Monster Admin by wrappixel.com
                </footer>



            </div>

        </div>
    </div>
    </div>



    <script src="{{ asset('src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    {{-- Bootstrap tether Core JavaScript --}}
    <script src="{{ asset('src/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    {{-- apps --}}
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    {{-- Admin Dashboard --}}
    <script>
        $(function () {
                        "use strict";
                        $("#main-wrapper").AdminSettings({
                            Theme: false, // this can be true or false ( true means dark and false means light ),
                            Layout: 'vertical',
                            LogoBg: 'skin3', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                            NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                            SidebarType: 'mini-sidebar', // You can change it full / mini-sidebar / iconbar / overlay
                            SidebarColor: 'skin3', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                            SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                            HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                            BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
                        });
                    });
    </script>
    {{-- apps --}}
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    {{-- slimscrollbar scrollbar JavaScript --}}
    <script src="{{ asset('src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    {{-- Wave Effects --}}
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    {{-- Menu sidebar --}}
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    {{-- Custom JavaScript --}}
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>

    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>

    {{-- Datatables Plugin --}}
    <script src="{{ asset('src/assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/custom-datatable.js') }}"></script>

    {{-- Export Function --}}
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-advanced.init.js') }}"></script>

    {{-- charts --}}
    <script src="{{ asset('src/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/echarts/dist/echarts.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/d3/dist/d3.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard5.js') }}"></script>


</body>

</html>
