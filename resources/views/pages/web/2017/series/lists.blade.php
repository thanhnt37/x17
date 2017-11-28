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

                <section id="breadcrumb">
                    <header>
                        <a href="/series">
                            <span style="background: #aeec628f">Sr</span>
                        </a>
                        <h2><a href="/series">Series</a></h2>
                        <ul></ul>
                    </header>
                    <img src="http://placehold.it/730x95" alt="series-bai-viet-huong-dan" title="series-bai-viet-huong-dan">
                </section>

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="title">DANH SÁCH SERIES BÀI VIẾT, HƯỚNG DẪN</h5>

                        @foreach( $normalArticles as $normalArticle )
                            <article class="normal-article">
                                <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">
                                    <img src="http://via.placeholder.com/970x250" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}">
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
                                        <time datetime="23/09/2017">23/09/2017</time>
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