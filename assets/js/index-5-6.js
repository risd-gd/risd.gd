(function ($) {

    'use strict';

    $(document).ready(function () {

        // This chunk of code uses Smoothstate.js for the tabbed page transitions
        var $body = $('body'),
            $main = $('#anim--container'),
            $site = $('html, body'),
            transition = 'top',
            smoothState;

        var marquee = function() {
            var $marqueeContainer = $('.notices--marquee');

            if ($(window).width() > 700) {
                
                $marqueeContainer.marquee({
                    speed: 30,
                    gap: 0,
                    delayBeforeStart: 0,
                    direction: 'left',
                    duplicated: true,
                    startVisible: true
                });
            
            } else {
                $marqueeContainer.parent().append(`Notices`);
                $marqueeContainer.parent().removeClass(`__hasmarquee`);
                $marqueeContainer.remove();
            }
        }

        var carousel = function() {
            var $carouselContainer = $('.carousel');

            $carouselContainer.flickity({
                cellAlign: 'left',
                contain: true,
                adaptiveHeight: true,
                wrapAround: true,
                autoPlay: 3000,
                lazyLoad: true
              });
        }

        // A lot of the following code is informed by the original notices.risd.gd site
        var notices = function() {
            var $notices = $('.notice__interactive'),
                $printButton = $('.button--print'),
                $iframe = $('#printf'),
                iframeCss = $iframe.data('css');

            function expand($notice) {
                // Expand by removing and adding CSS classes
                $notices.removeClass('notice__active');
                $notice.addClass('notice__active');
            }

            function updateiframe($notice) {
                var $currentNotice = $('.notice__active');

                $iframe.contents().find("head").append("<meta charset='utf-8'>");
                $iframe.contents().find("head").append(`<link rel='stylesheet' href='${iframeCss}'>`);
                $iframe.contents().find("body").addClass("print");
                $iframe.contents().find("body").html("");
                $iframe.contents().find("body").append($currentNotice.clone());
            }

            function print(currentNotice) {
                updateiframe(currentNotice);
                
                window.frames["printf"].focus();
                window.frames["printf"].print();
            }

            updateiframe();

            $notices.click(function() {
                expand($(this));
            })

            $printButton.click(function(e) {
                e.preventDefault();
                e.stopPropagation();
                print($(this).parent().parent().parent());
            })


        }

        smoothState = $main.smoothState({
            onBefore: function($anchor, $container) {
                var current = $('[data-current]').first().data('current'),
                    currentPane = $('#pane--' + current),
                    target = $anchor.data('target'),
                    targetPane = $('#pane--' + target),
                    contentPane = $('#content');

                if (current != target) {
                    currentPane.removeClass('pane--handle__active');
                    currentPane.addClass('anim--shrink');
                    targetPane.addClass('anim--expand');
                    contentPane.addClass('anim--fadeout');
                } else {
                    contentPane.addClass('anim--fadeout');
                }
            },
            onStart: {
                duration: 500,
                render: function (url, $container) {
                    // $site.animate({scrollTop: 0});
                }
            },
            onReady: {
                duration: 0,
                render: function ($container, $newContent) {

                    // These fire when we open a new page
                    $main.html($newContent);
                    marquee();
                    carousel();
                    notices();
                }
            },
        }).data('smoothState');

        // These fire only on the first load of the site
        marquee();
        carousel();
        notices();
        
        
    });

}(jQuery));
