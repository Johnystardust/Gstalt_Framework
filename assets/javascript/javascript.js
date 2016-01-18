/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
$ = jQuery;

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Even Col Height.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    $('.same-col-height').each(function(){
        var maxHeight = -1;

        $(this).find('.col').each(function(){
            if($(this).height() > maxHeight){
                maxHeight = $(this).height();
            }
        });

        $(this).find('.col').height(maxHeight);
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   FAQ.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    $('.faq-control').click(function(){

        // Click function if the element is closed
        if($(this).attr('data-expanded') == 'false'){
            // Get the data attr from the element
            var faqNumber = $(this).attr('data-number');

            // Update the data-expanded attr
            $('.faq-control').attr('data-expanded', 'false');
            $(this).attr('data-expanded', 'true');

            // Remove the active class from the faq
            $('.faq').removeClass('active');

            // Set the active class on the clicked element
            $('.faq[data-number="'+faqNumber+'"]').addClass('active');
        }

        // Click function if the element is expanded
        else {
            // Update the data-expanded attr
            $(this).attr('data-expanded', 'false');

            // Remove the active class from the faq
            $('.faq').removeClass('active');
        }
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Menu.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    var header = $('#header');

    /*
    |----------------------------------------------------------------
    |   Hide contact on scroll
    |----------------------------------------------------------------
    */
    if(header.hasClass('hide-contact')){

        // The scroll function
        $(window).scroll(function() {
            var $this = $(this),
                pos = $this.scrollTop();

            if(pos > 10){
                header.addClass('menu-open');
            }
            else {
                header.removeClass('menu-open');
            }
        });
    }

    /*
    |----------------------------------------------------------------
    |   Background color on scroll
    |----------------------------------------------------------------
    */
    if(header.hasClass('transparent')){

        header.addClass('menu-transparent');

        $(window).scroll(function() {
            var $this = $(this),
                pos = $this.scrollTop();

            if(pos < 10){
                header.addClass('menu-transparent');
            }
            else {
                header.removeClass('menu-transparent');
            }
        });
    }

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Go Up.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    var $scroll_top = $('#go-up');
    $scroll_top.hide();

    // Scroll to top fadeIn/fadeOut
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $scroll_top.show();
        } else {
            $scroll_top.hide();
        }
    });

    // Scroll to top
    $scroll_top.click(function(){
        $("html, body").animate({ scrollTop: 0 },600);
        return false
    });

});