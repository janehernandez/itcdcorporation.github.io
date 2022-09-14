
var Site = {
    init : function(){
        //initialize scripts onload of page
        new WOW().init();
        this.mobileCss();
        this.scrollLink();
        this.navChangeColor();
        this.navigationScroll();
    },
    animateSlide : function(){
        var item = $(".owl-item.active .animating");
        //to remove display first before animation of item
        $(".remove-animation").css("visibility","hidden");
        $(".owl-item").removeClass("remove-animation");
        //add animation to the item and remove afterwards
        $( item ).each(function( index ) {
            $(this).css("visibility","visible");
            var animation = $(this).data("animate");
            $(this).toggleClass('animated').toggleClass(animation).addClass("remove-animation").addClass("slow").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',   function(){
                $('.owl-item .animating').removeClass("slideInRight flipInX fadeInUpBig fadeInDownBig fadeIn rollIn jackInTheBox");
                $('.owl-item .animating').removeClass('animated');
                $('.owl-item .animating').removeClass('slow');
            });
        });
    },
    scrollLink : function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            $("a").removeClass("active");
            $(this).addClass("active");
            var url_string = window.location.href;
            var url_param = url_string.split('/').length;

            if(url_param == 1){
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            }else{
                if (this.hash !== "") {
                    if(window.location.hash){
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){
                    
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }
                }
            }
        });
    },
    navChangeColor : function(){
        //change color of the header when scrolled
        $(document).scroll(function () {
            var $nav = $("header");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 0);
            $nav = $(".sub-menu");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 0);
        });
    },
    homepageCarousel: function(){
        $(document).ready(function() {
            //carousel at homepage setting
            $("#owlCarousel").owlCarousel({
                onTranslated        :Site.animateSlide,
                items               :1,
                loop                :true,
                autoplay            :true,
                autoplayTimeout     :7000,
                autoplaySpeed       :2000,
                dots                : false
            });
        });
    },
    productCarousel: function(){
        $(document).ready(function(){
            $("#productCarousel").owlCarousel({
                items               : 3,
                loop                : true,
                autoplay            : true,
                autoplayTimeout     : 3000,
                autoplayHoverPause  :true,
                autoplaySpeed       :2000,
                dots                : false
            });
        });
    },
    timeLine: function(){
        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);
    },
    navigationScroll: function(){
        $(window).on('resize scroll', function() {
            
            $(".section-nav").each(function() {
                var activeColor = $(this).find('.contains-sec').data('link');
                if ($(this).find('.contains-sec').visible() == true) {
                    $('a').removeClass('active');
                    $('a[data-link=' + activeColor + ']').addClass('active');
                }
            });
        });
    },
    mobileCss: function(){
        if ($(window).width() < 992) {
            $('a').removeClass('nav-hover');
        }
        if ($(window).width() < 768) {
            $('.animated').removeClass('animated ');
            $('ul.sub-menu').addClass('remove-sub');
        }
    }
}