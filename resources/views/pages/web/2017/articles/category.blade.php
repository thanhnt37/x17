@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Danh Sách Bài Viết | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <section id="category-page">
        <section class="wrap-content">
            <section class="container">
                <section id="breadcrumb">
                    <header>
                        <a href="/javascript"><span>J</span></a>
                        <h2><a href="/javascript">Javascript</a></h2>
                        <ul>
                            <li><a href="jquery-ajax">JQuery/Ajax</a></li>
                            <li class="active"><a href="nodejs">NodeJS</a></li>
                            <li><a href="react-native">Reach Native</a></li>
                            <li><a href="angular">Angular</a></li>
                        </ul>
                    </header>
                    <img src="http://via.placeholder.com/730x95" alt="">
                </section>

                <section id="featured-content">
                    <div class="row">
                        <div class="col-lg-4 order-2 newest-articles">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <a href="/jquery-ajax">
                                                <img src="http://via.placeholder.com/970x250" alt="">
                                            </a>
                                            <figcaption>JQuery/Ajax</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ? Có gì hay ho không mà lắm thằng học thế </a>
                                        </h5>
                                    </article>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <img src="http://via.placeholder.com/970x250" alt="">
                                            <figcaption>React Native</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ?</a>
                                        </h5>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <a href="/jquery-ajax">
                                                <img src="http://via.placeholder.com/970x250" alt="">
                                            </a>
                                            <figcaption>JQuery/Ajax</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ? Có gì hay ho không mà lắm thằng học thế </a>
                                        </h5>
                                    </article>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <img src="http://via.placeholder.com/970x250" alt="">
                                            <figcaption>React Native</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ?</a>
                                        </h5>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <a href="/jquery-ajax">
                                                <img src="http://via.placeholder.com/970x250" alt="">
                                            </a>
                                            <figcaption>JQuery/Ajax</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ? Có gì hay ho không mà lắm thằng học thế </a>
                                        </h5>
                                    </article>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <article>
                                        <figure>
                                            <img src="http://via.placeholder.com/970x250" alt="">
                                            <figcaption>React Native</figcaption>
                                        </figure>
                                        <h5>
                                            <a href="http://localhost:8000/category/article-slug">Reactive programing là gì ?</a>
                                        </h5>
                                    </article>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 order-3 hot-articles">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <article class="big-article">
                                        <header>
                                            <h6>Javascript</h6>
                                            <h3>Tương lai nào cho Lập trình front-end</h3>
                                        </header>
                                        <img src="http://via.placeholder.com/300x500" alt="">
                                    </article>
                                </div>
                                <div class="col-lg-12" >
                                    <article class="medium-article">
                                        <header>
                                            <h6>Javascript</h6>
                                            <h4>Tương lai nào cho Lập trình front-end</h4>
                                        </header>
                                        <img src="http://via.placeholder.com/420x340" alt="">
                                    </article>
                                </div>
                                <div class="col-lg-12" >
                                    <article class="medium-article">
                                        <header>
                                            <h6>Javascript</h6>
                                            <h4>Tương lai nào cho Lập trình front-end</h4>
                                        </header>
                                        <img src="http://via.placeholder.com/420x340" alt="">
                                    </article>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 order-4 series-article" >
                            <div class="row">
                                <div class="col-lg-12" >
                                    {{--<h3>SERIES NỔI BẬT</h3>--}}
                                    <article>
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                        <section class="info">
                                            <p class="category">
                                                <a href="/jquery-ajax">JQuery/Ajax</a>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </p>
                                            <h6>Cái gì cũng phải từ từ, từ từ thì khoai mới nhừ</h6>
                                        </section>
                                    </article>
                                    <article>
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                        <section class="info">
                                            <p class="category">
                                                <a href="/jquery-ajax">JQuery/Ajax</a>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </p>
                                            <h6>Cái gì cũng phải từ từ, từ từ thì khoai mới nhừ</h6>
                                        </section>
                                    </article>
                                    <article>
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                        <section class="info">
                                            <p class="category">
                                                <a href="/jquery-ajax">JQuery/Ajax</a>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </p>
                                            <h6>Cái gì cũng phải từ từ, từ từ thì khoai mới nhừ</h6>
                                        </section>
                                    </article>
                                    <article>
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                        <section class="info">
                                            <p class="category">
                                                <a href="/jquery-ajax">JQuery/Ajax</a>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </p>
                                            <h6>Cái gì cũng phải từ từ, từ từ thì khoai mới nhừ</h6>
                                        </section>
                                    </article>
                                    <article>
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                        <section class="info">
                                            <p class="category">
                                                <a href="/jquery-ajax">JQuery/Ajax</a>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </p>
                                            <h6>Cái gì cũng phải từ từ, từ từ thì khoai mới nhừ</h6>
                                        </section>
                                    </article>
                                </div>
                                <div class="col-lg-12" >
                                    @include('pages.web.advertises.300x600')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <section id="normal-content"></section>
    </section>
@stop