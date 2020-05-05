<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    @hasSection('title')
        <title>{{config('app.name')}} - @yield('title')</title>
    @else
        <title>{{config('app.name')}}</title>
    @endif

</head>
<body class="pb-4">
@include('master.navbar')
@include('master.navmenu')
{{--@include('master.search')--}}

@hasSection('container-fluid')
    <div class="container-fluid">
@else
    <div class="container">
@endif
        @include('includes.jswarning')
        <div class="mt-4 justify-content-center">
            @yield('content')
        </div>


</div>

</body>
</html>