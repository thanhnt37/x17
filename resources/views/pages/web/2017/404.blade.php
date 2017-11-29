<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    @include('pages.web.2017.layout.meta')
    <title>404 - Page Not Found</title>

    <!-- Styles CSS -->
    @include('pages.web.2017.layout.styles')
</head>

<body style="background: rgb(23, 25, 32)">
    <section id="page-not-found">
        <img src="{!! URLHelper::asset('icon/404.png', 'common') !!}" alt="">
        <h2>PAGE NOT FOUND</h2>
        <p>Xin lỗi! Trang mà bạn đang tìm kiếm không tồn tại.</p>
        <form action="#">
            <label for="search-404">
                <i class="fa fa-search" aria-hidden="true"></i>
            </label>
            <input id="search-404" type="text" class="form-control" placeholder="Bạn đang tìm gì vậy ???">
        </form>
        <p class="internal-link">
            <a href="/" class="btn">HOME PAGE</a>
            <a href="/about" class="btn">CONTACT ME</a>
        </p>
        <ul>
            @foreach( $featuredTags as $tag )
                <li><a href="{!! action('Web\SearchController@tags', $tag->keyword) !!}">{{$tag->keyword}}</a></li>
            @endforeach
        </ul>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('pages.web.2017.layout.scripts')

</body>
</html>