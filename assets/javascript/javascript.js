/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */
$ = jQuery;

$(document).ready(function(){
    /*
    |----------------------------------------------------------------
    |   Vars
    |----------------------------------------------------------------
    */
    var html        = $('html');
    var header      = $('#header');


    var windowWidth = $(window).width();

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Set Mobile Device classes.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    var deviceAgent = navigator.userAgent.toLowerCase();

    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        html.addClass('ios');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/android/)) {
        html.addClass('android');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/blackberry/)) {
        html.addClass('blackberry');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
        html.addClass('mobile');
    }

    /*
    |----------------------------------------------------------------
    |   Window resize function
    |----------------------------------------------------------------
    */
    $(window).resize(function(){
        // Reset variables
        windowWidth = $(window).width();

        // Run functions
        menu_background_color();

        // Set the cols back to auto and run the function
        $('.col').css('height', 'auto');
        even_cols();
    });

    /*
    |----------------------------------------------------------------
    |   Menu Background color on scroll
    |----------------------------------------------------------------
    */
    function menu_background_color(){
        // Check if the header has a class of 'transparent' and the 'windowWidth' is above 1024
        if(header.hasClass('transparent') && windowWidth > 1024){
            // Add the class to the header
            header.addClass('menu-transparent');

            // Window scroll function to set menu background color
            $(window).scroll(function(){
                var $this = $(this),
                    pos = $this.scrollTop();

                if(pos < 10 && windowWidth > 1024){
                    header.addClass('menu-transparent');
                }
                else {
                    header.removeClass('menu-transparent');
                }
            });
        }
        else {
            // If the condition isn't met, remove the class
            header.removeClass('menu-transparent');
        }
    }
    menu_background_color();

    /*
    |----------------------------------------------------------------
    |   Hide contact on scroll
    |----------------------------------------------------------------
    */
    function hide_contact_on_scroll(){
        // Check if the header has a class of 'hide-contact'
        if(header.hasClass('hide-contact')) {

            // Check if the menu-top has a class of hide-mobile
            if($('.menu-top').hasClass('hide-mobile')){
                $(window).scroll(function() {
                    var $this = $(this),
                        pos = $this.scrollTop();

                    if(pos > 10 && windowWidth > 1024){
                        header.addClass('menu-open');
                    }
                    else {
                        header.removeClass('menu-open');
                    }
                });
            }
            else {
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
        }
    }
    hide_contact_on_scroll();

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Open the mobile menu
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    $('.menu-icon').click(function(){
        // Add the class to the mobile hoofdmenu
        $('#mobile-hoofmenu').toggleClass('mobile-menu-open');

        // Add the class to the menu icon
        $(this).toggleClass('open');
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    |   Even Col Height.
    |-------------------------------------------------------------------------------------------------------------------------------------------------
    */
    function even_cols(){
        $('.same-col-height').each(function(){
            var maxHeight = -1;

            $(this).find('.col').each(function(){
                if($(this).height() > maxHeight){
                    maxHeight = $(this).height();
                }
            });

            $(this).find('.col').height(maxHeight);
        });
    }
    even_cols();

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