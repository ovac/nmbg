<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="/css/dashboard.css" class="color-switcher-link">
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
        <script src="/js/vendor/html5shiv.min.js"></script>
        <script src="/js/vendor/respond.min.js"></script>
        <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body class="admin"  style="background-color: #000000;">

    @include('partials.errors', compact('errors'))

    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->
    @include('partials.errors', compact('errors'))

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                <i class="rt-icon2-cross2"></i>
            </span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form form-inline" action="./">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div>

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->

        @unless (auth()->user()->isSubscribed() || request()->is('subscribe'))

            <ul class="list-unstyled">
                <div class="alert alert-danger">
                    <center>
                        Kindly complete your registration form payment via mobile money or contact us to make your payment manually.
                        <hr>
                        <a href="/subscribe">
                            <button>Click here to make your payment online</button>
                        </a>
                        <hr>
                        or contact @foreach (explode(', ', config('nmbg.contact.phone')) as $phone){{ $phone }}{{ $loop->last ? '' : ', ' }}@endforeach
                    </center>
                </div>
            </ul>
        @endif


        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- wrappers for visual page editor and boxed version of template -->
            <div id="canvas">
                <div id="box_wrapper">
                    @include('partials.interior-nav')
                    @include('partials.breadcrumb')
                    <div style="min-height: calc(100vh - 150px); ">

                        @unless (auth()->user()->isSubscribed()  || request()->is('subscribe'))
                            <div class="alert alert-danger">
                                <center>
                                    Kindly complete your registration form payment via mobile money or contact us to make your payment manually.
                                    <hr>
                                    <a href="/subscribe">
                                        <button>Click here to make your payment online</button>
                                    </a>
                                    <hr>
                                    or contact @foreach (explode(', ', config('nmbg.contact.phone')) as $phone){{ $phone }}{{ $loop->last ? '' : ', ' }}@endforeach
                                </center>
                            </div>
                        @endif

                        @if (session()->has('message'))
                            <div class="alert alert-info">
                                <center>
                                    {{ session('message') }}
                                </center>
                            </div>
                        @endif

                        @yield('content')
                    </div>

                    <section class="page_copyright ds darkblue_bg_color">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="grey">&copy; Copyrights 2018 D'Emperor Media Consult Ghana Limited</p>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                    <p class="grey">Designed by  <i class="fa fa-computer"></i> <a href="https://www.ovac4u.com">OVAC4U - www.ovac4u.com</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- eof #box_wrapper -->
            </div>
            <!-- eof #canvas -->
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->




    <!-- template init -->
    <script src="/js/compressed.js"></script>
    <script src="/js/main.js"></script>

    <!-- dashboard libs -->

    <!-- events calendar -->
    <script src="/js/admin/moment.min.js"></script>
    <script src="/js/admin/fullcalendar.min.js"></script>
    <!-- range picker -->
    <script src="/js/admin/daterangepicker.js"></script>

    <!-- charts -->
    <script src="/js/admin/Chart.bundle.min.js"></script>
    <!-- vector map -->
    <script src="/js/admin/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/js/admin/jquery-jvectormap-world-mill.js"></script>
    <!-- small charts -->
    <script src="/js/admin/jquery.sparkline.min.js"></script>

    <!-- dashboard init -->
    <script src="/js/admin.js"></script>
    @yield('show-error-modal')
    @yield('calender-script')
</body>

</html>
