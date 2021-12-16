<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ env('APP_DESC') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
</head>

<body class="d-flex align-items-center min-h-100">

    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
        <div class="d-flex d-lg-none justify-content-center">
            <a href="index.html">
                <img class="w-100" src="{{ asset('assets/img/brand/logo-dark.svg') }}" alt="Image Description"
                    style="min-width: 7rem; max-width: 7rem;">
            </a>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
        <!-- Content -->
        <div class="container-fluid px-3">
            <div class="row">
                <!-- Cover -->
                <div
                    class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
                    <!-- Logo & Language -->
                    <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
                        <div class="d-none d-lg-flex justify-content-between">
                            <a href="index.html">
                                <img class="w-100" src="{{ asset('assets/img/brand/logo-dark.svg') }}" alt="Image Description"
                                    style="min-width: 7rem; max-width: 7rem;">
                            </a>
                        </div>
                    </div>
                    <!-- End Logo & Language -->

                    @yield('left')
                </div>
                <!-- End Cover -->

                <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
                    @yield('form')
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->
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
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script>
        $(document).on('ready', function () {
          // INITIALIZATION OF SELECT2
          // =======================================================
          $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
          });
        });
      </script>
</body>

</html>
