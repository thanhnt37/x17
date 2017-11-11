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
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/php">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/javascript">Javascript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/databases">Databases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/git">Git</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/server">Server</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/others">Others</a>
                </li>
            </ul>

            <section id="search-box-desktop">
                <form class="form-inline my-2 my-lg-0">
                    <label for="search-input-desktop">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                    <input id="search-input-desktop" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm gì nào" aria-label="Search">
                </form>
            </section>
        </div>
    </section>
</nav>

<section id="search-box-mobile" class="hidden">
    <form class="form-inline my-2 my-lg-0">
        <label for="search-input-mobile">
            <i class="fa fa-search" aria-hidden="true"></i>
        </label>
        <input id="search-input-mobile" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm gì nào" aria-label="Search">
    </form>
</section>
