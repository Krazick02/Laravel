<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon-->
    <!-- estilos-->
</head>
<body>
    <!-- header-->
    <header>
        <h1>Crazy Courses</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('cursos.index')}}">Courses</a></li>
                <li><a href="{{route('us')}}">Us</a></li>
            </ul>
        </nav>
    </header>
    <!-- nav-->
    @yield('content')
    <!-- footer-->
    <!-- script-->

</body>
</html>
