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
                        @php
                            $bigArticle = $featuredArticles[0];
                            unset($featuredArticles[0]);
                        @endphp
                        <div class="col-lg-6 wrap-featured-articles">
                            <article class="featured-article featured-article-big">
                                <header>
                                    <h3><a href="{!! action('Web\ArticleController@detail', [$bigArticle->category->slug, $bigArticle->slug]) !!}">{{$bigArticle->title}}</a></h3>
                                    <time datetime="23/09/2017">23/09/2017</time>
                                </header>
                                <a href="{!! action('Web\ArticleController@detail', [$bigArticle->category->slug, $bigArticle->slug]) !!}">
                                    <img src="http://via.placeholder.com/560x390" alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}">
                                </a>
                            </article>
                        </div>

                        <div class="col-lg-6">
                            @foreach($featuredArticles as $index => $smallArticle)
                                @if( $index%2 ) <div class="row"> @endif
                                    <div class="col-sm-6 wrap-featured-articles">
                                        <article class="featured-article featured-article-small">
                                            <header>
                                                <h5><a href="{!! action('Web\ArticleController@detail', [$smallArticle->category->slug, $smallArticle->slug]) !!}">{{$smallArticle->title}}</a></h5>
                                                <time datetime="23/09/2017">23/09/2017</time>
                                            </header>
                                            <a href="{!! action('Web\ArticleController@detail', [$smallArticle->category->slug, $smallArticle->slug]) !!}">
                                                <img src="http://via.placeholder.com/560x390" alt="{{$smallArticle->slug}}" title="{{$smallArticle->slug}}">
                                            </a>
                                        </article>
                                    </div>
                                @if( !($index%2) ) </div> @endif
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="newest-articles">
                    <h5>BÀI VIẾT MỚI NHẤT</h5>
                    <div class="row">
                        @foreach( $viewedArticles as $index => $viewedArticle )
                            @if( ($index%2) == 0 )
                                <div class="col-lg-3 col-md-6 wrap-newest-articles">
                                    <div class="row">
                            @endif
                                        <div class="col-sm-12">
                                            <article class="newest-article @if( (($index%4) == 0) || (($index%4) == 3) ) newest-article--long @else newest-article--short @endif">
                                                <a href="{!! action('Web\ArticleController@detail', [$viewedArticle->category->slug, $viewedArticle->slug]) !!}">
                                                    <img src="http://via.placeholder.com/420x340" alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}">
                                                </a>
                                                <header>
                                                    <h6><a href="{!! action('Web\ArticleController@detail', [$viewedArticle->category->slug, $viewedArticle->slug]) !!}">{{$viewedArticle->title}}</a></h6>
                                                    <p>{{substr($viewedArticle->description, 0, 130)}}...</p>
                                                </header>
                                                <footer>
                                                    @php
                                                        $bigCategory = isset($viewedArticle->category->parent->slug) && !empty($viewedArticle->category->parent->slug) ? $viewedArticle->category->parent : $viewedArticle->category;
                                                    @endphp
                                                    <span style="background: {{$bigCategory->color}};">
                                                        <a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->wildcard}}</a>
                                                    </span>
                                                    <section>
                                                        @if( $bigCategory != $viewedArticle->category )
                                                            <p><a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->name}}</a></p>
                                                            <p><a href="{!! action('Web\ArticleController@category', [$viewedArticle->category->slug]) !!}">{{$viewedArticle->category->name}}</a></p>
                                                        @else
                                                            <p><a href="{!! action('Web\ArticleController@category', [$viewedArticle->category->slug]) !!}">{{$viewedArticle->category->name}}</a></p>
                                                            <p>&nbsp;</p>
                                                        @endif
                                                    </section>
                                                    <time datetime="23/09/2017">23/09/2017</time>
                                                </footer>
                                            </article>
                                        </div>
                            @if( ($index%2) == 1 )
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>

                <section id="featured-series">
                    <h5>SERIES NỔI BẬT</h5>
                    @foreach( $featuredSeries as $index => $series )
                        @if( ($index%2) == 0 )
                            <div class="row">
                        @endif
                                <div class="@if( (($index%4) == 0) || ($index%4) == 3 ) col-lg-7 @else col-lg-5 @endif">
                                    <article class="featured-serie">
                                        <header>
                                            <h5>
                                                <a href="#">{{$series->title}}</a>
                                            </h5>
                                        </header>
                                        <a href="#">
                                            <img src="{{$series->coverImage->url}}" alt="{{$series->slug}}" title="{{$series->slug}}">
                                        </a>
                                    </article>
                                </div>
                        @if( ($index%2) == 1 )
                            </div>
                        @endif
                    @endforeach
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