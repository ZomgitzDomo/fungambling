jQuery(document).ready(function($) {

    /*-------------------------------------
| Hambuerger Menu
-------------------------------------*/

    $('div#main_navigation .fa-bars').click(function() {
        $('body').toggleClass('hamburger-expanded');
    });

    function pinned_nav() {

        var howfar = $(window).scrollTop();
        console.log(howfar);

        if (howfar > 188) {
            $('body').addClass('nav-pinned');
        } else {
            $('body').removeClass('nav-pinned');
        }
        // $('body').addClass('nav-pinned');
    }
    pinned_nav(); //executes when page loads;
    $(window).scroll(pinned_nav);

    function slideshow() {

        $('.slideshow .slide').each(function() {
            //grab src attribute of slidei mage
            var imgSrc = $(this).find('img').attr('src');

            // update slide background-color
            $(this).css({
                'background-image': 'url(' + imgSrc + ')'
            });
        });

        //initialize variable - so we can use it throughout our script
        var winWidth = 600;
        //win width detection
        function detect_winWidth() {
            winWidth = $(window).width();
        }
        detect_winWidth(); //fire off when loads
        $(window).resize(detect_winWidth); //fire off whenever someone resizes the browser

        //move everything but the first slide
        $('.slideshow .slide:gt(0)').css({'left': winWidth});
        //this will run our slideshow
        var currSlide = 0;
        var nextSlide = 0;
        var myTimer;
        function slide_sliding() {
            console.log('slideshow running test');

            //what is the next slide?
            nextSlide = currSlide + 1;
            if (nextSlide == $('.slideshow .slide').length) {
                nextSlide = 0; //reset it to the beginning of our slideshow
            }

            $('.slideshow .slide:eq(' + currSlide + ')').animate({
                'left': winWidth * -1
            }, 1500, function() {
                $('.slideshow .slide:eq(' + currSlide + ')').css({'left': winWidth});
                currSlide = nextSlide;
                myTimer = setTimeout(slide_sliding, 2000);
            });
            $('.slideshow .slide:eq(' + nextSlide + ')').animate({
                'left': '0px'
            }, 1500);
        }

        myTimer = setTimeout(slide_sliding, 2000);
        $(window).resize(function() {
            clearTimeout(myTimer);
            $('.slideshow .slide').stop().css({'left': winWidth});
            $('.slideshow .slide:eq(' + currSlide + ')').css({'left': 0});
            myTimer = setTimeout(slide_sliding, 2000);
        });

        //$()
    } //end of function slideshow

    slideshow(); //initialize slideshow function

    /*-------------------------------------
| CYOA Code
-------------------------------------*/

    function cyoa_init() {

        function choose_result() {

            var whichVid = $(this).attr('data-option');

            // $('.options .cyoa-image').find('.' + whichVid).show();

            $(this).closest('section').find('.cyoa-image').find('.' + whichVid).show();
            $(this).parent().hide();

        }

        $('.options .buttons button').click(choose_result);

    }

    cyoa_init();

}); //here is the doc ready end