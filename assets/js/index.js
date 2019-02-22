(function ($) {

    'use strict';

    $(document).ready(function () {

        

        // Init here.
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
                    // smoothState.restartCSSAnimations();
                }
            },
            onReady: {
                duration: 0,
                render: function ($container, $newContent) {
                    $main.html($newContent);
                    startMarquee();
                    console.log("ready state");
                }
            },
        }).data('smoothState');

        startMarquee();

        // Marquee (only visible on home page)
        function startMarquee() {
            $('.notices--marquee').marquee({
                duration: 15000,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true,
                startVisible: true
            });
        }



        
    });

}(jQuery));


