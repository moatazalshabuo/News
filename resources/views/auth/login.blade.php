<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>تسجيل الدخول</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }} ">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }} ">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }} ">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }} " id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }} " id="darkTheme" disabled="">
    <style type="text/css" id="operaUserStyle"></style>
</head>

<body class="light rtl">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('login') }}">
                @csrf
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	"></polygon>
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	"></polygon>
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	"></polygon>
                        </g>
                    </svg>
                </a>
                <h1 class="h6 mb-3">Sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">البريد الالكتروني</label>
                    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Email address" required=""
                        autofocus="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">كلمة المرور</label>
                    <input type="password" id="inputPassword"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button>
                <p class="mt-5 mb-3 text-muted">©Desert Technology 2023</p>
            </form>
        </div>
    </div>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js')}}) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
</body>

</html>

