<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'MuscleMap')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/es6-promise/dist/es6-promise.auto.min.js"></script>
    <script src="{{ asset('js/jquery.3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.imagemapster.js') }}"></script>
    @yield('additional_head')
</head>
<body>
<div class="d-flex sticky-top" id="wrapper">
    <!-- Sidebar-->
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed col-3 px-1 bg-dark position-fixed">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 nav flex-column flex-nowrap vh-100 overflow-auto text-white p-2">
            <a href="{{ route('home') }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-3 d-none d-sm-inline">MuscleMap</span>
            </a>
            @yield('sidebar')
        </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-left: 16.666667%;">
        @yield('content')
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>
