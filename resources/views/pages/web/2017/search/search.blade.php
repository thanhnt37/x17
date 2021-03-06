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
                            <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Bạn đang tìm gì vậy ???" value="{{$keyword}}">
                        </form>

                        <ul class="tags">
                            @foreach( $featuredTags as $tag )
                                <li><a href="{!! action('Web\SearchController@tags', $tag->keyword) !!}">{{$tag->keyword}}</a></li>
                            @endforeach
                        </ul>

                        @if( isset($keyword) && !empty($keyword) )
                            {{--<ul class="panel">--}}
                            {{--<li class="active"><a href="#">Kết Quả Theo Bài Viết</a></li>--}}
                            {{--<li><a href="#">Kết Quả Theo Series</a></li>--}}
                            {{--</ul>--}}
                            <p class="alert alert-success" role="alert">
                                Tổng cộng: {{$total}} kết quả được tìm thấy !
                            </p>

                            @foreach( $articles as $article )
                                <article>
                                    <a href="{!! action('Web\ArticleController@detail', [$article->category->slug, $article->slug]) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="{{$article->slug}}" title="{{$article->slug}}">
                                    </a>
                                    <section class="details">
                                        <p class="category">
                                            <a href="{!! action('Web\ArticleController@category', [$article->category->slug]) !!}">{{$article->category->name}}</a>
                                            @php $publishDate = date_format($article->publish_started_at,"d/m/Y"); @endphp
                                            <time datetime="{{$publishDate}}">{{$publishDate}}</time>
                                        </p>
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

                            @if( $total > count($articles) )
                                <section class="view-more">
                                    <button class="btn btn-light">Xem thêm</button>
                                </section>
                            @endif
                        @endif
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