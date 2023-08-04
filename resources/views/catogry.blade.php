<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>{{ $news[0]->catogry->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('asset/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">


    <!-- script
   ================================================== -->
    <script src="{{ asset('asset/js/modernizr.js') }}"></script>
    <script src="{{ asset('asset/js/pace.min.js') }}"></script>

    <!-- favicons
 ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        .pagination .page-item {
            font-family: "montserrat-bold", sans-serif;
            font-size: 15px;
            line-height: 24px;
            display: inline-block;
            padding: 6px 12px;
            height: 36px;
            margin-right: 6px;
            margin-bottom: 9px;
            color: #2b2b2b;
            background-color: #dbdbdb;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .main-navigation li {
            position: relative;
            display: inline-block;
            float: right;
            margin-left: 22px;
            padding: 0;
        }

        @media only screen and (max-width: 768px) {
            .main-navigation li {
                position: relative;
                display: block;
                float: none;
                margin-left: 22px;
                padding: 0;
            }
        }

        header .logo {
            position: absolute;
            left: 90%;
            top: 6px;
            z-index: 601;
        }


        #main-nav-wrap {
            display: table;
            float: left;
            padding-left: 85px;
        }

        @media only screen and (max-width: 768px) {
            #main-nav-wrap {
                display: block;
                width: 100%;
                float: none;
                position: absolute;
                margin: 0;
                padding: 0;
                top: -24px;
                right: 0;
                z-index: 600;
            }
        }

        @media only screen and (max-width: 768px) {
            .triggers {
                left: 20px;
            }
        }

        @media only screen and (max-width: 768px) {
            header .logo {
            position: absolute;
            left: 80%;
            top: 6px;
            z-index: 601;
        }

            .triggers .menu-toggle {
                display: block;
                width: 40px;
                height: 40px;
                position: absolute;
                top: 50%;
                left: 0;
            }
        }
    </style>
</head>

<body id="top">

    <!-- header
   ================================================== -->
   <header class="short-header" style="background: #DBDBDB url('{{ asset('images/escheresque_@2X.png') }}') repeat;">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="{{ route('home') }}" style="background-image:url('{{ asset('images/logo.jpg') }}');;">مجلة وادي
                الشاطئ الاخبارية</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li class="current"><a href="{{ route('home') }}" title="">الرئيسية</a></li>
                @foreach ($catogries as $key => $item)
                    @if ($key < 3)
                        <li><a href="{{ route('cat-single', $item->id) }}" title="">{{ $item->name }}</a>
                        </li>
                    @endif
                @endforeach

                <li class="has-children">
                    <a href="" title="">الاقسام</a>
                    <ul class="sub-menu">
                        @foreach ($catogries as $key => $item)
                            @if ($key > 3)
                                <li><a href="{{ route('cat-single', $item->id) }}"
                                        title="">{{ $item->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav> <!-- end main-nav-wrap -->

        <div class="search-wrap">


            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers">
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

</header> <!-- end header -->



    <!-- masonry
   ================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                <div class="brick entry featured-grid animate-this">
                    <div class="entry-content">
                        <div id="featured-post-slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                            style="background-image:url('{{ asset('images/' . $news[0]->image_1) }}');;">
                                        </div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li>{{ $news[0]->created_at }}</li>
                                                <li><a href="#" class="author"></a></li>
                                            </ul>

                                            <h1 class="slide-title"><a href="single-standard.html"
                                                    title="">{{ $news[0]->title }}</a></h1>
                                        </div>

                                    </div>
                                </li> <!-- end slide -->

                            </ul> <!-- end slides -->
                        </div> <!-- end featured-post-slider -->
                    </div> <!-- end entry content -->
                </div>
                @foreach ($news as $kay => $item)
                    @if ($kay != 0)
                        <article class="brick entry format-standard animate-this">

                            <div class="entry-thumb">
                                <a href="{{ route('news-single',$item->id) }}" class="thumb-link">
                                    <img src="{{asset('images/'.$item->image_1)}}" alt="building">
                                </a>
                            </div>

                            <div class="entry-text">
                                <div class="entry-header">

                                    <div class="entry-meta">
                                        <span class="cat-links">
                                            <a href="{{ route('cat-single',$item->catogry->id) }}">{{ $item->catogry->name }}</a>
                                            {{-- <a href="#">Photography</a> --}}
                                        </span>
                                    </div>

                                    <h1 class="entry-title"><a href="{{ route('news-single',$item->id) }}">{{ $item->title }}</a>
                                    </h1>

                                </div>
                                <div class="entry-excerpt">
                                        {{ substr($item->description,0,150) }}
                                </div>
                            </div>

                        </article> <!-- end article -->
                    @endif
                @endforeach



            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->

        <div class="row">

            {!! $news->links() !!}

        </div>

    </section> <!-- end bricks -->


    <!-- footer
   ================================================== -->
    <footer>


        <div class="footer-bottom">
            <div class="row">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright Desert-Technology 2023</span>
                        <span>Design by <a>Desert-Technology</a></span>
                    </div>

                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i
                                class="icon icon-arrow-up"></i></a>
                    </div>
                </div>

            </div>
        </div> <!-- end footer-bottom -->

    </footer>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
   ================================================== -->
    <script src="{{ asset('asset/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>

</body>

</html>
