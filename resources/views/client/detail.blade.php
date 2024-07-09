<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi" />
    <meta content="VN" name="geo.region" />
    <meta name="DC.language" scheme="utf-8" content="vi" />
    <meta name="language" content="Việt Nam">
    <link rel="stylesheet" href="css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon"
        href="https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png"
        type="image/x-icon" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="revisit-after" content="1 days" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Xem phim hay nhất</title>
    <meta name="description"
        content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh" />
    <link rel="canonical" href="">
    <link rel="next" href="" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất" />
    <meta property="og:description"
        content="Phim hay 2020 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Phim hay 2021- Xem phim hay nhất" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="55" />

    <link rel='dns-prefetch' href='//s.w.org' />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' id='bootstrap-css' href='{{ url('') }}/css/bootstrap.min.css?ver=5.7.2'
        media='all' />
    <link rel='stylesheet' id='style-css' href='{{ url('') }}/css/style.css?ver=5.7.2' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='{{ url('') }}/css/style.min.css?ver=5.7.2'
        media='all' />
    <script type='text/javascript' src='{{ url('') }}/js-client/jquery.min.js?ver=5.7.2' id='halim-jquery-js'>
    </script>
    <style type="text/css" id="wp-custom-css">
        .textwidget p a img {
            width: 100%;
        }
    </style>
    <style>
        #header .site-title {
            background: url(https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png) no-repeat top left;
            background-size: contain;
            text-indent: -9999px;
        }
    </style>
</head>

<body class="post-template-default single single-post postid-38424 single-format-standard halimthemes halimmovies"
    data-masonry="">
    <header id="header">
        <div class="container">
            <div class="row" id="headwrap">
                <div class="col-md-3 col-sm-6 slogan">
                    <p class="site-title"><a class="logo" href="{{ route('home') }}" title="phim hay ">Phim Hay</p>
                    </a>
                </div>
                <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                    <div class="header-nav">
                        <div class="col-xs-12">
                            <form id="search-form-pc" name="halimForm" role="search" action="" method="GET">
                                <div class="form-group">
                                    <div class="input-group col-xs-12">
                                        <input id="search" type="text" name="s" class="form-control"
                                            placeholder="Tìm kiếm..." autocomplete="off" required>
                                        <i class="animate-spin hl-spin4 hidden"></i>
                                    </div>
                                </div>
                            </form>
                            <ul class="ui-autocomplete ajax-results hidden"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar-container">
        <div class="container">
            <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
                <div class="collapse navbar-collapse" id="halim">
                    <div class="menu-menu_1-container">
                        <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                            <li class="current-menu-item active"><a title="Trang Chủ"
                                    href="={{ route('home') }}">Trang Chủ</a>
                            </li>
                            <li class="mega"><a title="Phim Mới" href="{{ route('film.new') }}">Phim Mới</a></li>
                            <li class="mega dropdown">
                                <a title="Năm" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Năm <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Phim 2020" href="{{ route('film.year', ['year' => 2024]) }}">Phim
                                            2024</a></li>
                                    <li><a title="Năm 2019" href="{{ route('film.year', ['year' => 2023]) }}">Năm
                                            2023</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2022]) }}">Năm
                                            2022</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2021]) }}">Năm
                                            2021</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2020]) }}">Năm
                                            2020</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2019]) }}">Năm
                                            2019</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2018]) }}">Năm
                                            2018</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2017]) }}">Năm
                                            2017</a></li>
                                    <li><a title="Năm 2018" href="{{ route('film.year', ['year' => 2016]) }}">Năm
                                            2016</a></li>
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Tâm Lý"
                                            href="{{ route('film.category', [
                                                'category' => 'tam-ly',
                                            ]) }}">Tâm
                                            Lý</a></li>
                                    <li><a title="Hành động"
                                            href="{{ route('film.category', [
                                                'category' => 'hanh-dong',
                                            ]) }}">Hành
                                            động</a></li>
                                    <li><a title="Viễn Tưởng"
                                            href="{{ route('film.category', [
                                                'category' => 'vien-tuong',
                                            ]) }}">Viễn
                                            Tưởng</a></li>
                                    <li><a title="Kinh Dị"
                                            href="{{ route('film.category', [
                                                'category' => 'kinh-di',
                                            ]) }}">Kinh
                                            Dị</a></li>
                                    <li><a title="Hài Hước"
                                            href="{{ route('film.category', [
                                                'category' => 'hai-huoc',
                                            ]) }}">Hài
                                            Hước</a>
                                    </li>
                                    <li><a title="Hình Sự"
                                            href="{{ route('film.category', [
                                                'category' => 'hinh-su',
                                            ]) }}">Hình
                                            Sự</a></li>
                                    <li><a title="Võ Thuật"
                                            href="{{ route('film.category', [
                                                'category' => 'vo-thuat',
                                            ]) }}">Võ
                                            Thuật</a>
                                    </li>
                                    <li><a title="Cổ Trang"
                                            href="{{ route('film.category', [
                                                'category' => 'co-trang',
                                            ]) }}">Cổ
                                            Trang</a>
                                    </li>
                                    <li><a title="Phim Ma"
                                            href="{{ route('film.category', [
                                                'category' => 'phim-ma',
                                            ]) }}">Phim
                                            Ma</a></li>
                                    <li><a title="Tình Cảm"
                                            href="{{ route('film.category', [
                                                'category' => 'tinh-cam',
                                            ]) }}">Tình
                                            Cảm</a>
                                    </li>
                                    <li><a title="Thể Thao - Âm Nhạc"
                                            href="{{ route('film.category', [
                                                'category' => 'am-nhac',
                                            ]) }}">Thể
                                            Thao &#8211; Âm Nhạc</a>
                                    </li>
                                    <li><a title="Thần Thoại"
                                            href="{{ route('film.category', [
                                                'category' => 'than-thoai',
                                            ]) }}">Thần
                                            Thoại</a>
                                    </li>
                                    <li><a title="Tài Liệu"
                                            href="{{ route('film.category', [
                                                'category' => 'tai-lieu',
                                            ]) }}">Tài
                                            Liệu</a>
                                    </li>
                                    <li><a title="Phiêu Lưu"
                                            href="{{ route('film.category', [
                                                'category' => 'phieu-luu',
                                            ]) }}">Phiêu
                                            Lưu</a>
                                    </li>
                                    <li><a title="Gia Đình"
                                            href="{{ route('film.category', [
                                                'category' => 'gia-dinh',
                                            ]) }}">Gia
                                            Đình</a>
                                    </li>
                                    <li><a title="Chiến Tranh"
                                            href="{{ route('film.category', [
                                                'category' => 'chien-tran',
                                            ]) }}">Chiến
                                            Tranh</a></li>
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Việt nam"
                                            href="{{ route('film.country', ['country' => 'viet-nam']) }}">Việt
                                            nam</a></li>
                                    <li><a title="Ấn Độ"
                                            href="{{ route('film.country', ['country' => 'an-do']) }}">Ấn
                                            Độ</a></li>
                                    <li><a title="Mỹ"
                                            href="{{ route('film.country', ['country' => 'au-my']) }}">Âu
                                            Mỹ</a>
                                    </li>
                                    <li><a title="Hồng Kông"
                                            href="{{ route('film.country', ['country' => 'hong-kong']) }}">Hồng
                                            Kông</a></li>
                                    <li><a title="Nhật Bản"
                                            href="{{ route('film.country', ['country' => 'nhat-ban']) }}">Nhật
                                            Bản</a></li>
                                    <li><a title="Trung Quốc"
                                            href="{{ route('film.country', ['country' => 'trung-quoc']) }}">Trung
                                            Quốc</a></li>
                                    <li><a title="Hàn Quốc"
                                            href="{{ route('film.country', ['country' => 'han-quoc']) }}">Hàn
                                            Quốc</a></li>
                                    <li><a title="Đài Loan"
                                            href="{{ route('film.country', ['country' => 'dai-loan']) }}">Đài
                                            Loan</a></li>
                                    <li><a title="Thái Lan"
                                            href="{{ route('film.country', ['country' => 'thai-lan']) }}">Thái
                                            Lan</a></li>
                                    <li><a title="Philippin"
                                            href="{{ route('film.country', ['country' => 'philippines']) }}">Philippin</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a title="Phim Lẻ" href="{{ route('film.single') }}">Phim Lẻ</a></li>
                            <li><a title="Phim Bộ" href="{{ route('film.series') }}">Phim Bộ</a></li>
                            <li><a title="Phim Bộ" href="{{ route('film.cartoon') }}">Hoạt Hình</a></li>
                            <li><a title="Phim Chiếu Rạp" href="{{ route('film.theater') }}">Phim Chiếu Rạp</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="collapse navbar-collapse" id="search-form">
                <div id="mobile-search-form" class="halim-search-form"></div>
            </div>
            <div class="collapse navbar-collapse" id="user-info">
                <div id="mobile-user-login"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row fullwith-slider"></div>
    </div>
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a href="{{ route('home') }}">Phim
                                        </a>
                                        <span> » <span class="breadcrumb_last"
                                                aria-current="page">{{ $film->name }}</span></span></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section id="content" class="test">
                    <div class="clearfix wrap-content">
                        <div class="halim-movie-wrapper">
                            <div class="movie_info col-xs-12">
                                <div class="movie-poster col-md-3">
                                    <img class="movie-thumb" src="{{ $film->thumb_url }}"
                                        alt="{{ $film->name }}">
                                    <div class="bwa-content">
                                        <div class="loader"></div>
                                        @if ($film->type == 'tv')
                                            <a href="{{ route('watching', ['slug' => $film->slug]) }}?tap=1"
                                                class="bwac-btn">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        @elseif($film->type == 'movie')
                                            <a href="{{ route('watching', ['slug' => $film->slug]) }}"
                                                class="bwac-btn">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="film-poster col-md-9">
                                    <h1 class="movie-title title-1"
                                        style="display:block;line-height:35px;margin-bottom: -14px;color: #ffed4d;text-transform: uppercase;font-size: 18px;">
                                        {{ $film->name }}</h1>
                                    <h2 class="movie-title title-2" style="font-size: 12px;">
                                        {{ $film->origin_name }}
                                    </h2>
                                    <ul class="list-info-group">
                                        <li class="list-info-group-item"><span>Trạng Thái</span> : <span
                                                class="quality">{{ $film->quality }}</span><span
                                                class="episode">{{ $film->vietsub }}</span> {{ $film->status }} </li>

                                        <li class="list-info-group-item"><span>Thời lượng</span> : {{ $film->time }}
                                        </li>
                                        <li class="list-info-group-item"><span>Thể loại</span> :
                                            @foreach ($film->category as $item)
                                                <a href="" rel="category tag">{{ $item['name'] }}</a>
                                            @endforeach
                                        </li>
                                        <li class="list-info-group-item"><span>Quốc gia</span> :
                                            @foreach ($film->country as $item)
                                                <a href="" rel="tag"> {{ $item['name'] }} </a>
                                            @endforeach
                                        </li>
                                        <li class="list-info-group-item"><span>Đạo diễn</span> :
                                            @foreach ($film->director as $item)
                                                <a class="director" rel="nofollow" href=""
                                                    title="Cate Shortland">{{ $item }} </a>
                                            @endforeach
                                        </li>
                                        <li class="list-info-group-item last-item"
                                            style="-overflow: hidden;-display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-flex: 1;-webkit-box-orient: vertical;">
                                            <span>Diễn viên</span> :
                                            @foreach ($film->actor as $item)
                                                <a href="" rel="nofollow"
                                                    title="C.C. Smiff">{{ $item }}
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                    <div class="movie-trailer hidden"></div>
                                </div>
                            </div>
                        </div>
                        <div id="halim-list-server">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active server-1"><a href="#server-0"
                                        aria-controls="server-0" role="tab" data-toggle="tab"><i
                                            class="hl-server"></i>
                                        {{ $film['vietsub'] }}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active server-1" id="server-0">
                                    <div class="halim-server">
                                        <ul class="halim-list-eps">
                                            @if ($film->type == 'tv')
                                                @foreach ($film->episodes as $item)
                                                    <li class="halim-episode">
                                                        <a href="{{ route('watching', ['slug' => $film->slug]) }}?tap={{ $item['name'] }}"
                                                            style="display: inline-block; background-color: red; padding: 4px 15px; color: #fff;border-radius: 2px">{{ $item['name'] }}</a>
                                                    </li>
                                                @endforeach
                                            @elseif($film->type == 'movie')
                                                <li class="halim-episode"><span
                                                        class="halim-btn halim-btn-2 active halim-info-1-1 box-shadow">Full</span>
                                                </li>
                                            @endif
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="halim_trailer"></div>
                        <div class="clearfix"></div>
                        <div class="section-bar clearfix">
                            <h2 class="section-title"><span style="color:#ffed4d">Nội dung phim</span></h2>
                        </div>
                        <div class="entry-content htmlwrap clearfix">
                            <div class="video-item halim-entry-box">
                                <article id="post-38424" class="item-content">
                                    Phim <a href="">{{ $film->name }}</a> -
                                    {{ $film->year }} :
                                    {!! $film->content !!}
                                </article>
                            </div>
                        </div>
                        <div class="section-bar clearfix">
                            <h2 class="section-title"><span style="color:#ffed4d">Chia sẻ phim</span></h2>
                        </div>
                        <div class="entry-content htmlwrap clearfix">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                target="_blank">
                                Share on Facebook
                            </a>
                        </div>
                    </div>
                </section>
                <section class="related-movies">
                    <div id="halim_related_movies-2xx" class="wrap-slider">
                        <div class="section-bar clearfix">
                            <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
                        </div>
                        <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film "
                            style="display: flex !important">
                            @foreach ($relation as $item)
                                <article class="thumb grid-item post-38498">
                                    <div class="halim-item">
                                        <a class="halim-thumb" href="{{ route('detail', ['slug' => $item->slug]) }}"
                                            title="">
                                            <figure><img class="lazy img-responsive" src="{{ $item->thumb_url }}"
                                                    alt="{{ $item->name }}" title=""></figure>
                                            <span class="status">{{ $item->quality }} </span><span class="episode"><i
                                                    class="fa fa-play"
                                                    aria-hidden="true"></i>{{ $item->vietsub }}</span>
                                            <div class="icon_overlay"></div>
                                            <div class="halim-post-title-box">
                                                <div class="halim-post-title ">
                                                    <p class="entry-title">{{ $item->name }} </p>
                                                    <p class="original_title">{{ $item->origin_name }} </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <script>
                            jQuery(document).ready(function($) {
                                var owl = $('#halim_related_movies-2');
                                owl.owlCarousel({
                                    loop: true,
                                    margin: 1,
                                    autoplay: true,
                                    nav: true,
                                    navText: ['<i class="fa-solid fa-arrow-left"></i>',
                                        '<i class="fa-solid fa-arrow-right"></i>'
                                    ],
                                    items: 5,
                                    responsiveClass: true,
                                    responsive: {
                                        0: {
                                            items: 2
                                        },
                                        480: {
                                            items: 3
                                        },
                                        600: {
                                            items: 4
                                        },
                                        1000: {
                                            items: 4
                                        }
                                    }
                                })
                            });
                        </script>
                    </div>
                </section>
            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
                <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                    <div class="section-bar clearfix">
                        <div class="section-title">
                            <span>Top Views</span>
                        </div>
                    </div>
                    <section class="tab-content">
                        <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                            <div class="halim-ajax-popular-post-loading hidden"></div>
                            <div id="halim-ajax-popular-post" class="popular-post">
                                @foreach ($top as $item)
                                    <div class="item post-37176">
                                        <a href="{{ route('detail', ['slug' => $item->slug]) }}" title="">
                                            <div class="item-link">
                                                <img src="{{ $item->thumb_url }}" class="lazy post-thumb"
                                                    alt="{{ $item->name }}" />
                                                <span class="is_trailer">{{ $item->vietsub }}</span>
                                            </div>
                                            <p class="title">{{ $item->name }}</p>
                                        </a>
                                        <div class="viewsCount" style="color: #9d9d9d;">{{ $item->view }} lượt xem
                                        </div>
                                        <div style="float: left;">
                                            <span class="user-rate-image post-large-rate stars-large-vang"
                                                style="display: block;/* width: 100%; */">
                                                <span style="width: 0%"></span>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>
            </aside>
        </div>
    </div>
    <div class="clearfix"></div>
    <footer id="footer" class="clearfix">
        <div class="container footer-columns">
            <div class="row container">
                <div class="widget about col-xs-12 col-sm-4 col-md-4">
                    <div class="footer-logo">
                        <img class="img-responsive"
                            src="https://img.favpng.com/9/23/19/movie-logo-png-favpng-nRr1DmYq3SNYSLN8571CHQTEG.jpg"
                            alt="Phim hay 2021- Xem phim hay nhất" />
                    </div>
                    Liên hệ QC: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                        data-cfemail="e5958d8c888d849ccb868aa58288848c89cb868a88">[email&#160;protected]</a>
                </div>
            </div>
        </div>
    </footer>
    <div id='easy-top'></div>

    <script type='text/javascript' src='{{ url('') }}/js-client/bootstrap.min.js?ver=5.7.2' id='bootstrap-js'>
    </script>
    <script type='text/javascript' src='{{ url('') }}/js-client/owl.carousel.min.js?ver=5.7.2' id='carousel-js'>
    </script>
    <script type='text/javascript' src='{{ url('') }}/js-client/halimtheme-core.min.js?ver=1626273138'
        id='halim-init-js'></script>

    <style>
        #overlay_mb {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99999;
            cursor: pointer
        }

        #overlay_mb .overlay_mb_content {
            position: relative;
            height: 100%
        }

        .overlay_mb_block {
            display: inline-block;
            position: relative
        }

        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 600px;
            height: auto;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center
        }

        #overlay_mb .overlay_mb_content .cls_ov {
            color: #fff;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 999999;
            font-size: 14px;
            padding: 4px 10px;
            border: 1px solid #aeaeae;
            background-color: rgba(0, 0, 0, 0.7)
        }

        #overlay_mb img {
            position: relative;
            z-index: 999
        }

        @media only screen and (max-width: 768px) {
            #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                width: 400px;
                top: 3%;
                transform: translate(-50%, 3%)
            }
        }

        @media only screen and (max-width: 400px) {
            #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                width: 310px;
                top: 3%;
                transform: translate(-50%, 3%)
            }
        }
    </style>

    <style>
        #overlay_pc {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99999;
            cursor: pointer;
        }

        #overlay_pc .overlay_pc_content {
            position: relative;
            height: 100%;
        }

        .overlay_pc_block {
            display: inline-block;
            position: relative;
        }

        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 600px;
            height: auto;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #overlay_pc .overlay_pc_content .cls_ov {
            color: #fff;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 999999;
            font-size: 14px;
            padding: 4px 10px;
            border: 1px solid #aeaeae;
            background-color: rgba(0, 0, 0, 0.7);
        }

        #overlay_pc img {
            position: relative;
            z-index: 999;
        }

        @media only screen and (max-width: 768px) {
            #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                width: 400px;
                top: 3%;
                transform: translate(-50%, 3%);
            }
        }

        @media only screen and (max-width: 400px) {
            #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                width: 310px;
                top: 3%;
                transform: translate(-50%, 3%);
            }
        }
    </style>

    <style>
        .float-ck {
            position: fixed;
            bottom: 0px;
            z-index: 9
        }

        * html .float-ck

        /* IE6 position fixed Bottom */
            {
            position: absolute;
            bottom: auto;
            top: expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||0)-(parseInt(this.currentStyle.marginBottom, 10)||0)));
        }

        #hide_float_left a {
            background: #0098D2;
            padding: 5px 15px 5px 15px;
            color: #FFF;
            font-weight: 700;
            float: left;
        }

        #hide_float_left_m a {
            background: #0098D2;
            padding: 5px 15px 5px 15px;
            color: #FFF;
            font-weight: 700;
        }

        span.bannermobi2 img {
            height: 70px;
            width: 300px;
        }

        #hide_float_right a {
            background: #01AEF0;
            padding: 5px 5px 1px 5px;
            color: #FFF;
            float: left;
        }
    </style>
</body>

</html>
