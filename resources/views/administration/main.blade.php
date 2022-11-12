<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            @include('administration.side')
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                @include('administration.nav')

                <div class="container-fluid px-4">
                    @include('administration.card')

                    @yield('main')
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.js') }}"></script>
</html>
