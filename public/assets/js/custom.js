$(document).on('ready', function () {

    $("#search").keyup(function () {
        var search = $(this).val();
        $("table tbody tr").each(function () {
            if ($(this).text().search(new RegExp(search, "i")) < 0) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
    });

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

$(document).on('ready', function () {
    // INITIALIZATION OF QUANTITY COUNTER
    // =======================================================
    $('.js-quantity-counter').each(function () {
        var quantityCounter = new HSQuantityCounter($(this)).init();
    });
});
