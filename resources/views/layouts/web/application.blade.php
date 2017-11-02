<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config('site.name', ''))</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.web.metadata')
    @include('layouts.web.styles')
    @section('styles')
    @show
    <meta name="csrf-token" content="{!! csrf_token() !!}">
</head>
<body class="{!! isset($bodyClasses) ? $bodyClasses : '' !!}">
@if( isset($noFrame) && $noFrame == true )
@yield('content')
@else
@include('layouts.web.frame')
@endif
@include('layouts.web.scripts')
@section('scripts')
@show
</body>
</html>
