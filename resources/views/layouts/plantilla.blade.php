<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon-->
    <!-- estilos-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-">
    <div class="container">

        <!-- header-->
        <!-- nav-->
        @include('layouts.partials.header')
        @yield('content')
        <!-- footer-->
        @include('layouts.partials.footer')
        <!-- script-->

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
