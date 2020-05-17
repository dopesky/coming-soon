<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{env('APP_NAME', 'Laravel')}}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>

    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet"/>
    <link href="https://unpkg.com/@dopesky/infiscroll@1.0.0/dist/css/infiscroll.css" rel="stylesheet"/>
    <style>
        .toast-body {
            border-radius: 10px !important;
        }

        .img-md {
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body>
@yield('content')
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="https://kit.fontawesome.com/c04e773a09.js" crossorigin="anonymous"></script>
<script src="{{asset('js/material-kit.min.js?v=2.0.7')}}" type="text/javascript"></script>
<script src="https://unpkg.com/@dopesky/infiscroll@1.0.0/dist/js/infiscroll.js"></script>
@stack('page-script')
</body>
</html>
