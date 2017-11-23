@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Blog Chia Sẻ - Hướng Dẫn Lập Trình | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <section id="home-page">
        <section id="featured-content">
            <section class="container">
                <section id="featured-articles">
                    <div class="row">
                        <div class="col-lg-6 wrap-featured-articles">
                            <article class="featured-article featured-article-big">
                                <header>
                                    <h3><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h3>
                                    <time datetime="23/09/2017"><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">23/09/2017</a></time>
                                </header>
                                <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                    <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-6 wrap-featured-articles">
                                    <article class="featured-article featured-article-small">
                                        <header>
                                            <h5><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                            <time datetime="23/09/2017"><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">23/09/2017</a></time>
                                        </header>
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                        </a>
                                    </article>
                                </div>
                                <div class="col-sm-6 wrap-featured-articles">
                                    <article class="featured-article featured-article-small">
                                        <header>
                                            <h5><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                            <time datetime="23/09/2017"><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">23/09/2017</a></time>
                                        </header>
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                        </a>
                                    </article>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 wrap-featured-articles">
                                    <article class="featured-article featured-article-small">
                                        <header>
                                            <h5><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                            <time datetime="23/09/2017"><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">23/09/2017</a></time>
                                        </header>
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                        </a>
                                    </article>
                                </div>
                                <div class="col-sm-6 wrap-featured-articles">
                                    <article class="featured-article featured-article-small">
                                        <header>
                                            <h5><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                            <time datetime="23/09/2017"><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">23/09/2017</a></time>
                                        </header>
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                        </a>
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
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="" height="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                        </header>
                                        <footer>
                                            <span>J</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                            </section>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-sm-12">
                                    <article class="newest-article newest-article--short">
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                        </header>
                                        <footer>
                                            <span style="background: #d1ff7f">P</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['php']) !!}">PHP</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['laravel']) !!}">Laravel</a></p>
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
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                        </header>
                                        <footer>
                                            <span style="background: #d1ff7f">P</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['php']) !!}">PHP</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['laravel']) !!}">Laravel</a></p>
                                            </section>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-sm-12">
                                    <article class="newest-article newest-article--long">
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="" height="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                        </header>
                                        <footer>
                                            <span>J</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
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
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="" height="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                        </header>
                                        <footer>
                                            <span>J</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                            </section>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-sm-12">
                                    <article class="newest-article newest-article--short">
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                        </header>
                                        <footer>
                                            <span style="background: #d1ff7f">P</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['php']) !!}">PHP</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['laravel']) !!}">Laravel</a></p>
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
                                        <a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['laravel', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc</p>
                                        </header>
                                        <footer>
                                            <span style="background: #d1ff7f">P</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['php']) !!}">PHP</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['laravel']) !!}">Laravel</a></p>
                                            </section>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-sm-12">
                                    <article class="newest-article newest-article--long">
                                        <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                                            <img src="http://via.placeholder.com/420x340" alt="" height="">
                                        </a>
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive programing là gì ?</a></h6>
                                            <p>Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. Cộng hòa xã hội chủ nghĩa việt nam, độc lập tự do hạnh phúc. </p>
                                        </header>
                                        <footer>
                                            <span>J</span>
                                            <section>
                                                <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
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
                                    <h5>
                                        <a href="#">Series lập trình PHP nâng cao</a>
                                    </h5>
                                </header>
                                <a href="#">
                                    <img src="http://via.placeholder.com/650x240" alt="">
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-5">
                            <article class="featured-serie">
                                <header>
                                    <h5>
                                        <a href="#">Series lập trình PHP nâng cao</a>
                                    </h5>
                                </header>
                                <a href="#">
                                    <img src="http://via.placeholder.com/650x240" alt="">
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <article class="featured-serie">
                                <header>
                                    <h5>
                                        <a href="#">Series lập trình PHP nâng cao</a>
                                    </h5>
                                </header>
                                <a href="#">
                                    <img src="http://via.placeholder.com/650x240" alt="">
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-7">
                            <article class="featured-serie">
                                <header>
                                    <h5>
                                        <a href="#">Series lập trình PHP nâng cao</a>
                                    </h5>
                                </header>
                                <a href="#">
                                    <img src="http://via.placeholder.com/650x240" alt="">
                                </a>
                            </article>
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <section id="normal-content">
            <section class="container">
                <article class="normal-article">
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
                    <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">
                        <img src="http://via.placeholder.com/970x250" alt="">
                    </a>
                    <section class="normal-article__descriptions">
                        <header>
                            <section class="normal-article__category">
                                <span>J</span>
                                <section>
                                    <section>
                                        <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                    </section>
                                </section>
                            </section>
                            <h4>
                                <a href="{!! action('Web\ArticleController@detail', ['nodejs', 'article-slug']) !!}">Reactive Programming có gì hay ?</a>
                            </h4>
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
    </section>
@stop