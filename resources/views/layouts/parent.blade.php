<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Todo/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Todo/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Todo/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Todo/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Todo/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.includes.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.includes.sidebar.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        {{-- handle error --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">There's somthing wrong!</h4>
                <hr>
                <p>
                    <ul>
                        @foreach ($error->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </p>
            </div>
        @endif

        @yield('content')

    </main>

    <!-- ======= Footer ======= -->
    @include('layouts.includes.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Todo/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Todo/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Todo/assets/js/main.js') }}"></script>

</body>

</html>
