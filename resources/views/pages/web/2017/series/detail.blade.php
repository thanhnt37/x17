@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Danh Sách Bài Viết | XCODE.VN</title>
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
    <section id="series-page">
        <section class="wrap-content">
            <section class="container">

                @include('pages.web.2017.elements.breadcrumb')

                <section id="series-info">
                    <section class="series-title">
                        <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">
                            <img src="https://s3.envato.com/files/145553660/970x250.jpg" alt="{{$series->slug}}" title="{{$series->slug}}">
                        </a>
                        <header>
                            <section class="category">
                                @php
                                    $bigCategory = isset($series->category->parent->slug) && !empty($series->category->parent->slug) ? $series->category->parent : $series->category;
                                @endphp
                                <span style="background: {{$bigCategory->color}};">
                                    <a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->wildcard}}</a>
                                </span>

                                <section>
                                    @if( $bigCategory != $series->category )
                                        <p><a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->name}}</a></p>
                                        <p><a href="{!! action('Web\ArticleController@category', [$series->category->slug]) !!}">{{$series->category->name}}</a></p>
                                    @else
                                        <p><a href="{!! action('Web\ArticleController@category', [$series->category->slug]) !!}">{{$series->category->name}}</a></p>
                                        <p>&nbsp;</p>
                                    @endif
                                </section>
                            </section>

                            <section class="title">
                                <h4>
                                    <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">{{$series->title}}</a>
                                </h4>

                                <section class="social-share">
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                                    </div>
                                    <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                                    <div class="g-plus" data-action="share"></div>
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </section>
                            </section>
                        </header>
                    </section>

                    <section class="series-descriptions">
                        <section class="description">
                            <p>{!! $series->description !!}</p>
                        </section>
                    </section>
                </section>

                <section id="series-articles">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                @foreach( $articles as $article )
                                    <article>
                                        <a href="{!! action('Web\ArticleController@detail', [$article->category->slug, $article->slug]) !!}">
                                            <img src="http://via.placeholder.com/560x390" alt="{{$article->slug}}" title="{{$article->slug}}">
                                        </a>
                                        <section class="details">
                                            <h5 class="title">
                                                <a href="{!! action('Web\ArticleController@detail', [$article->category->slug, $article->slug]) !!}">{{$article->title}}</a>
                                            </h5>
                                            <p class="descriptions">{!! substr($article->description, 0, 250) !!}...</p>

                                            <section class="counter">
                                                <span><i class="fa fa-eye"></i> {{$article->read}}</span>
                                                <span><i class="fa fa-commenting-o"></i> {{$article->voted}}</span>
                                                <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                                @php $publishDate = date_format($article->publish_started_at,"d/m/Y"); @endphp
                                                <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                            </section>
                                        </section>
                                    </article>
                                @endforeach

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
        </section>
    </section>
@stop