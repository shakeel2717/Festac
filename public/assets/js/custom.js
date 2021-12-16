$(document).on('ready', function () {
    $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
        $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
    });

    var sidebar = $('.js-navbar-vertical-aside').hsSideNav();
    $('.js-nav-tooltip-link').tooltip({
        boundary: 'window'
    })

    $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
        if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
        }
    });
    $('.js-hs-unfold-invoker').each(function () {
        var unfold = new HSUnfold($(this)).init();
    });

    $('.js-form-search').each(function () {
        new HSFormSearch($(this)).init()
    });
});

if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
    '<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
