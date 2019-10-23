<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>IoT</title>

        <link href="{{asset('libs/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <!-- Toastr style -->
        <link href="{{asset('libs/toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{asset('libs/gritter/jquery.gritter.css')}}" rel="stylesheet">
        <link href="{{asset('libs/range-slider/css/ion.rangeSlider.css')}}" rel="stylesheet">

        <link href="{{asset('libs/animate/animate.css')}}" rel="stylesheet">
        <link href="{{asset('libs/sweetalert2/sweetalert2.css')}}" rel="stylesheet">
        <link href="{{asset('libs/inspinia/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <link href="{{asset('css/iot.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin=""/>

        <style>
            .nav-header .text-muted {
                color: white !important;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            @include('partials.sidebar')

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="index.html#"><i
                                        class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="wrapper p-0" id="app">
                    <base-iot></base-iot>
                </div>


                <div class="footer">
                    <div class="float-right">
                        <strong>Internet of Things</strong>
                    </div>
                    <div>
                        <strong>Ingeniería en Informática</strong> Dachary &copy; 2019
                    </div>
                </div>
            </div>
        </div>


        <!-- Mainly scripts -->
        <script src="{{asset('libs/jquery/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('libs/popper/popper.min.js')}}"></script>
        <script src="{{asset('libs/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('libs/jquery/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('libs/jquery/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('libs/jquery/jquery.knob.min.js')}}"></script>
        <script src="{{asset('libs/range-slider/js/ion.rangeSlider.js')}}"></script>
        <script src="{{asset('libs/inspinia/inspinia.js')}}"></script>
        <script src="{{asset('libs/pace/pace.min.js')}}"></script>
        <script src="{{asset('libs/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('libs/sweetalert2/sweetalert2.all.js')}}"></script>

        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
                integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
                crossorigin=""></script>
        <script>
            $("#temp").knob();
            $(".js-range-slider").ionRangeSlider();
        </script>

        <script src="{{asset('js/iot.js')}}"></script>

        {{--@include('sweetalert::alert')--}}

    </body>
</html>
