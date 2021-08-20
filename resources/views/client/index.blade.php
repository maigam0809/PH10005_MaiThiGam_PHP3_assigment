<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
    <!-- slider sick -->
    <link rel="stylesheet" href="frontend/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/owlcarousel/assets/owl.theme.default.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="frontend/owlcarousel/owl.carousel.min.js"></script>
    <!-- end slider sick -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="frontend/font/awesome/css/all.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="frontend/css/nouislider.css">
    <link href="frontend/css/style4.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/css/setting.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    {{-- bắt đầu header --}}
    {{-- @auth --}}
    @include('client/layout/header')
    {{-- kết thúc header --}}
    {{-- @endauth --}}
    <!-- start menu -->
    @include('client/layout/menu')
    <!-- end menu -->

    {{-- start content --}}
    @yield('contents')
    <!-- end content-->

    <!-- bắt đầu footer -->
    @include('client/layout/footer')

    {{-- footer --}}
    <!-- stop footer -->


    <script type="text/javascript" src="frontend/js/slider_sick.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="frontend/js/hidden-menu.js"></script>
</body>

</html>
