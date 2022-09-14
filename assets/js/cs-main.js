// Coming Soon JS
(function ($) {
    "use strict";

    $('.slide').each(function(){
        var delay = 7000;
        var speed = 1000;
        var itemSlide = $(this).find('.slide-item');
        var nowSlide = 0;

        $(itemSlide).hide();
        $(itemSlide[nowSlide]).show();
        nowSlide++;
        if(nowSlide >= itemSlide.length) {nowSlide = 0;}

        setInterval(function(){
            $(itemSlide).fadeOut(speed);
            $(itemSlide[nowSlide]).fadeIn(speed);
            nowSlide++;
            if(nowSlide >= itemSlide.length) {nowSlide = 0;}
        },delay);
    });
        
})(jQuery);