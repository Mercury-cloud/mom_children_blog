(function($){
    $(document).ready(function(){

        // width
        let width = window.innerWidth;

        let num = width > 991 ? 4 : 1;

        $('.recommend-post').slick({
            infinite: true,
            slidesToShow: num,
            slidesToScroll: num,
            dots: false,
            // fade: true,
            autoplay : true,
            arrows : true,
        });


        /**
         * homepage slider 
         */
        $(".homepage_slider").slick({
            infinite : true,
            dots : true , 
            autoplay : true , 
            autoplaySpeed : 2000 , 
            arrows : false,
        });
    });
})(jQuery);