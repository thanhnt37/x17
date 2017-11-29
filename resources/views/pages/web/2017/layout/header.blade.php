<header class="header container">
    <div class="row">
        <div class="col-lg-4 header-logo">
            <a href="/">
                <img src="{!! \URLHelper::asset('logo/logo.png', 'common') !!}" alt="xcode.vn" class="">
            </a>
        </div>
        <div class="col-lg-8 header-banner">
            <img src="http://via.placeholder.com/728x90" alt="xcode.vn" class="">
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light">
    <button id="menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/">XCODE.VN</a>

    <span id="search-icon-mobile">
        <i class="fa fa-search" aria-hidden="true"></i>
    </span>

    <section class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="position: relative">
            <ul class="navbar-nav mr-auto">
                @foreach( $categories as $category )
                    @php $childs = $category->childs; @endphp
                    <li class="nav-item">
                        <a class="nav-link" href="/{{$category->slug}}">{{$category->name}}</a>

                        @if( count($childs) )
                            <section class="sub-category">
                                <header>
                                    <a href="/{{$category->slug}}">
                                        <span style="background: {{$category->color}}">{{$category->wildcard}}</span>
                                    </a>
                                    <h2><a href="/{{$category->slug}}">{{$category->name}}</a></h2>
                                    <ul>
                                        @foreach( $childs as $child )
                                            <li><a href="/{{$child->slug}}">{{$child->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </header>
                                <img src="{{$category->coverImage->url}}" alt="{{$category->slug}}" title="{{$category->slug}}">
                            </section>
                        @endif
                    </li>
                @endforeach
            </ul>

            <section id="search-box-desktop">
                <form action="{{ action('Web\SearchController@search') }}" method="get" class="form-inline my-2 my-lg-0">
                    <label for="keyword">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                    <input name="keyword" id="keyword" class="form-control mr-sm-2" type="text" placeholder="Bạn đang tìm gì vậy ???" aria-label="Search">
                </form>
            </section>
        </div>
    </section>
</nav>

<section id="search-box-mobile" class="hidden">
    <form action="{{ action('Web\SearchController@search') }}" method="get" class="form-inline my-2 my-lg-0">
        <label for="keyword">
            <i class="fa fa-search" aria-hidden="true"></i>
        </label>
        <input name="keyword" id="keyword" class="form-control mr-sm-2" type="text" placeholder="Bạn đang tìm gì vậy ???" aria-label="Search">
    </form>
</section>
