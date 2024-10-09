<!doctype html>
<html lang="en">

<head>
        @include('Layout.head')
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
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Finance</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="">{{ $header }}</a></li>
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
