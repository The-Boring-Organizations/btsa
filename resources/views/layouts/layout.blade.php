@inject('IRModel', '\App\IRModel')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | BTSA LOGISTICS SYSTEM</title>
    <meta name="title" content="BTSA LOGISTICS SYSTEM">
    <meta name="language" content="English">
    <meta name="author" content="Bintang Jeremia Tobing">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon"
        href="{!! url('https://res.cloudinary.com/btsa-co-id/image/upload/v1541503574/jscsstxtfiledll/icon/starlogo.ico')!!}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{!! url ('http://placehold.it/144.png/000/fff')!!}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{!! url ('http://placehold.it/114.png/000/fff')!!}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{!! url ('http://placehold.it/72.png/000/fff')!!}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{!! url ('http://placehold.it/57.png/000/fff')!!}">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="{!!url('https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js')!!}">
    </script>
    <link rel="stylesheet"
        href="{!!url('https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css')!!}" />
</head>
<!-- Styles -->
<link href="{!! asset('css/lib/weather-icons.css')!!}" rel="stylesheet" />
<link href="{!! asset('css/lib/owl.carousel.min.css')!!}" rel="stylesheet" />
<link href="{!! asset('css/lib/owl.theme.default.min.css')!!}" rel="stylesheet" />
<link href="{!! asset('css/lib/font-awesome.min.css')!!}" rel="stylesheet">
<link href="{!! asset('css/lib/themify-icons.css')!!}" rel="stylesheet">
<link href="{!! asset('css/lib/menubar/sidebar.css')!!}" rel="stylesheet">
<link href="{!! asset('css/lib/bootstrap.min.css')!!}" rel="stylesheet">
{{-- <link href="{!!asset('css/lib/datatable/dataTables.bootstrap.min.css')!!}" rel="stylesheet" />
        <link href="{!!asset('css/lib/datatable/buttons.bootstrap.min.css')!!}" rel="stylesheet" /> --}}
<link rel="stylesheet" type="text/css"
    href="{!!url('https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css')!!}">

<link href="{!! asset('css/lib/helper.css')!!}" rel="stylesheet">
<link href="{!! asset('css/style.css')!!}" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo"><a href="/dashboard"><span>BTSA LOGISTICS</span></a></div>
                <ul>
                    <li class="label">Main Focus</li>
                    <li><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>

                    <li class="label">Management</li>
                    @if(auth()->user()->role == 'administrator')
                    <li><a href="/member"><i class="ti-user"></i> User Managements</a></li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid2-alt"></i> Candidate<span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/candidate/managements">Daftar pelamar</a>
                            </li>
                            <li><a href="/candidate/interviewed">Pelamar yang interview</a></li>
                        </ul>
                    </li>
                    <li><a href="/hrd"><i class="ti-layers-alt"></i> Utility Personalia</a></li>
                    <li><a href="/legal"><i class="ti-calendar"></i> Legality Documents</a></li>
                    <li><a href="/jadwal"><i class="ti-calendar"></i> Jadwal Kapal Managements</a></li>
                    <li><a href="/vessel"><i class="ti-rocket"></i> Vessel Management</a></li>
                    @endif
                    @if(auth()->user()->role=='hrd')
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid2-alt"></i> Candidate<span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/candidate/managements">Daftar pelamar</a>
                            </li>
                            <li><a href="/candidate/interviewed">Pelamar yang interview</a></li>
                        </ul>
                    </li>
                    <li><a href="/hrd"><i class="ti-layers-alt"></i> Utility Personalia</a></li>
                    @endif
                    <li><a class="sidebar-sub-toggle"><i class="ti-shine"></i> Quote Reports<span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            @if(auth()->user()->role=='user' || auth()->user()->role=='administrator')
                            <li><a href="/quote-request">Quote request</a></li>
                            @endif
                            @if(auth()->user()->role=='head' || auth()->user()->role=='administrator')
                            <li><a href="/quote-request">Quote request</a></li>
                            @endif
                            @if(auth()->user()->role=='it' || auth()->user()->role=='administrator' ||
                            auth()->user()->role=='umum')
                            <li><a href="/quote-published">Quote published</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-envelope"></i> Issue Reports <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            @if(auth()->user()->role=='user' || auth()->user()->role=='administrator')
                            <li><a href="/queue">Queue</a></li>
                            @endif
                            @if(auth()->user()->role=='it' || auth()->user()->role=='administrator' ||
                            auth()->user()->role=='umum')
                            <li><a href="/itCheck">IT & PU Checked</a></li>
                            <li><a href="/itSolved">IT & PU Solved IR</a></li>
                            @endif
                            @if(auth()->user()->role=='head' || auth()->user()->role=='administrator')
                            <li><a href="/headCheck">Head Checked</a></li>
                            @endif

                        </ul>
                    </li>
                    @if(auth()->user()->role=='legal')
                    <li><a href="/legal"><i class="ti-calendar"></i> Legality Documents</a></li>
                    @endif
                    @if(auth()->user()->role=='member')
                    <li><a href="/jadwal"><i class="ti-calendar"></i> Jadwal Kapal Managements</a></li>
                    @endif
                    @if(auth()->user()->role=='member')
                    <li><a href="/vessel"><i class="ti-rocket"></i> Vessel Management</a></li>
                    @endif
                    <li><a href="/logout"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <ul>
                            <li class="header-icon dib"><span class="user-avatar">{{auth()->user()->nama_lengkap}} <i
                                        class="ti-angle-down f-s-10"></i></span>
                                <div class="drop-down dropdown-profile">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="/member/{{auth()->user()->id}}/edit"><i
                                                        class="ti-settings"></i> <span>Setting</span></a></li>
                                            <li><a href="/logout"><i class="ti-power-off"></i> <span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello <strong>{{auth()->user()->nama_lengkap}}</strong>,</h1>
                                <p class="text-muted">Permission role status is
                                    <strong>{{auth()->user()->role}}.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                <!-- /# row -->
                <section id="main-content">
                    @yield('content')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>©Copyright 2019 - Management Infinity Solutions. - <a
                                        href="https://infinitysolutions.co.id">infinitysolutions.co.id</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    {{-- <script src="{!!asset('js/lib/data-table/dataTables.buttons.min.js')!!}"></script>
        <script src="{!!asset('js/lib/data-table/dataTables.min.js')!!}"></script>
        <script src="{!!asset('js/lib/data-table/datatables-init.js')!!}"></script> --}}
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    <script src="{!!asset('js/lib/jquery.min.js')!!}"></script>
    <script src="{!!asset('js/lib/jquery.nanoscroller.min.js')!!}"></script>
    <!-- nano scroller -->
    <script src="{!!asset('js/lib/menubar/sidebar.js')!!}"></script>
    <script src="{!!asset('js/lib/preloader/pace.min.js')!!}"></script>
    <!-- sidebar -->
    <script src="{!!asset('js/lib/bootstrap.min.js')!!}"></script>

    <!-- bootstrap -->

    <script src="{!!asset('js/lib/circle-progress/circle-progress.min.js')!!}"></script>
    <script src="{!!asset('js/lib/circle-progress/circle-progress-init.js')!!}"></script>

    <script src="{!!asset('js/lib/morris-chart/raphael-min.js')!!}"></script>
    <script src="{!!asset('js/lib/morris-chart/morris.js')!!}"></script>
    <script src="{!!asset('js/lib/morris-chart/morris-init.js')!!}"></script>

    <!--  flot-chart js -->
    <script src="{!!asset('js/lib/flot-chart/jquery.flot.js')!!}"></script>
    <script src="{!!asset('js/lib/flot-chart/jquery.flot.resize.js')!!}"></script>
    <script src="{!!asset('js/lib/flot-chart/flot-chart-init.js')!!}"></script>
    <!-- // flot-chart js -->


    <script src="{!!asset('js/lib/vector-map/jquery.vmap.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/jquery.vmap.min.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/jquery.vmap.sampledata.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.world.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.algeria.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.argentina.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.brazil.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.france.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.germany.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.greece.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.iran.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.iraq.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.russia.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.tunisia.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.europe.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.usa.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('js/lib/vector-map/vector.init.js')!!}"></script>

    <script src="{!!asset('js/lib/weather/jquery.simpleWeather.min.js')!!}"></script>
    <script src="{!!asset('js/lib/weather/weather-init.js')!!}"></script>
    <script src="{!!asset('js/lib/owl-carousel/owl.carousel.min.js')!!}"></script>
    <script src="{!!asset('js/lib/owl-carousel/owl.carousel-init.js')!!}"></script>
    <script src="{!!asset('js/scripts.js')!!}"></script>

    <script type="text/javascript" charset="utf8"
        src="{!!url('https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js')!!}"></script>
    <!-- scripit init-->
    {{-- TINY MCE --}}
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>
