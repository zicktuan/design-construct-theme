jQuery(document).ready(function($) {
    'use strict';

    $(function() {
        var $window = $(window); //Window object
//        var scrollTime = 0.4; //Scroll time
//        var scrollDistance = 220; //Distance. Use smaller value for shorter scroll and greater value for longer scroll
//        $window.on("mousewheel DOMMouseScroll", function(event) {
//            event.preventDefault();
//            var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
//            var scrollTop = $window.scrollTop();
//            var finalScroll = scrollTop - parseInt(delta * scrollDistance);
//            TweenMax.to($window, scrollTime, {
//                scrollTo: {
//                    y: finalScroll,
//                    autoKill: true
//                },
//                ease: Power1.easeOut, //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
//                autoKill: true,
//                overwrite: 5
//            });
//        });

        $('a.pagescroll[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });

        /* ---------------------------------------------- /*
		 * delegate calls to data-toggle="lightbox"
		/* ---------------------------------------------- */
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return
                        console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return
                        console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                    }
                }
            });
        });
        /* ---------------------------------------------- /*
		 * loader
		/* ---------------------------------------------- */
        $(".animsition-overlay").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1700,
            outDuration: 1700,
            linkElement: '.animsition-link',
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            unSupportCss: ['animation-duration', '-webkit-animation-duration', '-o-animation-duration'],
            //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay: false,
            overlayClass: 'animsition-overlay-slide',
            overlayParentElement: 'body'
        });


        /* ---------------------------------------------- /*
		 * navigation
		/* ---------------------------------------------- */
        // Fix navigation when reach top 
/*
        $(function() {
            $('#navwrap').height($("#nav").height());
            $('#nav').affix({
                offset: {
                    top: $('#navwrap').offset().top
                }
            });
        });
*/
        // Change from transparent to white 
        $(window).scroll(function() {
            if ($(this).scrollTop() > 150) {
                $('.transparent-white').removeClass('navbar-transparent'),
                    $('.transparent-white').addClass('navbar-default');
            } else {
                $('.transparent-white').removeClass('navbar-default'),
                    $('.transparent-white').addClass('navbar-transparent');
            }
        });
        /*// Change from inverse to white 
        $(window).scroll(function() {
            if ($(this).scrollTop() > 150) {
                $('.nav-change.navbar-inverse').removeClass('navbar-inverse'),
                    $('.nav-change').addClass('navbar-default');
            } else {
                $('.nav-change.navbar-default').removeClass('navbar-default'),
                    $('.nav-change').addClass('navbar-inverse');
            }
        });
        // Add size change on scroll 
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 150) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });*/
        /* ---------------------------------------------- /*
		 * collapse nav after 
		/* ---------------------------------------------- */
        $(document).on('click', '.navbar-collapse.in', function(e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
        /* ---------------------------------------------- /*
		 * lightbox
		/* ---------------------------------------------- */
        //Programatically call
        $('#open-image').click(function(e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function(e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    var a = this.modal_content.find('.modal-footer a');
                    if (a.length > 0) {
                        a.click(function(e) {
                            e.preventDefault();
                            this.navigateTo(2);
                        }.bind(this));
                    }
                }
            });
        });
    });
    $(window).resize(function() {
        // global vars
        var winHeight = $(window).height();
        // set initial div height / width
        $('.hero, .full-height').css({
            'height': winHeight,
        });
        // make sure div stays full width/height on resize
    });
    $('.half-height').height($('.half-height').width() / 2);
    $(window).resize(function() {
        $('.half-height').height($('.half-height').width() / 2);
    });
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if (!isMobile.any()) $(function() {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 50,
            responsive: true
        });
    });
    // Parallax - tuts - to any dom - data-image-src="path/image" data-stellar-background-ratio="0.4" 
    $.stellar({
        horizontalScrolling: false,
        responsive: true
    });
    /**    add image to the element via data atribute and class="bg-image"

 *****************************************************/
    $(".bg-image").css('background', function() {
        var bg = ('url(' + $(this).data("image-src") + ') no-repeat center center');
        return bg;
    });
    // fit image 
    $(".bg-image").css("background-size", "cover");
    // count data init
    $('.timer').countTo();
    // Tooltip init
    $("body").tooltip({
        selector: '[data-toggle=tooltip]'
    });
    // Accordion icon change
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".fa.fa-plus").removeClass("fa-lus").addClass("fa-minus");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".fa.fa-minus").removeClass("fa-minus").addClass("fa-plus");
    });

    /**   Carousels 

 *****************************************************/
    $("#owl-carousel-1").owlCarousel({
        items: 1,
        autoPlay: false,
        autoHeight: true,
        singleItem: true,
        stopOnHover: true,
        pagination: false,
        navigation: false
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
    $("#owl-slider").owlCarousel({
        navigation: false,
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
    var owl = $("#owl-demo");
    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 2],
            [700, 2],
            [1000,
             2
            ],
            [1200,
             2
            ],
            [1400,
             3
            ],
            [1600,
             3
            ]
        ],
        navigation: false,
        pagination: false,
        autoHeight: false
    });
    var owl = $("#shoots");
    owl.owlCarousel({
        itemsCustom: [
            [0, 2],
            [450, 1],
            [600, 2],
            [700, 3],
            [1000,
             4
            ],
            [1200,
             4
            ],
            [1400,
             4
            ],
            [1600,
             4
            ]
        ],
        navigation: false,
        pagination: true,
        autoPlay: 3000, // set slide intervals here
        stopOnHover: true
    });
    $("#owl-portfolio").owlCarousel({
        autoPlay: 12000, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [
            1199, 3
        ],
        itemsDesktopSmall: [
            979, 3
        ]
    });
    var owl = $("#blog-carousel");
    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 2],
            [700, 2],
            [1000,
             2
            ],
            [1200,
             3
            ],
            [1400,
             3
            ],
            [1600,
             3
            ]
        ],
        navigation: false
    });
    var sync1 = $("#custm-1");
    var sync2 = $("#custm-2");
    sync1.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: false,
        pagination: false,
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
    });
    sync2.owlCarousel({
        items: 4,
        itemsDesktop: [
            1199, 4
        ],
        itemsDesktopSmall: [
            979, 4
        ],
        itemsTablet: [
            768, 4
        ],
        itemsMobile: [
            479, 1
        ],
        pagination: false,
        responsiveRefreshRate: 100,
        afterInit: function(el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });

    function syncPosition(el) {
        var current = this.currentItem;
        $("#custm-2").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
        if ($("#custm-2").data("owlCarousel") !== undefined) {
            center(current)
        }
    }
    $("#custm-2").on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });

    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }
        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
        }
    }

    /**    Change text on contact button when open

 *************************************************** **/
    $('.btn-contact').click(function() {
        var $this = $(this);
        $this.toggleClass('Open contact form');
        if ($this.hasClass('Open contact form')) {
            $this.text('Close me if you done');
        } else {
            $this.text('Open contact form');
        }
    });

    jQuery('#contactform').submit(function() {
        var action = $(this).attr('action');
        jQuery("#message").slideUp(750, function() {
            jQuery('#message').hide();
            jQuery.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                comments: $('#comments').val()
            }, function(data) {
                document.getElementById('message').innerHTML = data;
                $('#message').slideDown('slow');
                if (data.match('success') != null) $('#contactform').slideUp('slow');
            });
        });
        return false;
    });

}); // END OF CODES


(function($, window, document, undefined) {
    'use strict';

    var gridContainer = $('#portfolio-3'),
        filtersContainer = $('#filters-portfolio-3'),
        wrap, filtersCallback;


    /*******************************
        init cubeportfolio
     ****************************** */
    gridContainer.cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        mediaQueries: [{
            width: 1100,
            cols: 3
        }, {
            width: 800,
            cols: 3
        }, {
            width: 500,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'rotateSides',
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: 'responsive',
        caption: 'overlayBottomPush',
        displayType: 'sequentially',
        displayTypeSpeed: 100,


        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
        },

        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'below',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 5000
            })
                .done(function(result) {

                t.updateSinglePageInline(result);

            })
                .fail(function() {
                t.updateSinglePageInline("Error! Please refresh the page!");
            });
        }
    });


    /*********************************
        add listener for filters
     *********************************/
    if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');

        wrap.on({
            'mouseover.cbp': function() {
                wrap.addClass('cbp-l-filters-dropdownWrap-open');
            },
            'mouseleave.cbp': function() {
                wrap.removeClass('cbp-l-filters-dropdownWrap-open');
            }
        });

        filtersCallback = function(me) {
            wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
            wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
            me.addClass('cbp-filter-item-active');
            wrap.trigger('mouseleave.cbp');
        };
    } else {
        filtersCallback = function(me) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        };
    }

    filtersContainer.on('click.cbp', '.cbp-filter-item', function() {

        var me = $(this);

        if (me.hasClass('cbp-filter-item-active')) {
            return;
        }

        // get cubeportfolio data and check if is still animating (reposition) the items.
        if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
            filtersCallback.call(null, me);
        }

        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function() {});
    });


    /*********************************
        activate counter for filters
     *********************************/
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function() {
        // read from url and change filter active
        var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
            item;
        if (match !== null) {
            item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
            if (item.length) {
                filtersCallback.call(null, item);
            }
        }
    });


    /*********************************
        add listener for load more
     *********************************/
    $('.cbp-l-loadMore-button-link').on('click.cbp', function(e) {
        e.preventDefault();
        var clicks, me = $(this),
            oMsg;

        if (me.hasClass('cbp-l-loadMore-button-stop')) {
            return;
        }

        // get the number of times the loadMore link has been clicked
        clicks = $.data(this, 'numberOfClicks');
        clicks = (clicks) ? ++clicks : 1;
        $.data(this, 'numberOfClicks', clicks);

        // set loading status
        oMsg = me.text();
        me.text('LOADING...');

        // perform ajax request
        $.ajax({
            url: me.attr('href'),
            type: 'GET',
            dataType: 'HTML'
        }).done(function(result) {
            var items, itemsNext;

            // find current container
            items = $(result).filter(function() {
                return $(this).is('div' + '.cbp-loadMore-block' + clicks);
            });

            gridContainer.cubeportfolio('appendItems', items.html(),
                                        function() {
                // put the original message back
                me.text(oMsg);

                // check if we have more works
                itemsNext = $(result).filter(function() {
                    return $(this).is('div' + '.cbp-loadMore-block' + (clicks + 1));
                });

                if (itemsNext.length === 0) {
                    me.text('NO MORE WORKS');
                    me.addClass('cbp-l-loadMore-button-stop');
                }

            });
        }).fail(function() {
            // error
        });

    });

})(jQuery, window, document);

/****/
google.maps.event.addDomListener(window, 'load', init);

            var map;

            function init() {
                var mapOptions = {
                    center: new google.maps.LatLng(38.8968646, -77.0352825),
                    zoom: 12,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.SMALL,
                    },
                    disableDoubleClickZoom: false,
                    mapTypeControl: false,
                    scaleControl: true,
                    scrollwheel: false,
                    streetViewControl: true,
                    draggable: true,
                    overviewMapControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e9e9e9"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dedede"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#333333"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        }
                    ],

                }

                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);

                var locations = [
                    ['Sarajevo 71000 Bosnia & Herzegovina', 38.896683, -77.033465],
                    ['Tuzla 75000 Bosnia & Herzegovina', 38.88005, -76.984134]
                ];
                var infowindow = new google.maps.InfoWindow({
                    content: "Loading..."
                });
                var myIcon = new google.maps.MarkerImage(azexo.templateurl + "/azh/agency/images/map-marker.png", null, null, null, new google.maps.Size(46, 46));
                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        content: locations[i][0],
                        icon: myIcon,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        animation: google.maps.Animation.DROP,
                        optimized: false,
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.content);
                        infowindow.open(map, this);
                    });
                }
            }
