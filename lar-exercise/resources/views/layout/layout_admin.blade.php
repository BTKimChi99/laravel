<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <div class="wrapper">
        @include('admin\header')
        @yield('content')
        @include('admin\footer')
    </div>
    @include('admin\script')
</body>
</html>

