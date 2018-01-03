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
                @if( count($featuredArticles) )
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
                                        @php $publishDate = date_format($bigArticle->publish_started_at,"d/m/Y"); @endphp
                                        <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', [$bigArticle->category->slug, $bigArticle->slug]) !!}">
                                        @php $image = $bigArticle->present()->image(560, 390); @endphp
                                        @if(isset($image->url))
                                            <img src="{{$image->url}}" alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}">
                                        @else
                                            <img src="https://placehold.it/560x390?text=xcode.vn" alt="{{$bigArticle->slug}}" title="{{$bigArticle->slug}}"/>
                                        @endif
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
                                                    @php $publishDate = date_format($smallArticle->publish_started_at,"d/m/Y"); @endphp
                                                    <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                                </header>
                                                <a href="{!! action('Web\ArticleController@detail', [$smallArticle->category->slug, $smallArticle->slug]) !!}">
                                                    @php $image = $smallArticle->present()->image(560, 390); @endphp
                                                    @if(isset($image->url))
                                                        <img src="{{$image->url}}" alt="{{$smallArticle->slug}}" title="{{$smallArticle->slug}}">
                                                    @else
                                                        <img src="https://placehold.it/560x390?text=xcode.vn" alt="{{$smallArticle->slug}}" title="{{$smallArticle->slug}}"/>
                                                    @endif
                                                </a>
                                            </article>
                                        </div>
                                        @if( !($index%2) ) </div> @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif

                @if( count($viewedArticles) )
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
                                                        @php $image = $viewedArticle->present()->image(420, 340); @endphp
                                                        @if(isset($image->url))
                                                            <img src="{{$image->url}}" alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}">
                                                        @else
                                                            <img src="https://placehold.it/420x340?text=xcode.vn" alt="{{$viewedArticle->slug}}" title="{{$viewedArticle->slug}}"/>
                                                        @endif
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
                                                        @php $publishDate = date_format($viewedArticle->publish_started_at,"d/m/Y"); @endphp
                                                        <time datetime="{{$publishDate}}">{{$publishDate}}</time>
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
                @endif

                @if( count($featuredSeries) )
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
                                                    <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">{{$series->title}}</a>
                                                </h5>
                                            </header>
                                            <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">
                                                <img src="{{$series->coverImage->url}}" alt="{{$series->slug}}" title="{{$series->slug}}">
                                            </a>
                                        </article>
                                    </div>
                                    @if( ($index%2) == 1 )
                                </div>
                            @endif
                        @endforeach
                    </section>
                @endif
            </section>
        </section>

        <section id="normal-content">
            <section class="container">

                @foreach( $normalArticles as $normalArticle )
                    <article class="normal-article">
                        <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">
                            @php $image = $normalArticle->present()->image(970, 250); @endphp
                            @if(isset($image->url))
                                <img src="{{$image->url}}" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}">
                            @else
                                <img src="https://placehold.it/970x250?text=xcode.vn" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}"/>
                            @endif
                        </a>
                        <section class="normal-article__descriptions">
                            <header>
                                <section class="normal-article__category">
                                    @php
                                        $bigCategory = isset($normalArticle->category->parent->slug) && !empty($normalArticle->category->parent->slug) ? $normalArticle->category->parent : $normalArticle->category;
                                    @endphp
                                    <span style="background: {{$bigCategory->color}};">
                                        <a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->wildcard}}</a>
                                    </span>
                                    <section>
                                        <section>
                                            @if( $bigCategory != $normalArticle->category )
                                                <p><a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->name}}</a></p>
                                                <p><a href="{!! action('Web\ArticleController@category', [$normalArticle->category->slug]) !!}">{{$normalArticle->category->name}}</a></p>
                                            @else
                                                <p><a href="{!! action('Web\ArticleController@category', [$normalArticle->category->slug]) !!}">{{$normalArticle->category->name}}</a></p>
                                                <p>&nbsp;</p>
                                            @endif
                                        </section>
                                    </section>
                                </section>
                                <h4>
                                    <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">{{$normalArticle->title}}</a>
                                </h4>
                            </header>

                            <p>{!! $normalArticle->description !!}</p>

                            <ul class="normal-article__tags">
                                @php
                                    $tags = explode(',', $normalArticle->keywords);
                                @endphp
                                @foreach( $tags as $tag )
                                    <li>
                                        <a href="/tags/{{str_slug($tag)}}" data-wpel-link="internal">#{{$tag}}</a>
                                    </li>
                                @endforeach
                            </ul>

                            <section class="normal-article__counter">
                                <span><i class="fa fa-eye"></i> {{$normalArticle->read}}</span>
                                <span><i class="fa fa-commenting-o"></i> {{$normalArticle->voted}}</span>
                                <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                @php $publishDate = date_format($normalArticle->publish_started_at,"d/m/Y"); @endphp
                                <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                            </section>
                            <hr class="clearfix">
                        </section>
                    </article>
                @endforeach

                <section class="view-more">
                    <button class="btn btn-light">Xem thêm</button>
                </section>
            </section>
        </section>
    </section>
@stop