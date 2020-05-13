(function ($) {
    $.fn.InitOpenClose = function (o) {
        o = $.extend({
                maxHeight: 80
            },
            o || {});

        return this.each(function () {
            var div = $(this),
                text = $(".text", div),
                btClose = $(".btOpenClose", div);

            initOpenCloseFunction();

            function toggleParent() {
                if (text.hasClass("open")) {
                    text.css({
                        "max-height": o.maxHeight
                    }).removeClass("open");
                } else {
                    text.css({
                        "max-height": ""
                    }).addClass("open");
                }
                var altText = btClose.attr("data-alt");
                btClose.attr("data-alt", btClose.text()).text(altText);
            }

            function initOpenCloseFunction() {
                console.log(text.height() + "-" + o.maxHeight);
                if (text.height() > o.maxHeight) {
                    text.css({
                        "max-height": o.maxHeight,
                        "overflow": "hidden",
                        "display": "inline-block"
                    });
                    btClose.show();
                    btClose.unbind();
                    btClose.click(function (e) {
                        toggleParent();
                        e.preventDefault();
                    });
                } else {
                    btClose.hide();
                }
            }
            $(window)
                .resize(function () {
                    text.css("max-height", "");
                    initOpenCloseFunction();
                });
        });
    }
})(jQuery)
