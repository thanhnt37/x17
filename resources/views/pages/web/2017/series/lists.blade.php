@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Danh Sách Series Bài Viết | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <section id="lists-series">
        <section class="wrap-content">
            <section class="container">

                @include('pages.web.2017.elements.breadcrumb')

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="title">DANH SÁCH SERIES BÀI VIẾT, HƯỚNG DẪN</h5>

                        @foreach( $lists as $series )
                            <article class="normal-article">
                                <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">
                                    <img src="http://via.placeholder.com/970x250" alt="{{$series->slug}}" title="{{$series->slug}}">
                                </a>
                                <section class="normal-article__descriptions">
                                    <header>
                                        <section class="normal-article__category">
                                            @php
                                                $bigCategory = isset($series->category->parent->slug) && !empty($series->category->parent->slug) ? $series->category->parent : $series->category;
                                            @endphp
                                            <span style="background: {{$bigCategory->color}};">
                                        <a href="{!! action('Web\ArticleController@category', [$bigCategory->slug]) !!}">{{$bigCategory->wildcard}}</a>
                                    </span>
                                            <section>
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
                                        </section>
                                        <h4>
                                            <a href="{!! action('Web\SeriesController@detail', [$series->category->slug, $series->slug]) !!}">{{$series->title}}</a>
                                        </h4>
                                    </header>

                                    <p>{!! $series->description !!}</p>

                                    <ul class="normal-article__tags">
                                        @php
                                        $tags = explode(',', $series->keywords);
                                        @endphp
                                        @foreach( $tags as $tag )
                                            <li>
                                                <a href="/tags/{{str_slug($tag)}}" data-wpel-link="internal">#{{$tag}}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <section class="normal-article__counter">
                                        <span><i class="fa fa-eye"></i> {{$series->read}}</span>
                                        <span><i class="fa fa-commenting-o"></i> {{$series->voted}}</span>
                                        <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                        @php $publishDate = date_format($series->publish_started_at,"d/m/Y"); @endphp
                                        <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                    </section>
                                    <hr class="clearfix">
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
            </section>
        </section>
    </section>
@stop