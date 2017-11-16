@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Danh Sách Bài Viết | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <section id="small-category-page">
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

                <section id="main-content">
                    <div class="row">
                        <div id="left-content" class="col-lg-8">
                            <div id="slides-show" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slides-show" data-slide-to="0" class="active"></li>
                                    <li data-target="#slides-show" data-slide-to="1"></li>
                                    <li data-target="#slides-show" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="http://via.placeholder.com/730x350" alt="First slide" style="height: 450px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Cộng hòa xã hội chủ nghĩ Việt Nam</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- list articles --}}
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

                        <div id="right-content" class="col-lg-4">
                            <section class="subscribe-form-2">
                                <header>
                                    <h3>ĐĂNG KÝ EMAIL</h3>
                                    <p>Để cập nhật thêm nhiều tin tức công nghệ mới mỗi ngày</p>
                                    <form action="#">
                                        <input type="text" placeholder="Email của bạn" class="form-control">
                                        <span></span>
                                    </form>
                                </header>
                                <img src="{!! \URLHelper::asset('icon/bg_subscribe-form.jpg', 'common') !!}" alt="">
                            </section>

                            @include('pages.web.advertises.300x600')
                            @include('pages.web.advertises.300x600')
                            @include('pages.web.advertises.300x600')
                            @include('pages.web.advertises.300x600')
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </section>
@stop