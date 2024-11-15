<html lang="en" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    </head>
    <body class="sidebar-mini" style="height: auto;">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <x-sidebar>
                @include('layouts.sidebar')
            </x-sidebar>
            
            <div class="content-wrapper" style="min-height: 1604.71px;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>@yield('title')</h1>
                            </div>
                            <div class="col-sm-6">
                                {{ Breadcrumbs::render() }}
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>. </strong> All rights reserved.
            </footer>
            <div id="sidebar-overlay"></div>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js')}}"></script>
        @stack('scripts')
    </body>
</html>