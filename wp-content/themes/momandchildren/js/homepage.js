(function($){
    $(document).ready(function(){
        $('.recommend-post').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            fade: true,
            autoplay : true,
            arrows : false,
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