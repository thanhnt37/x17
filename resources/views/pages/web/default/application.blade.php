<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config('site.name', ''))</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('pages.web.default.metadata')
    @include('pages.web.default.styles')
    @section('styles')
    @show
    <meta name="csrf-token" content="{!! csrf_token() !!}">
</head>

<body class="{!! isset($bodyClasses) ? $bodyClasses : '' !!}">
    @if( isset($noFrame) && $noFrame == true )
        @yield('content')
    @else
        @include('pages.web.default.frame')
    @endif

    @include('pages.web.default.scripts')
    @section('scripts')
    @show
</body>
</html>
