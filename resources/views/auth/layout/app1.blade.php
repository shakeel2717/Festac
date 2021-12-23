<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ env('APP_DESC') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/brand/favi.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custome.css') }}">
</head>

<body style="background-color: #0B0D2D">
    <main id="content" role="main" class="main">
        <div class="container py-5 py-sm-8" #313463>
            {{-- <a class="d-flex justify-content-center mb-5" href="index.html">
                <img class="z-index-2" src="{{ asset('assets/img/brand/logo-light.svg') }}"
                alt="Image Description"
                style="width: 12rem;">
            </a> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-lg mb-5 karsten-back">
                        <div class="card-body">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            $('.js-toggle-password').each(function() {
                new HSTogglePassword(this).init()
            });
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="{{ asset('assets/vendor/babel-polyfill/polyfill.min.js') }}"><\/script>');
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <x-alert />
</body>

</html>
