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
                                                    @php $image = $viewedArticle->present()->image(970, 250); @endphp
                                                    @if(isset($image->url))
                                                        <img src="{{$image->url}}"  alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}">
                                                    @else
                                                        <img src="https://placehold.it/970x250?text=xcode.vn" alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}"/>
                                                    @endif
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
                                @if( count($featuredArticles) )
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
                                                @php $image = $bigArticle->present()->image(300, 500); @endphp
                                                @if(isset($image->url))
                                                    <img src="{{$image->url}}"  alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}">
                                                @else
                                                    <img src="https://placehold.it/300x500?text=xcode.vn" alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}"/>
                                                @endif
                                            </a>
                                        </article>
                                    </div>
                                @endif

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
                                                @php $image = $featuredArticle->present()->image(420, 340); @endphp
                                                @if(isset($image->url))
                                                    <img src="{{$image->url}}"  alt="{{$featuredArticle->slug}}" title="{{$featuredArticle->slug}}">
                                                @else
                                                    <img src="https://placehold.it/420x340?text=xcode.vn" alt="{{$featuredArticle->slug}}" title="{{$featuredArticle->slug}}"/>
                                                @endif
                                            </a>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-4 order-4 series-article" >
                            <div class="row">
                                <div class="col-lg-12" >
                                    @foreach( $seriesArticles as $seriesArticle )
                                        <article>
                                            <a href="{!! action('Web\ArticleController@detail', [$seriesArticle->category->slug, $seriesArticle->slug]) !!}">
                                                <img src="http://via.placeholder.com/100x100" alt="{{$seriesArticle->slug}}" title="{{$seriesArticle->slug}}">
                                            </a>
                                            <section class="info">
                                                <p class="category">
                                                    <a href="{!! action('Web\ArticleController@category', [$seriesArticle->category->slug]) !!}">{{$seriesArticle->category->name}}</a>
                                                    @php $publishDate = date_format($seriesArticle->publish_started_at,"d/m/Y"); @endphp
                                                    <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                                </p>
                                                <h6>
                                                    <a href="{!! action('Web\ArticleController@detail', [$seriesArticle->category->slug, $seriesArticle->slug]) !!}">{{$seriesArticle->title}}</a>
                                                </h6>
                                            </section>
                                        </article>
                                    @endforeach
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
                        @foreach( $normalArticles as $normalArticle )
                            <article>
                                <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">
                                    @php $image = $normalArticle->present()->image(560, 390); @endphp
                                    @if(isset($image->url))
                                        <img src="{{$image->url}}" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}">
                                    @else
                                        <img src="https://placehold.it/560x390?text=xcode.vn" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}"/>
                                    @endif
                                </a>
                                <section class="details">
                                    <p class="category">
                                        <a href="{!! action('Web\ArticleController@category', [$normalArticle->category->slug]) !!}">{{$normalArticle->category->name}}</a>
                                        @php $publishDate = date_format($normalArticle->publish_started_at,"d/m/Y"); @endphp
                                        <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                    </p>
                                    <h5 class="title">
                                        <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">{{$normalArticle->title}}</a>
                                    </h5>
                                    <p class="descriptions">{!! substr($normalArticle->description, 0, 250) !!}...</p>

                                    <section class="counter">
                                        <span><i class="fa fa-eye"></i> {{$normalArticle->read}}</span>
                                        <span><i class="fa fa-commenting-o"></i> {{$normalArticle->voted}}</span>
                                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                        @php $publishDate = date_format($normalArticle->publish_started_at,"d/m/Y"); @endphp
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
@stop