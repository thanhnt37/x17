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
                        <img src="https://s3.envato.com/files/145553660/970x250.jpg" alt="">
                        <header>
                            <section class="category">
                                <span>J</span>

                                <section>
                                    <p><a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a></p>
                                    <p><a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a></p>
                                </section>
                            </section>
                            <section class="title">
                                <h4>
                                    <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">Series hướng dẫn lập trình React Native cơ bản</a>
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
                            <p>
                                Giám đốc mảng kinh doanh toàn cầu của MediaTek - Finbarr Moynihan đã giải thích về tình hình ảm đạm của dòng SoC cao cấp nhất của hãng là Helio X đòng thời tiết lộ rằng công ty sẽ tạm rút lui khỏi phân khúc cao cấp và hứa hẹn trở lại trong 2 năm nữa.
                                <br><br>
                                Thật sự mà nói thì năm 2017 đã chứng kiến một sự cải tiến đột biến về công nghệ và hiệu năng của vi xử lý di động. Những con vi xử lý sản xuất trên tiến trình 10 nm đang dần phổ biến ít nhất là trong phân khúc điện thoại cao cấp. Cũng ở phân khúc này, đối với các thiết bị cao cấp thì Samsung Exynos 8895 và Qualcomm Snapdragon 835 đang cạnh tranh rất khốc liệt. Cả 2 đều sử dụng tiến trình 10 nm FinFET của Samsung và tập trung cải thiện mức tiêu thụ điện năng so với các thế hệ trước. Tuy nhiên, điều ngạc nhiên nhất lại đến từ Apple khi táo mẻ gây địa chấn với Apple A11 Bionic với cả 6 nhân có thể chạy ở xung nhịp cao cùng lúc, lần đầu đánh bại các SoC dành cho Android về mặt điểm số benchmark đa nhân. Tuy nhiên, nói đến đây thì MediaTek vẫn chưa được gọi tên, nhà sản xuất vi xử lý di động của Đài Loan đã âm thầm lùi vào bóng tối.
                            </p>
                        </section>
                    </section>
                </section>

                <section id="series-articles">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

                                <article>
                                    <a href="{!! action('Web\ArticleController@category', ['react-native']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="">
                                    </a>
                                    <section class="details">
                                        <h5 class="title">
                                            <a href="{!! action('Web\ArticleController@show', ['category', 'article-slug']) !!}">
                                                Game thủ PC có thể yên tâm, bom tấn Attack on Titan 2 sẽ không độc quyền
                                            </a>
                                        </h5>
                                        <p class="descriptions">Vietel là sim 3G/4G chính thống của các đại lý viễn thông phát hành .Khách hàng trước khi thanh toán có thể gọi tổng đài kiểm tra thông tin sim về gói 4G , ngày kích hoạt , ngày hết hạn khuyến mại</p>
                                        <section class="counter">
                                            <span><i class="fa fa-eye"></i> 254</span>
                                            <span><i class="fa fa-commenting-o"></i> 22</span>
                                            <span class="normal-article__counter--share"><i class="fa fa-share-alt"></i></span>
                                            <time datetime="23/09/2017">23/09/2017</time>
                                        </section>
                                    </section>
                                </article>

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