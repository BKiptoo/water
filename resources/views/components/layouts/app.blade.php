<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="#">
    <meta name="keywords" content="#">

    <!-- Title Page-->
    <title>Water</title>
    <link href="{{asset('assets/logos/logos.jpg')}}" rel="icon">
    <link href="{{asset('assets/logos/logos.jpg')}}" rel="apple-touch-icon">

    <!-- Font faces CSS-->
    <link href="{{asset('../Assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('../Assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('../Assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('../Assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('../Assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <livewire:inc.header/>
    <livewire:inc.header-mobile/>
    <livewire:inc.sidebar/>

    {{$slot}}

</div>

<!-- Jquery JS-->
<script src="{{asset('../Assets/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('../Assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('../Assets/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('../Assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('../Assets/vendor/select2/select2.min.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('../Assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
