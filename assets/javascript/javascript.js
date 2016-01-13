/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
$ = jQuery;

$(document).ready(function(){
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

});