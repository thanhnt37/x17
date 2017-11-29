@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Danh Sách Series Bài Viết | XCODE.VN</title>
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <section id="search-page">
        <section class="wrap-content">
            <section class="container">

                <section id="breadcrumb">
                    <header>
                        <span style="background: rgba(200, 209, 255, 0.48)"><i class="fa fa-search"></i></span>
                        <h2>Search</h2>
                        <ul></ul>
                    </header>
                    <img src="http://placehold.it/730x95" alt="tim-kiem" title="tim-kiem">
                </section>

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="top-title">TÌM KIẾM THEO TỪ KHÓA</h5>

                        <form class="search-form" action="{{ action('Web\SearchController@search') }}" method="get">
                            <label for="keyword">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </label>
                            <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Bạn đang tìm gì ???">
                        </form>

                        <ul class="tags">
                            <li><a href="{!! action('Web\SearchController@tags', 'javascript') !!}">Javascript</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'react-native') !!}">React Native</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'angular') !!}">AngularJS</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'laravel') !!}">Laravel</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'nodejs') !!}">NodeJS</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'javascript') !!}">Javascript</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'react-native') !!}">React Native</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'angular') !!}">AngularJS</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'laravel') !!}">Laravel</a></li>
                            <li><a href="{!! action('Web\SearchController@tags', 'nodejs') !!}">NodeJS</a></li>
                        </ul>

                        {{--<ul class="panel">--}}
                            {{--<li class="active"><a href="#">Kết Quả Theo Bài Viết</a></li>--}}
                            {{--<li><a href="#">Kết Quả Theo Series</a></li>--}}
                        {{--</ul>--}}
                        <p class="alert alert-success" role="alert">
                            Tổng cộng: 36 kết quả được tìm thấy !
                        </p>

                        @foreach( $normalArticles as $normalArticle )
                            <article>
                                <a href="{!! action('Web\ArticleController@detail', [$normalArticle->category->slug, $normalArticle->slug]) !!}">
                                    <img src="http://via.placeholder.com/560x390" alt="{{$normalArticle->slug}}" title="{{$normalArticle->slug}}">
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
            </section>
        </section>
    </section>
@stop