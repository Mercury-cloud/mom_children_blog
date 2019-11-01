(function($){
    $(document).ready(function(){
        $('.recommend-post').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
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