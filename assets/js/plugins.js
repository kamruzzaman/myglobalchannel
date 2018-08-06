// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


/*slider bannar*/

function unleashSlider(container, interval, fadeTime) {

    var element = container;

    if(interval == null) {
        var interval = 5000; // set the interval between fades
    }

    if(fadeTime == null) {
        var fadeTime = 1000; // set the fade time
    }

    slideOut(element);

    function slideOut(element, looping) { // slideOut Functionality

        if(looping != null) { // if looping already
            $slide = element; // $slide = the next slide
        } else { // otherwise the slide to fade out is the first child of the container
            $slide = $(element).find(">:first-child");
        }

        // grab the slide, delay using interval, then fade out
        $slide
            .delay(interval)
            .fadeOut(fadeTime, slideIn);

        // once faded out, callback to SlideIn for next slide

    }

    function slideIn() {
        var $nextSlide = $(this).next(); // get next slide

        if ($nextSlide.length == 0) { // if end of slides

            $firstSlide = $(this).parent().find(">:first-child"); // "next slide" return to first child of the slideshow

            $firstSlide.fadeIn(fadeTime); // fade in the original slide

            slideOut($firstSlide, true); // now run the slideOut again

        } else {
            // if there is a next slide
            $nextSlide.fadeIn(fadeTime); // fade it in

            slideOut($nextSlide, true); // then run the fadeOut

        }
    }
}

/*slider bannar*/