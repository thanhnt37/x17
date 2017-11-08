<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! \URLHelper::asset('css/styles.css', 'web/2017') !!}">
    <style>
    </style>
</head>

<body style="height: 3500px">
<header class="header container">
    <div class="row">
        <div class="col-lg-4 header-logo">
            <img src="{!! \URLHelper::asset('logo/logo.png', 'common') !!}" alt="xcode.vn" class="">
        </div>
        <div class="col-lg-8 header-banner">
            <img src="http://via.placeholder.com/728x90" alt="xcode.vn" class="">
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light">
    <button id="menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/">XCODE.VN</a>

    <span id="search-icon-mobile">
        <i class="fa fa-search" aria-hidden="true"></i>
    </span>

    <section class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Javascript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Databases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Git</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Server</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Others</a>
                </li>
            </ul>

            <section id="search-box-desktop">
                <form class="form-inline my-2 my-lg-0">
                    <label for="search-input-desktop">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                    <input id="search-input-desktop" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm gì nào" aria-label="Search">
                </form>
            </section>
        </div>
    </section>
</nav>

<section id="search-box-mobile" class="hidden">
    <form class="form-inline my-2 my-lg-0">
        <label for="search-input-mobile">
            <i class="fa fa-search" aria-hidden="true"></i>
        </label>
        <input id="search-input-mobile" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm gì nào" aria-label="Search">
    </form>
</section>

<section class="wrap-left-navigation">
</section>
<section id="left-navigation">
    <div class="user-profile">
        <img id="user-avatar" src="http://via.placeholder.com/200x200" alt="">
        <label for="user-avatar">Nguyễn Tất Thành</label>
    </div>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">
                PHP
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Javascript
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Databases
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Git
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">
                Server
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                SEO
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Social
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                About me
            </a>
        </li>
    </ul>
</section>

<main>
    <h1>Article by Category</h1>
</main>

<section id="subscribe-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <img src="{!! \URLHelper::asset('logo/logo-icon-black.png', 'common') !!}" alt="xcode.vn" class="">
                <section>
                    <h4>NHẬN THÔNG BÁO VỀ BÀI VIẾT MỚI</h4>
                    <p>Đăng ký ngay bây giờ để nhận được thông báo về những bài viết mới nhất của mình. Còn rất nhiều chủ đề và bài viết hay sẽ được cập nhật trong thời gian tới.</p>
                </section>
            </div>
            <div class="col-lg-5">
                <h4>NHẬP EMAIL CỦA BẠN</h4>
                <form action="#">
                    <input type="text" placeholder="Enter here your email">
                    <span></span>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="text-center">
    <img src="{!! \URLHelper::asset('logo/logo-white.png', 'common') !!}" alt="xcode.vn" class="">
    <hr>
    <p>Copyright 2017 By <a href="http://xcode.vn/">xcode.vn</a> All Rights Reverved</p>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{!! \URLHelper::asset('js/script.js', 'web/2017') !!}"></script>
</body>
</html>