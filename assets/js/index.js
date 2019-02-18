(function ($) {

    'use strict';

    $(document).ready(function () {

        // Init here.
        var $body = $('body'),
            $main = $('#container'),
            $site = $('html, body'),
            transition = 'top',
            smoothState;

        smoothState = $main.smoothState({
            onBefore: function($anchor, $container) {
                var current = $('[data-current]').first().data('current'),
                    currentPane = $('#pane--' + current),
                    target = $anchor.data('target'),
                    targetPane = $('#pane--' + target);
                currentPane.removeClass('__isactive');
                currentPane.addClass('anim--shrink');
                targetPane.addClass('anim--expand');
            },
            onStart: {
                duration: 250,
                render: function (url, $container) {
                    // $main.addClass('__isexiting');
                    $site.animate({scrollTop: 0});
                }
            },
            onReady: {
                duration: 0,
                render: function ($container, $newContent) {
                    $container.html($newContent);
                    smoothState.restartCSSAnimations();
                }
            },
        }).data('smoothState');

    });

}(jQuery));