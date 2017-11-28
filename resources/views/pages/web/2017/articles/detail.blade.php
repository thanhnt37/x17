@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Chi Tiết Bài Viết | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
    <div id="fb-root"></div>
    <script>
        // like + share
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=889480487729611';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // send messenger
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1506304622792107';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // comment
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1506304622792107';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // fanpage
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1506304622792107';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer>
        {lang: 'vi'}
    </script>
@stop

@section('content')
    <section id="article-page" class="container">

        @include('pages.web.2017.elements.breadcrumb')

        <div class="row">
            <div class="col-lg-8">
                <article id="article-detail">
                    <h3>{{$article->title}}</h3>

                    @php
                        $bigCategory = isset($article->category->parent->slug) && !empty($article->category->parent->slug) ? $article->category->parent : $article->category;
                    @endphp
                    <p class="publish-date">
                        @php $publishDate = date_format($article->publish_started_at,"d/m/Y"); @endphp
                        <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                        trong <a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->name}}</a>
                        @if( $bigCategory != $article->category )
                            / <a href="{!! action('Web\ArticleController@category', [$article->category->slug]) !!}">{{$article->category->name}}</a>
                        @endif
                    </p>

                    <section class="social-share" style="padding: 7px 0 10px 10px;">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                        </div>
                        <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                        <div class="g-plus" data-action="share"></div>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </section>

                    <img src="http://via.placeholder.com/730x350" alt="{{$article->slug}}" title="{{$article->slug}}" class="cover-image">

                    <p class="descriptions">{!! $article->description !!}</p>

                    <section class="article-content">
                        {!! $article->content !!}
                    </section>

                    <section class="article-footer">
                        <section class="social-share">
                            <h5>Thấy hay thì chia sẻ bạn bè nhé !</h5>
                            <section>
                                <img src="{!! \URLHelper::asset('icon/arrow.png', 'common') !!}" alt="">
                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                                </div>
                                <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                                <div class="g-plus" data-action="share"></div>
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </section>
                        </section>

                        <section class="tags">
                            <h5>Tags: </h5>
                            <ul>
                                @php
                                    $tags = explode(',', $article->keywords);
                                @endphp
                                @foreach( $tags as $tag )
                                    <li>
                                        <a href="/tags/{{str_slug($tag)}}" data-wpel-link="internal">#{{$tag}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </section>

                        <section class="like-fanpage">
                            <img src="{!! \URLHelper::asset('icon/bg_like-fanpage.jpg', 'common') !!}" alt="">
                            <section class="fanpage">
                                <img src="{!! \URLHelper::asset('icon/arrow2.png', 'common') !!}" alt="">
                                <h6>LIKE FANPAGE ĐỂ CẬP NHẬT TIN TỨC<br>CÔNG NGHỆ MỚI MỖI NGÀY</h6>

                                {{-- fb fanpage--}}
                                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="200" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                                </div>
                            </section>
                        </section>
                    </section>

                    <div id="fb-comments" class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>

                    <section class="article-suggests">
                        <h4>CÓ THỂ BẠN QUAN TÂM</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
            <div class="col-lg-4" style="padding: 0;">
                <img class="show-aside" src="{!! \URLHelper::asset('icon/show_aside.png', 'common') !!}" alt="">
                <aside>
                    @include('pages.web.advertises.300x250')

                    @if(  !$article->series_id )
                        <section class="site-index">
                            <h5>INDEX</h5>
                            <ul>
                                @foreach( $article->index as $index )
                                    <li><a href="#{{$index->href}}">{{$index->title}}</a></li>
                                @endforeach
                            </ul>
                        </section>
                    @else
                        <section class="series-article-index">
                            <h5>INDEX</h5>
                            <ul class="root">
                                @foreach( $article->series->articles as $index => $series )
                                    <li @if($series->slug == $article->slug) class="active" @endif >
                                        <i>{{$index + 1}}</i>
                                        <a href="{!! action('Web\ArticleController@detail', [$series->category->slug, $series->slug]) !!}">{{$series->title}}</a>
                                        @if($series->slug == $article->slug)
                                            <ul>
                                                @foreach( $series->index as $index )
                                                    <li><a href="#{{$index->href}}">{{$index->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                    @endif
                </aside>
            </div>
        </div>

    </section>
@stop