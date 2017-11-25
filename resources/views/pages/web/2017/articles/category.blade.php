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

                @include('pages.web.2017.elements.breadcrumb')

                <section id="featured-content">
                    <div class="row">
                        <div class="col-lg-4 order-2 newest-articles">
                            @foreach( $viewedArticles as $index => $viewedArticle )
                                @if( ($index%2) == 0 ) <div class="row"> @endif
                                    <div class="col-lg-12 col-md-6">
                                        <article>
                                            <figure>
                                                <a href="{!! action('Web\ArticleController@detail', [$viewedArticle->category->slug, $viewedArticle->slug]) !!}">
                                                    <img src="http://via.placeholder.com/970x250"  alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}">
                                                </a>
                                                <figcaption>
                                                    <a href="{!! action('Web\ArticleController@category', [$viewedArticle->category->slug]) !!}">{{$viewedArticle->category->name}}</a>
                                                </figcaption>
                                            </figure>
                                            <h5>
                                                <a href="{!! action('Web\ArticleController@detail', [$viewedArticle->category->slug, $viewedArticle->slug]) !!}">{{$viewedArticle->title}}</a>
                                            </h5>
                                        </article>
                                    </div>
                                @if( ($index%2) == 1 ) </div> @endif
                            @endforeach
                        </div>

                        <div class="col-lg-4 order-3 hot-articles">
                            <div class="row">
                                @php
                                    $bigArticle = $featuredArticles[0];
                                    unset($featuredArticles[0]);
                                @endphp
                                <div class="col-lg-12" >
                                    <article class="big-article">
                                        <header>
                                            <h6><a href="{!! action('Web\ArticleController@category', [$bigArticle->category->slug]) !!}">{{$bigArticle->category->name}}</a></h6>
                                            <h3>
                                                <a href="{!! action('Web\ArticleController@detail', [$bigArticle->category->slug, $bigArticle->slug]) !!}">{{$bigArticle->title}}</a>
                                            </h3>
                                        </header>
                                        <a href="{!! action('Web\ArticleController@detail', [$bigArticle->category->slug, $bigArticle->slug]) !!}">
                                            <img src="http://via.placeholder.com/300x500"  alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}">
                                        </a>
                                    </article>
                                </div>

                                @foreach( $featuredArticles as $featuredArticle )
                                    <div class="col-lg-12" >
                                        <article class="medium-article">
                                            <header>
                                                <h6><a href="{!! action('Web\ArticleController@category', [$featuredArticle->category->slug]) !!}">{{$featuredArticle->category->name}}</a></h6>
                                                <h4>
                                                    <a href="{!! action('Web\ArticleController@detail', [$featuredArticle->category->slug, $featuredArticle->slug]) !!}">{{$featuredArticle->title}}</a>
                                                </h4>
                                            </header>
                                            <a href="{!! action('Web\ArticleController@detail', [$featuredArticle->category->slug, $featuredArticle->slug]) !!}">
                                                <img src="http://via.placeholder.com/420x340"  alt="{{$featuredArticle->slug}}" title="{{$featuredArticle->slug}}">
                                            </a>
                                        </article>
                                    </div>
                                @endforeach
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
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