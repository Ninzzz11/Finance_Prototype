<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
    <link href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css"/>
    <title>Finance Dashboard</title>
     {{-- @vite(['resources/sass/app.scss','resource/css/app.css','resources/js/app.js']) --}}
</head>

<body>
    <!-- main wrapper -->
    <div class="dashboard-main-wrapper">

        <x-header>
            {{ $slot }}
        </x-header>

        <!-- left sidebar -->

            @include('components.sidebar')

        <!-- end left sidebar -->


        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">




                <!-- pageheader  -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">{{ $header }}</h3>
                            {{-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> --}}
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $header }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- end pageheader  -->

                {{-- main content --}}
                        {{ $slot }}
                {{-- main content end --}}

                </div>
            </div>

                <!-- footer -->
                 @include('components.footer')
                <!-- end footer -->

        </div>
        <!-- end wrapper  -->
    </div>
    <!-- end main wrapper  -->

    <!-- jquery 3.3.1  -->
    <script src="{{ asset('')}}assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- dashboard finance js -->
    <script src="{{ asset('assets/libs/js/dashboard-finance.js')}}"></script>
    <!-- main js -->
    <script src="a{{ asset('ssets/libs/js/main-js.js')}}"></script>
    <!-- gauge js -->
    <script src="{{ asset('assets/vendor/gauge/gauge.min.js')}}"></script>
    <!-- daterangepicker js -->
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>
</body>
</html>
