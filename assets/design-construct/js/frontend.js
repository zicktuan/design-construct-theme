(function($) {
    "use strict";
    window.azh = $.extend({}, window.azh);
    function fullWidthSection() {
        var $elements = $('[data-full-width="true"]');
        $.each($elements, function(key, item) {
            var $el = $(this);            
            var $el_full = $("<div></div>")
            $el.after($el_full);
            var el_margin_left = parseInt($el.css("margin-left"), 10);
            var el_margin_right = parseInt($el.css("margin-right"), 10);
            var offset = 0 - $el_full.offset().left - el_margin_left;
            var width = $(window).width();
            $el.css("display", "none");
            if ($el.css({
                position: "relative",
                left: offset,
                "box-sizing": "border-box",
                width: $(window).width()
            }), !$el.data("stretch-content")) {
                var padding = -1 * offset;
                0 > padding && (padding = 0);
                var paddingRight = width - padding - $el_full.width() + el_margin_left + el_margin_right;
                0 > paddingRight && (paddingRight = 0);
                $el.css({
                    "padding-left": padding + "px",
                    "padding-right": paddingRight + "px"
                });
            }
            $el.css("display", "");
            $(document).trigger("azh-full-width-section-single", {
                el: $el,
                offset: offset,
                marginLeft: el_margin_left,
                marginRight: el_margin_right,
                elFull: $el_full,
                width: width
            });
            $el_full.remove();
        });
        $(document).trigger("azh-full-width-section", $elements);        
    }
    function fullHeightSection() {
        var $element = $('[data-full-height="true"]:first');
        if ($element.length) {
            var $window, windowHeight, offsetTop, fullHeight;
            $window = $(window);
            windowHeight = $window.height();
            offsetTop = $element.offset().top;
            offsetTop < windowHeight && (fullHeight = 100 - offsetTop / (windowHeight / 100), $element.css("min-height", fullHeight + "vh"));
        }
        $(document).trigger("azh-full-height-section", $element);
    }
    $(function() {
        $(window).off("resize.azh-fullWidthSection").on("resize.azh-fullWidthSection", fullWidthSection).off("resize.azh-fullHeightSection").on("resize.azh-fullHeightSection", fullHeightSection);
        fullWidthSection();
        fullHeightSection();
        if ('tabs' in $.fn) {
            $('.azexo-tabs').each(function() {
                if (!$(this).tabs('instance')) {
                    $(this).tabs();
                }
            });
        }
        if ('accordion' in $.fn) {
            $('.azexo-accordion').each(function() {
                if (!$(this).accordion('instance')) {
                    $(this).accordion({
                        header: ".accordion-section > h3",
                        autoHeight: false,
                        heightStyle: "content",
                        active: $(this).data('active-section'),
                        collapsible: $(this).data('collapsible'),
                        navigation: true,
                        animate: 200
                    });
                }
            });
        }
    });
})(jQuery);