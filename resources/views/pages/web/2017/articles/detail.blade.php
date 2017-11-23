@extends('pages.web.2017.layout.application')

@section('meta')
    <title>Chi Tiết Bài Viết | XCODE.VN</title>
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
    <section id="article-page" class="container">

        @include('pages.web.2017.elements.breadcrumb')

        <div class="row">
            <div class="col-lg-8">
                <article id="article-detail">
                    <h3>Functional Reactive Programming là gì?</h3>
                    <p class="publish-date"><time datetime="23/09/2017">23/09/2017</time> trong <a href="#">Javascript</a>/<a href="#">NodeJS</a></p>

                    <section class="social-share" style="padding: 7px 0 10px 10px;">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                        </div>
                        <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                        <div class="g-plus" data-action="share"></div>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </section>

                    <img src="http://via.placeholder.com/730x350" alt="" class="cover-image">

                    <p class="descriptions">
                        Functional Reactive Programming (FRP) là mô hình lập trình hướng tới luồng dữ liệu và sự lan truyền thay đổi. Ttrong FRP, ta có một loại dữ liệu thể hiện được "giá trị thay đổi theo thời gian", ta có thể áp dụng các hàm cơ bản đặc trưng của functional programming (ví dụ như map, reduce, scan...). Ví dụ, trong mô hình lập trình thông thường - imperative programming - khi ta có a = b + c, giá trị của a thu được chính là tổng giá trị của b và c tại thời điểm chạy câu lệnh, sau thời điểm đó giá trị b, c có thể thay đổi nhưng sẽ không làm thay đổi giá trị của a
                    </p>

                    <section class="article-content">
                        <div class="md-contents post-content">
                            <h2 id="observable-1">Observable</h2>
                            <p>Về cơ bản, "giá trị thay đổi theo thời gian" trong FRP có hai loại giống như bất cứ loại dữ
                                liệu nào trong tự nhiên: rời rạc và liên tục. Tuy nhiên, do bản chất của máy tính, việc cài
                                đặt hỗ trợ mô hình loại dữ liệu liên tục khó khăn hơn, hầu hết các framework hiện nay mới hỗ
                                trợ cho các cập nhật rời rạc, hướng sự kiện. Trong mô hình này, dữ liệu được mô hình thành
                                các tín hiệu chứa giá trị hiện tại, thay đổi một cách rời rạc gọi là sự kiện. Các sự kiện
                                này thực tế là một dòng sự kiện bất đồng bộ. Như vậy dùng FRP là ta lập trình với dòng dữ
                                liệu bất đồng bộ.</p>
                            <p>Chúng ta đã quen với việc làm việc với dòng dữ liệu từ lâu. Nguồn xuất dòng dữ liệu chính là
                                producer, và consumer sử dụng dòng dữ liệu đó. Để giải quyết bài toán produce - consumer này
                                ta đã có 2 design pattern <a href="http://en.wikipedia.org/wiki/Iterator_pattern"
                                                             target="_blank">Iterator</a> và <a
                                        href="http://en.wikipedia.org/wiki/Observer_pattern" target="_blank">Observable</a>.
                                Đối với Iterator, consumer khi cần dữ liệu thì mới yêu cầu producer, giống như khi ta hết
                                thực phẩm mới ra siệu thị mua đồ vậy. Còn đối với Observable, consumer đăng ký với producer,
                                khi producer sẽ chuyển trực tiếp cho consumer ngay khi có sản phẩm. Việc này tương tự như
                                chúng ta đặt báo hàng tháng: sau khi đăng ký, mỗi khi đến kỳ có báo mới là có nhân viên giao
                                báo tới tận nhà chúng ta. Trong FRP, dòng sự kiện là Observable. Các observer đăng ký với
                                observable, và phản ứng với các item mà observable emit ra.</p>
                            <p>Ví dụ, một observable sẽ tạo ra một dòng event như sau:</p>
<pre><code><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">1</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">3</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">3</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">4</span><span
                class="hljs-literal">-</span><span class="hljs-comment">2</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">X</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">2</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">|</span><span class="hljs-literal">-</span>&gt;

        <span class="hljs-comment">1</span><span class="hljs-string">,</span> <span class="hljs-comment">2</span><span
                class="hljs-string">,</span> <span class="hljs-comment">3</span><span class="hljs-string">,</span> <span
                class="hljs-comment">4</span> <span class="hljs-comment">là</span> <span class="hljs-comment">các</span>
        <span class="hljs-comment">giá</span> <span class="hljs-comment">trị</span> <span
                class="hljs-comment">được</span> <span class="hljs-comment">emit</span>
        <span class="hljs-comment">X</span> <span class="hljs-comment">tương</span> <span
                class="hljs-comment">ứng</span> <span class="hljs-comment">với</span> <span
                class="hljs-comment">lỗi</span>
        <span class="hljs-comment">|</span> <span class="hljs-comment">là</span> <span class="hljs-comment">báo</span>
        <span class="hljs-comment">hiệu</span> <span class="hljs-comment">dòng</span> <span
                class="hljs-comment">event</span> <span class="hljs-comment">đã</span> <span
                class="hljs-comment">kết</span> <span class="hljs-comment">thúc</span>
        <span class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span>&gt;
        <span class="hljs-comment">thể</span> <span class="hljs-comment">hiện</span> <span
                class="hljs-comment">dòng</span> <span class="hljs-comment">thời</span> <span
                class="hljs-comment">gian</span>
    </code></pre>
                            <p>Nếu chỉ có như vậy thì FRP chẳng hơn gì ta lập trình bình thường sử dụng design pattern
                                Observable. Trong FRP, observable được mô hình như một collection bình thường, từ đó ta có
                                thể áp dụng các hàm cho collection, biến đối từ một observable này sang một observable
                                khác.</p>
                            <p>Xét một mảng thông thường</p>
<pre><code>[<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">3</span>,
        <span class="hljs-number">4</span>]
    </code></pre>
                            <p>Giờ xét một observable</p>
<pre><code><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">1</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">3</span><span class="hljs-literal">-</span><span
                class="hljs-comment">3</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">4</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">|</span><span class="hljs-literal">-</span>&gt;
    </code></pre>
                            <p>Có thể thấy, một observable có thể xem như là một collection, trong đó các giá trị của nó
                                chưa có sẵn, nhưng được cam kết sẽ có trong tương lai.</p>
                            <p>Với việc xem observable như một collection, ta có thể lập trình với một mức trừu tượng cao
                                hơn. Ta có thể định nghĩa các mối quan hệ giữa các sự kiện một cách rõ ràng thay vì phải
                                viết hàng loạt đoạn code cài đặt phức tạp.</p>
                            <h2 id="vi-du-minh-hoa-2">Ví dụ minh hoạ</h2>
                            <p>Để có thể hiện ưu điểm của FRP, ta cùng xét một ví dụ. Giả sử ta cần cài đặt một search box,
                                request lên server ngay trong lúc người dùng đang gõ để gợi ý. Tuy nhiên nếu như vậy, khi
                                người dùng gõ "beautiful flower", ta phải gửi 16 truy vấn, hầu hết đều không có tác dụng gì.
                                Do đó, searchbox của ta sẽ không được gửi request khi người dùng đang gõ liên tục. Ngoài ra,
                                khi đang request mà người dùng gõ thêm, thì không được phép hiện kết quả cũ, mà phải chờ kết
                                quả mới.</p>
                            <p>Ở đây, tôi chọn thư viện <a href="https://github.com/Reactive-Extensions/RxJS"
                                                           target="_blank">RxJS</a> để làm ví dụ. Vậy giải quyết bài toán
                                này bằng FRP như thế nào?</p>
                            <p>Trước hết, cần biết rằng mọi thứ đều có thể là observable: đầu tiên ta cho sự kiện người dùng
                                bấm một nút trên bàn phím, làm thay đổi text trong search box là một observable:</p>
<pre><code><span class="hljs-literal">-</span><span class="hljs-comment">xxx</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-comment">xx</span><span
                class="hljs-literal">-</span><span class="hljs-comment">xx</span><span
                class="hljs-literal">-</span><span class="hljs-comment">xx</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">|</span><span
                class="hljs-literal">-</span>&gt;
    </code></pre>
                            <p>Để tạo observable từ event rất đơn giản:</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> keyPressObservable =
        Rx.Observable.fromEvent(inputRx, <span class="hljs-string">'keyup'</span>);
    </code></pre>
                            <p>Do event keypress không bắt được việc bấm backspace, vậy nên ở đây ta dùng tạm keyup.</p>
                            <p>Lúc người dùng đang gõ liên tục, ta tạm thời không quan tâm. Ta có thể dùng method <a
                                        href="http://reactivex.io/documentation/operators/debounce.html" target="_blank">throttle</a>
                                để chỉ lọc những sự kiện mà ta cần. Throttle chỉ emit các item từ Observable nếu đã qua một
                                khoảng thời gian mà không emit một item nào khác.</p>
<pre><code class="hljs language-javascript">keyPressObservable.throttle(<span class="hljs-number">200</span>);
    </code></pre>
<pre><code><span class="hljs-comment">keyPressObservable:</span> <span class="hljs-literal">-</span><span
                class="hljs-comment">xxx</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">x</span><span class="hljs-literal">-</span><span
                class="hljs-comment">xx</span><span class="hljs-literal">-</span><span
                class="hljs-comment">xx</span><span class="hljs-literal">-</span><span
                class="hljs-comment">xx</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">|</span><span class="hljs-literal">-</span>&gt;
        <span class="hljs-comment">vvvv</span> <span class="hljs-comment">throttle(200)</span> <span
                class="hljs-comment">vvvv</span>
        <span class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">x</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">|</span><span class="hljs-literal">-</span>&gt;
    </code></pre>
                            <p>Sau khi người dùng tạm dừng gõ, ta muốn biết người dùng đã gõ được những gì. Ta sẽ <a
                                        href="http://reactivex.io/documentation/operators/map.html" target="_blank">map</a>
                                từng event với giá trị mà người dùng đã gõ được.</p>
<pre><code class="hljs language-javascript">requestObservable = keypressObservable.throttle(<span class="hljs-number">200</span>)
        .map(<span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params">key</span>) </span>{
        <span class="hljs-keyword">return</span> inputRx.val();
        });
    </code></pre>
                            <p>Như vậy ta đã có một dòng các text mà ta cần gửi truy vấn. Mỗi khi có một request, ta cần gửi
                                yêu cầu lên server, và thu nhận lại kết quả. Trong Rx, ta có thể dễ dàng chuyển đổi từ
                                Promise, kết quả của truy vấn ajax, sang observable: <code>var observable =
                                    Rx.Observable.fromPromise(promise)</code>, ta sẽ dùng nó để tạo ra observable cho
                                response.</p>
                            <p>Với mỗi request trong collection requestObservable, ta biến đổi thành một <code>response =
                                    f(request)</code>, lại nghề của map rồi:</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> responseObservableOfObservable =
        requestObservable.map(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData));
        }
    </code></pre>
                            <p>Mỗi request ta sinh ra một observable của response, như vậy từ requestObservable ban đầu, ta
                                đã sinh ra một Observable của Observable, một collection của các collection. Nhưng ta không
                                quan tâm đến tập các collection làm gì, ta chỉ quan tâm tới từng phần tử trong từng
                                collection đó thôi. Vì vậy, ta cần "là phẳng" nó đi, biến nó thành một observable duy
                                nhất.</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> responseObservableOfObservable =
        requestObservable.map(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData)).concatAll();
        }
    </code></pre>
                            <p>Việc map rồi concatAll gặp rất thường xuyên, vì vậy Rx hỗ trợ flatMap, kết hợp của cả hai</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> responseObservableOfObservable =
        requestObservable.flatMap(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData));
        }
    </code></pre>
                            <p>Khi đang request mà có thêm một request mới, ta cần huỷ request trước đi. Rx có method <a
                                        href="http://reactivex.io/documentation/operators/takeuntil.html" target="_blank">takeUntil</a>
                                để giải quyết vấn đề này</p>
<pre><code><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">1</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">2</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">3</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">4</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">5</span><span class="hljs-literal">-</span><span class="hljs-comment">6</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">7</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">8</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">9</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">|</span><span
                class="hljs-literal">-</span>&gt;
        <span class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-comment">a</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">|</span><span class="hljs-literal">-</span>&gt;
        <span class="hljs-comment">vvv</span> <span class="hljs-comment">takeUntil</span> <span
                class="hljs-comment">vvv</span>
        <span class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-comment">1</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">2</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">3</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-comment">4</span><span class="hljs-literal">-</span><span
                class="hljs-comment">|</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span><span
                class="hljs-literal">-</span><span class="hljs-literal">-</span><span class="hljs-literal">-</span>&gt;
    </code></pre>
                            <p>Áp dụng vào bài toán của ta, khi người dùng tiếp tục bấm nút thì huỷ request cũ:</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> responseObservable =
        requestObservable.flatMap(<span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData))
        .takeUntil(keyPressObservable);
        });
    </code></pre>
                            <p>Khi đã có Observable cho response, ta chỉ cần <a
                                        href="http://reactivex.io/documentation/operators/subscribe.html" target="_blank">subscribe</a>
                                nó để hiển thị kết quả:</p>
<pre><code class="hljs language-javascript">responseObservable.subscribe(<span class="hljs-function"><span
                    class="hljs-keyword">function</span> (<span class="hljs-params">result</span>) </span>{
        showResult(outputRx, result);
        }, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params"></span>) </span>{
        showResult(output, <span class="hljs-string">"There is some error"</span>);
        });
    </code></pre>
                            <p>Tổng hợp lại toàn bộ code cho searchbox là:</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> keyPressObservable =
        Rx.Observable.fromEvent(inputRx, <span class="hljs-string">'keyup'</span>);
        <span class="hljs-keyword">var</span> requestObservable = keyPressObservable.throttle(<span class="hljs-number">200</span>)
        .map(<span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params">key</span>) </span>{
        <span class="hljs-keyword">return</span> inputRx.val();
        });
        <span class="hljs-keyword">var</span> responseObservable = requestObservable.flatMap(<span
                class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData))
        .takeUntil(keyPressObservable);
        });

        responseObservable.subscribe(<span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params">result</span>) </span>{
        showResult(outputRx, result);
        }, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span
                    class="hljs-params"></span>) </span>{
        showResult(outputRx, <span class="hljs-string">"There is some error"</span>);
        });
    </code></pre>
                            <p>Nếu loại bỏ hết các biến tạm ta chỉ còn</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> keyPressObservable =
        Rx.Observable.fromEvent(inputRx, <span class="hljs-string">'keyup'</span>).throttle(<span class="hljs-number">200</span>)
        .map(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">key</span>) </span>{
        <span class="hljs-keyword">return</span> inputRx.val();
        })
        keyPressObservable.flatMap(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params">requestData</span>) </span>{
        <span class="hljs-keyword">return</span> Rx.Observable.fromPromise(getResult(requestData)).takeUntil(
        keyPressObservable);
        }).subscribe(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">result</span>) </span>{
        showResult(outputRx, result);
        }, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params"></span>) </span>{
        showResult(outputRx, <span class="hljs-string">"There is some error"</span>);
        });
    </code></pre>
                            <p>So sánh với việc cài đặt chức năng tương đương mà không dùng Rx</p>
<pre><code class="hljs language-javascript"><span class="hljs-keyword">var</span> timeout = <span class="hljs-literal">null</span>;
        <span class="hljs-keyword">var</span> currentRequest = <span class="hljs-literal">null</span>;
        input.keyup(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params"></span>) </span>{
        <span class="hljs-keyword">if</span> (timeout) clearTimeout(timeout);
        <span class="hljs-keyword">if</span> (currentRequest) currentRequest.abort();
        <span class="hljs-keyword">var</span> text = input.val();
        timeout = setTimeout(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params"></span>) </span>{
        currentRequest = getResult(text)
        .done(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span
                    class="hljs-params">result</span>) </span>{
        showResult(output, result);
        })
        .fail(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">jqXHR, status, error</span>) </span>{
        <span class="hljs-keyword">if</span> (error === <span class="hljs-string">"abort"</span>) <span
                class="hljs-keyword">return</span>;
        showResult(output, <span class="hljs-string">"There is some error"</span>);
        });
        }, <span class="hljs-number">200</span>);
        });
    </code></pre>
                            <p>Có thể thấy, với Rx, ta mô tả một cách tự nhiên bài toán vào trong code, chỉ cần nói mình
                                muốn gì là máy tính thực hiện. Còn trong ví dụ trên, ta phải tự đặt timeout, huỷ request,
                                hướng dẫn từng bước để máy tính thực hiện theo ý ta.</p>
                        </div>
                    </section>

                    <section class="article-footer">
                        <section class="social-share">
                            <h5>Thấy hay thì chia sẻ bạn bè nhé !</h5>
                            <section>
                                <img src="{!! \URLHelper::asset('icon/arrow.png', 'common') !!}" alt="">
                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                                </div>
                                <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                                <div class="g-plus" data-action="share"></div>
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </section>
                        </section>

                        <section class="tags">
                            <h5>Tags: </h5>
                            <ul>
                                <li><a href="#">#javascript</a></li>
                                <li><a href="#">#nodejs</a></li>
                                <li><a href="#">#php</a></li>
                                <li><a href="#">#laravel</a></li>
                                <li><a href="#">#apache</a></li>
                                <li><a href="#">#nginx</a></li>
                            </ul>
                        </section>

                        <section class="like-fanpage">
                            <img src="{!! \URLHelper::asset('icon/bg_like-fanpage.jpg', 'common') !!}" alt="">
                            <section class="fanpage">
                                <img src="{!! \URLHelper::asset('icon/arrow2.png', 'common') !!}" alt="">
                                <h6>LIKE FANPAGE ĐỂ CẬP NHẬT TIN TỨC<br>CÔNG NGHỆ MỚI MỖI NGÀY</h6>

                                {{-- fb fanpage--}}
                                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="200" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                                </div>
                            </section>
                        </section>
                    </section>

                    <div id="fb-comments" class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>

                    <section class="article-suggests">
                        <h4>CÓ THỂ BẠN QUAN TÂM</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article>
                                    <header>
                                        <h5><a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">Laravel 5.4 có gì mới</a></h5>
                                        <p>
                                            <a href="{!! action('Web\ArticleController@category', ['javascript']) !!}">Javascript</a> /
                                            <a href="{!! action('Web\ArticleController@category', ['nodejs']) !!}">NodeJS</a>
                                        </p>
                                    </header>
                                    <a href="{!! action('Web\ArticleController@detail', ['category', 'article-slug']) !!}">
                                        <img src="http://via.placeholder.com/560x390" alt="xcode.vn" class="">
                                    </a>
                                </article>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
            <div class="col-lg-4" style="padding: 0;">
                <img class="show-aside" src="{!! \URLHelper::asset('icon/show_aside.png', 'common') !!}" alt="">
                <aside>
                    @include('pages.web.advertises.300x250')

                    <section class="site-index">
                        <h5>INDEX</h5>
                        <ul>
                            <li><a href="#">Chuẩn bị</a></li>
                            <li class="active"><a href="#">Khởi động</a></li>
                            <li><a href="#">Vượt chướng ngại vật</a></li>
                            <li><a href="#">Tăng tốc</a></li>
                            <li><a href="#">Về đích</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>

    </section>
@stop