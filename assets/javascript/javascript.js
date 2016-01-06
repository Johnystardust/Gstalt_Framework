/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
$ = jQuery;

$(document).ready(function(){

    $('.faq-control').click(function(){
        // Remove the active class from the faq
        $('.faq').removeClass('active');

        // Get the data attr from the element
        var faqNumber = $(this).attr('data-number');

        // Set the active class on the clicked element
        $('.faq[data-number="'+faqNumber+'"]').addClass('active');
    });



});