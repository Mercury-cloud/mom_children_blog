(function($){
    $(document).ready(function(){

        $(document).click(function(e){
            if(!$(e.target).hasClass('active_dropdown_nav_a')){
                $(".active_dropwdown_nav").slideUp(0);
                $(".active_dropwdown_nav").removeClass('active_dropwdown_nav');
                $(".active_dropdown_nav_a").removeClass('active_dropdown_nav_a');
            }
        });
        
        // $("#navbar .navbar_cats").children('li').children('ul').children('li').addClass('col-md-3');
        // $("#navbar .navbar_cats").children('li').children('ul').addClass('row');
        $("#navbar .navbar_cats").children('li').children('a').click(function(e){

            e.preventDefault();

            if(!$(this).hasClass('active_dropdown_nav_a')){
                $(".active_dropwdown_nav").slideUp(0);
                $(".active_dropwdown_nav").removeClass('active_dropwdown_nav');
                $(".active_dropdown_nav_a").removeClass('active_dropdown_nav_a');
            }

            $(this).next().slideToggle();
            $(this).next().toggleClass('active_dropwdown_nav');
            $(this).toggleClass('active_dropdown_nav_a');

        });

        $(".toggle_navs , .title_toggle_navs").click(function(){
            $(".nav_links").slideToggle();
        });

        var lastScroll = 0;
        $(document).scroll(function(){
            let scrolled = $(window).scrollTop();
            let screenWidth = $(document).innerWidth();

            if(screenWidth > 991){
                if(scrolled > 0){
                    $(".upper").slideUp(500);
                    if(lastScroll > scrolled){
                        $(".nav_links").addClass("show_it");
                        $(".nav_links").removeClass("hide_it");
                    }else{
                        $(".nav_links").removeClass("show_it");
                        $(".nav_links").addClass("hide_it");
                    }
                }else{
                    $(".nav_links").removeClass("show_it");
                    $(".nav_links").removeClass("hide_it");
                    $(".upper").slideDown(500);
                }
            }

            lastScroll = scrolled;

        });



    });
})(jQuery);