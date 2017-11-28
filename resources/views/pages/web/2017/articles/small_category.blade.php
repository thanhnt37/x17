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

                @include('pages.web.2017.elements.breadcrumb')

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
                                    @foreach( $featuredArticles as $index => $featuredArticle )
                                        <div class="carousel-item @if($index == 0) active @endif">
                                            <a href="{!! action('Web\ArticleController@detail', [$featuredArticle->category->slug, $featuredArticle->slug]) !!}">
                                                <img class="d-block w-100" src="http://via.placeholder.com/730x350" alt="{{$featuredArticle->slug}}" title="{{$featuredArticle->slug}}">
                                            </a>

                                            <div class="carousel-caption d-md-block">
                                                <h3>
                                                    <a href="{!! action('Web\ArticleController@detail', [$featuredArticle->category->slug, $featuredArticle->slug]) !!}">{{$featuredArticle->title}}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- list articles --}}
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