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

        <section id="normal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <article>
                            <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                <img src="http://via.placeholder.com/560x390" alt="">
                            </a>
                            <section class="details">
                                <p class="category">
                                    <a href="/jquery-ajax">JQuery/Ajax</a>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </p>
                                <h5 class="title">
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                        Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                    </a>
                                </h5>
                                <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                <section class="counter">
                                    <span><i class="fa fa-eye"></i> 254</span>
                                    <span><i class="fa fa-commenting-o"></i> 22</span>
                                    <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </section>
                            </section>
                        </article>

                        <section class="view-more">
                            <button class="btn btn-light">Xem thêm</button>
                        </section>
                    </div>

                    <div class="col-lg-4">
                        <hr class="hr-top">
                        <h6>Quảng Cáo</h6>
                        
                        @include('pages.web.advertises.300x250')
                        @include('pages.web.advertises.300x600')
                        @include('pages.web.advertises.300x600')
                        @include('pages.web.advertises.300x600')
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop