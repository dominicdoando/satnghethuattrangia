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
    $(".overlay").click(function () {
        $(this).hide(500);
        $("#popup_map").hide(500);
    });
    $("a.search").click(function () {
        $("#box_search").toggle(300, function () {});

    });
        // SLIDER
    //     $('.banner_tchu').slick({
    //     dots: true,
    //     infinite: true,
    //     autoplay: true,
    //     speed: 1000,
    //     slidesToShow: 1, ease:'ease-in-out',
    //     arrows: true
    // });
        $('.slider_partner').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 5,
            arrows: true
        });
        $('.slider_block_video').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            autoplay:true
        });
                $('.slider_duAnNoiBat').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            autoplay:true
        });
        $('.slider_DuAn').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay:true,
          ease:'ease-in-out',
          responsive: [
          {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});
        $('.slider_baiVietKhac').slick({
            dots: false,
            infinite: true,
            rows: 2,
            slidesPerRow: 2,
            speed: 300,
            arrows: true
        });
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
        $('#backtop').fadeIn(500);
    } else {
        $('#backtop').fadeOut(500);
    }
});
$(document).ready(function(){
    $('#backtop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });

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
jQuery(function(){
    $(window).load(function() {
        $('#banner_tchu').nivoSlider({
            prevText:'',
            nextText:'',
            pauseOnHover:false,
        });
        });
        
});
