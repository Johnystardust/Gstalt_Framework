/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
$ = jQuery;

$(document).ready(function(){

    $('.faq-control').click(function(){
        $(this).parentsUntil('#faqs').find('.faq-answer').css( "height", "initial" );
    });



});