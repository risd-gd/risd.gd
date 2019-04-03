(function ($) {

    'use strict';

    $(document).ready(function () {

        // This chunk of code uses Smoothstate.js for the tabbed page transitions
        var $body = $('body'),
            $main = $('#anim--container'),
            $site = $('html, body'),
            transition = 'top',
            smoothState;

        smoothState = $main.smoothState({
            onBefore: function($anchor, $container) {
                var current = $('[data-current]').first().data('current'),
                    currentPane = $('#pane--' + current),
                    target = $anchor.data('target'),
                    targetPane = $('#pane--' + target),
                    contentPane = $('#content');

                if (current != target) {
                    currentPane.removeClass('__isactive');
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
                    $site.animate({scrollTop: 0});
                }
            },
            onReady: {
                duration: 0,
                render: function ($container, $newContent) {

                    // This is where we load the new page, thus the redundant function calls
                    $main.html($newContent);
                    startMarquee();
                    startCarousel();
                }
            },
        }).data('smoothState');

        startMarquee();
        startCarousel();

        // Marquee (only visible on home page)
        function startMarquee() {
            $('.notices--marquee').marquee({
                speed: 30,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true,
                startVisible: true
            });
        }

        // This inits the carousel on each page
        function startCarousel() {
            $('.carousel').flickity({
                cellAlign: 'left',
                contain: true,
                adaptiveHeight: true,
                wrapAround: true,
                autoPlay: 3000
              });
        }



        
    });

}(jQuery));


