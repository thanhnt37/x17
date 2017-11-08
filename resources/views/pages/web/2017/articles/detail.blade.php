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
    <section id="featured-content">
        <section class="container">
            <section id="featured-articles">
                <div class="row">
                    <div class="col-lg-6 wrap-featured-articles">
                        <article class="featured-article featured-article-big">
                            <header>
                                <h3>Laravel 5.4 có gì mới </h3>
                                <time datetime="23/09/2017">23/09/2017</time>
                            </header>
                            <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 wrap-featured-articles">
                                <article class="featured-article featured-article-small">
                                    <header>
                                        <h5>Laravel 5.4 có gì mới </h5>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </header>
                                    <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                </article>
                            </div>
                            <div class="col-sm-6 wrap-featured-articles">
                                <article class="featured-article featured-article-small">
                                    <header>
                                        <h5>Laravel 5.4 có gì mới </h5>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </header>
                                    <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 wrap-featured-articles">
                                <article class="featured-article featured-article-small">
                                    <header>
                                        <h5>Laravel 5.4 có gì mới </h5>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </header>
                                    <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                </article>
                            </div>
                            <div class="col-sm-6 wrap-featured-articles">
                                <article class="featured-article featured-article-small">
                                    <header>
                                        <h5>Laravel 5.4 có gì mới </h5>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </header>
                                    <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="newest-articles">
                <h5>BÀI VIẾT MỚI NHẤT</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wrap-newest-articles">
                        <div class="row">
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--long">
                                    <img src="http://via.placeholder.com/420x340" alt="" height="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                    </header>
                                    <footer>
                                        <span>J</span>
                                        <section>
                                            <p>Javascript</p>
                                            <p>NodeJS</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--short">
                                    <img src="http://via.placeholder.com/420x340" alt="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                    </header>
                                    <footer>
                                        <span style="background: #d1ff7f">P</span>
                                        <section>
                                            <p>PHP</p>
                                            <p>Laravel</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wrap-newest-articles">
                        <div class="row">
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--short">
                                    <img src="http://via.placeholder.com/420x340" alt="" height="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc.</p>
                                    </header>
                                    <footer>
                                        <span style="background: #d1ff7f">P</span>
                                        <section>
                                            <p>PHP</p>
                                            <p>Laravel</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--long">
                                    <img src="http://via.placeholder.com/420x340" alt="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                    </header>
                                    <footer>
                                        <span>J</span>
                                        <section>
                                            <p>Javascript</p>
                                            <p>NodeJS</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wrap-newest-articles">
                        <div class="row">
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--long">
                                    <img src="http://via.placeholder.com/420x340" alt="" height="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                    </header>
                                    <footer>
                                        <span>J</span>
                                        <section>
                                            <p>Javascript</p>
                                            <p>NodeJS</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--short">
                                    <img src="http://via.placeholder.com/420x340" alt="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                    </header>
                                    <footer>
                                        <span style="background: #d1ff7f">P</span>
                                        <section>
                                            <p>PHP</p>
                                            <p>Laravel</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wrap-newest-articles">
                        <div class="row">
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--short">
                                    <img src="http://via.placeholder.com/420x340" alt="" height="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc.</p>
                                    </header>
                                    <footer>
                                        <span style="background: #d1ff7f">P</span>
                                        <section>
                                            <p>PHP</p>
                                            <p>Laravel</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-sm-12">
                                <article class="newest-article newest-article--long">
                                    <img src="http://via.placeholder.com/420x340" alt="">
                                    <header>
                                        <h6>Reactive programing là gì ?</h6>
                                        <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                    </header>
                                    <footer>
                                        <span>J</span>
                                        <section>
                                            <p>Javascript</p>
                                            <p>NodeJS</p>
                                        </section>
                                        <time datetime="23/09/2017">23/09/2017</time>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="featured-series">
                <h5>SERIES NỔI BẬT</h5>
                <div class="row">
                    <div class="col-lg-7">
                        <article class="featured-serie">
                            <header>
                                <h5>Series lập trình PHP nâng cao</h5>
                            </header>
                            <img src="http://via.placeholder.com/650x240" alt="">
                        </article>
                    </div>
                    <div class="col-lg-5">
                        <article class="featured-serie">
                            <header>
                                <h5>Series lập trình PHP nâng cao</h5>
                            </header>
                            <img src="http://via.placeholder.com/650x240" alt="">
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <article class="featured-serie">
                            <header>
                                <h5>Series lập trình PHP nâng cao</h5>
                            </header>
                            <img src="http://via.placeholder.com/650x240" alt="">
                        </article>
                    </div>
                    <div class="col-lg-7">
                        <article class="featured-serie">
                            <header>
                                <h5>Series lập trình PHP nâng cao</h5>
                            </header>
                            <img src="http://via.placeholder.com/650x240" alt="">
                        </article>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <section id="normal-content">
        <section class="container">
            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <article class="normal-article">
                <img src="http://via.placeholder.com/970x250" alt="">
                <section class="normal-article__descriptions">
                    <header>
                        <section class="normal-article__category">
                            <span>J</span>
                            <section>
                                <p>Javascript</p>
                                <p>NodeJS</p>
                            </section>
                        </section>
                        <h4>Reactive Programming có gì hay ?</h4>
                    </header>

                    <p>Khả năng nhận diện khuôn mặt Face ID hoạt động tốt kể cả trong ngăn tủ tối om, hai anh em sinh đôi thử hóa trang cũng không thể đánh lừa được hay màn hình OLED của Apple có cách thể hiện giống LCD, do Samsung chế tạo dưới những yêu cầu riêng của Apple, được Apple tinh chỉnh hay trình điều khiển màn hình riêng của Apple là những thông tin thú vị mà chúng ta biết dựa vào những bài đánh giá iPhone X đầu tiên.</p>

                    <ul class="normal-article__tags">
                        <li>
                            <a href="#" data-wpel-link="internal">#javascript</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#reactive</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#redux</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#RxJS</a>
                        </li>
                        <li>
                            <a href="#" data-wpel-link="internal">#laravel</a>
                        </li>
                    </ul>

                    <section class="normal-article__counter">
                        <span><i class="fa fa-eye"></i> 254</span>
                        <span><i class="fa fa-commenting-o"></i> 22</span>
                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                        <time datetime="23/09/2017">23/09/2017</time>
                    </section>
                    <hr class="clearfix">
                </section>
            </article>

            <section class="view-more">
                <button class="btn btn-light">Xem thêm</button>
            </section>
        </section>
    </section>
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