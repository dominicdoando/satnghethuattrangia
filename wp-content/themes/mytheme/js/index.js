//===========================================MENU
(function ($) {
    $.fn.menumaker = function (options) {

        var menu = $(this),
            settings = $.extend({
//                title: "Menu",
                title:" ",
                format: "dropdown",
                sticky: false
            }, options);
//' + settings.title + '
        return this.each(function () {
            menu.prepend('<div id="menu-button">' + settings.title + '</div>');
            $(this).find("#menu-button").on('click', function () {
                $(this).toggleClass('menu-opened');
                  $('body').toggleClass('body_menu');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.hide().removeClass('open');
                } else {
                    mainmenu.show().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });

            menu.find('li ul').parent().addClass('has-sub');

            multiTg = function () {
                menu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                menu.find('.submenu-button').on('click', function () {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').hide();
                    } else {
                        $(this).siblings('ul').addClass('open').show();
                    }
                });
            };

            if (settings.format === 'multitoggle') multiTg();
            else menu.addClass('dropdown');

            if (settings.sticky === true) menu.css('position', 'fixed');

            resizeFix = function () {
                if ($(window).width() > 1199) {
                    menu.find('ul').show();
                }

                if ($(window).width() <= 1199) {
                    menu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix, multiTg);

        });
    };
})(jQuery);

$(document).ready(function () {
        $("a.openSearch").click(function () {
        $("#box_search").toggle(300, function () {});
        $("main").toggleClass("margintop30");

    });
        if($(window).width() < 1200){
            $("#gioiThieu .container .row").prepend($("div.header"));

        }
});

//=========================================IMG RESPONSIVE
$(window)
    .load(function () {
        $(".khungAnhCrop img")
            .each(function () {
                $(this)
                    .removeClass("wide tall")
                    .addClass((this.width / this.height > $(this).parent().width() / $(this).parent().height()) ?
                        "wide" :
                        "tall");
            });
    });
//===================================BACK TO TOP
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('#backtotop').fadeIn(500);
        } else {
            $('#backtotop').fadeOut(500);
        }
    });
    $('#backtotop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
    });

(function ($) {
    $(document).ready(function () {
        $("#menu").menumaker({
            title: "",
            format: "multitoggle"
        });

    });
})(jQuery);
//=====================================MENU
