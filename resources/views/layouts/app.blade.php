<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
</head>

<body class="horizontal light rtl ">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
            <div class="container-fluid">
                <a class="navbar-brand mx-lg-1 mr-0" href="">
                    ادارة التحكم المجلة
                </a>
                <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
                    <i class="fe fe-menu navbar-toggler-icon"></i>
                </button>
                <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
                    <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                        <i class="fe fe-x"><span class="sr-only"></span></i>
                    </a>
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ml-lg-2">المستخدمين</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
                                <a class="nav-link pl-lg-2" href="{{ route('users.index') }}"><span
                                        class="ml-1">عرض
                                        المستخدمين</span></a>
                                <a class="nav-link pl-lg-2" href="{{ route('users.create') }}"><span
                                        class="ml-1">اضافة
                                        مستخدم</span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ml-lg-2">الاقسام الخبارية</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
                                <a class="nav-link pl-lg-2" href="{{ route('catogries.index') }}"><span
                                        class="ml-1">عرض
                                        الاقسام الاخبارية</span></a>
                                <a class="nav-link pl-lg-2" href="{{ route('catogries.create') }}"><span
                                        class="ml-1">اضافة
                                        قسم اخباري</span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ml-lg-2">الاخبار</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
                                <a class="nav-link pl-lg-2" href="{{ route('news.index') }}"><span
                                        class="ml-1">عرض
                                        عرض الاخبار</span></a>
                                <a class="nav-link pl-lg-2" href="{{ route('news.create') }}"><span
                                        class="ml-1">اضافة
                                         خبر</span></a>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @yield('content')
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src='{{ asset('js/daterangepicker.js') }}'></script>
    <script src='{{ asset('js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/d3.min.js') }}"></script>
    <script src="{{ asset('js/topojson.min.js') }}"></script>
    <script src="{{ asset('js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('js/gauge.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
    <script src='{{ asset('js/jquery.mask.min.js') }}'></script>
    <script src='{{ asset('js/select2.min.js') }}'></script>
    <script src='{{ asset('js/jquery.steps.min.js') }}'></script>
    <script src='{{ asset('js/jquery.validate.min.js') }}'></script>
    <script src='{{ asset('js/jquery.timepicker.js') }}'></script>
    <script src='{{ asset('js/dropzone.min.js') }}'></script>
    <script src='{{ asset('js/uppy.min.js') }}'></script>
    <script src='{{ asset('js/quill.min.js') }}'></script>
    <script src="{{ asset('js/apps.js') }}"></script>
</body>

</html>
