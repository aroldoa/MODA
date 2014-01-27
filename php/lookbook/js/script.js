/*-------------------------------------------*
 * translations plugin
 *-------------------------------------------*/
;
(function($) {
    var $window = $(window);

    $.fn.translation = function(transition_duration, transition_effect) {
        
        
        var $this = $(this);
        var top  = 0;
        var count = 0;
        max_width = $(this).width()/2;
        //overlay each image one after another initially
        $this.each(function() {
            if(count%2) $(this).css({'position':'relative','left':max_width+'px'});
            else {
                $(this).css({'position':'relative','left':'0px'});
            }
            if(count !== 0) $(this).css({'top':top+'px'});
            top -= Math.random() * (100) + 100;
            count++;
        });
        var previous_pos = 0;

        // setup defaults if arguments aren't specified
        if (arguments.length < 1 || transition_duration === null)
            transition_duration = "5";
        if (arguments.length < 2 || transition_effect === null)
            transition_effect = "linear";
        // function to be called whenever the window is scrolled or resized
        function update(event) {
            var pos = $window.scrollTop();
            var y = 0;
            var count = 0;
            $this.each(function() {
                var rand = Math.random() * (100) + 100;
                if (pos > previous_pos) {
                    y = -pos;
                }else {
                    y = -previous_pos;
                }
                if(count !== 0)  y -= rand;
                

                count++;
                y += "px";

                /*-------------------------------------------*
                 * for chrome
                 *-------------------------------------------*/
                $(this).css({'-webkit-transition': 'all ' + transition_duration + 's ' + transition_effect});
                $(this).css({'-webkit-transform': 'translate(0px, ' + y + ')'});
                /*-------------------------------------------*
                 * for mozilla
                 *-------------------------------------------*/
                $(this).css({'-moz-transition': 'all ' + transition_duration + 's ' + transition_effect});
                $(this).css({'-moz-transform': 'translate(0px, ' + y + ')'});
                /*-------------------------------------------*
                 * for opera
                 *-------------------------------------------*/
                $(this).css({'-o-transition': 'all ' + transition_duration + 's ' + transition_effect});
                $(this).css({'-o-transform': 'translate(0px, ' + y + ')'});
                /*-------------------------------------------*
                 * for IE
                 *-------------------------------------------*/
                $(this).css({'-ms-transition': 'all ' + transition_duration + 's ' + transition_effect});
                $(this).css({'-ms-transform': 'translate(0px, ' + y + ')'});
                /*-------------------------------------------*
                 * for all
                 *-------------------------------------------*/
                $(this).css({'transition': 'all ' + transition_duration + 's ' + transition_effect});
                $(this).css({'transform': 'translate(0px, ' + y + ')'});
            });
            previous_pos = pos;
        }
        /*-------------------------------------------*
         * bind event scroll
         *-------------------------------------------*/
        $window.bind('scroll', update).resize(update);
        update();
    };
})(jQuery);

/*-------------------------------------------*
 * main script
 *-------------------------------------------*/
jQuery(document).ready(function($) {
    /*-------------------------------------------*
     * jQuery translation effect call
     * you can set transition duration and transition effect.
     * By default transition duration = 5s and transition effect = "ease-out"
     * to change it just pass in translation().
     *default call = translation();
     *-------------------------------------------*/
    $('.animation').translation(4, "cubic-bezier(0.19, 1, 0.22, 1)");
});
