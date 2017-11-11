<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    @include('pages.web.2017.layout.meta')
    @yield('meta')

    <!-- Styles CSS -->
    @include('pages.web.2017.layout.styles')
    @yield('styles')
</head>

<body style="height: 3500px">

    @include('pages.web.2017.layout.header')

    @include('pages.web.2017.layout.left_navigation')

    <main>
        @yield('content')
    </main>

    @include('pages.web.2017.layout.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('pages.web.2017.layout.scripts')
    @yield('scripts')

</body>
</html>