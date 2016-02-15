/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |  Slider Function
    |
    |  This is the function for the main slider
    |-------------------------------------------------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------
    |   Get some variables we can work with.
    |----------------------------------------------------------------
    */
    var slider          = $('#slider');
    var ul              = $('.slide-container');
    var slide_count     = ul.children().length;

    var ul_width        = (slide_count * 100) + "%";
    var slide_width     = (100 / slide_count) + "%";

    var slide_index     = 0;
    var slide_time      = slider.attr('data-slide-time');
    var slide_style     = slider.attr('data-slide-style');

    var bottom_menu     = $('.bottom-menu');
    var slide_prev      = $('.slide-prev');
    var slide_next      = $('.slide-next');

    /*
    |----------------------------------------------------------------
    |   Hide the prev slide button on start.
    |----------------------------------------------------------------
    */
    slide_prev.hide();

    /*
    |----------------------------------------------------------------
    |  Get the slide_style and run the correct function
    |----------------------------------------------------------------
    */
    switch(slide_style) {
        case 'slide':
            setSlideCSS();
            break;
        case 'fade':
            setFadeCSS();
            break;
    }

    /*
    |----------------------------------------------------------------
    |   Set Slide CSS Function.
    |----------------------------------------------------------------
    */
    function setSlideCSS(){
        // Add the class to the container
        ul.addClass('slider-slide');

        // Set the container width
        ul.css('width', ul_width);

        // Set the slide width to 100% / slide count.
        ul.find('.slide').each(function(i){
            var left_percent = (slide_width * i) + "%";

            $(this).css('left', left_percent);
            $(this).css('width', slide_width);
        });
    }

    /*
    |----------------------------------------------------------------
    |   Set Fade CSS Function.
    |----------------------------------------------------------------
    */
    function setFadeCSS(){
        // Add the class to the container
        ul.addClass('slider-fade');

        // Set the first slide to active
        ul.find('.slide').first().addClass('active');
    }

    /*
    |----------------------------------------------------------------
    |  Timer Function
    |----------------------------------------------------------------
    */
    var timer;

    function slide_timer(){
        if(slide_index <= (slide_count - 2)){
            slide(parseInt(slide_index) + 1);
        }
        else {
            slide(0);
            slide_index = 0;
        }
    }
    timer = setInterval(slide_timer, slide_time);

    /*
    |----------------------------------------------------------------
    |   Menu Bottom click function.
    |----------------------------------------------------------------
    */
    bottom_menu.find('li').click(function(){
        // Get the data slide number
        var slide_number = $(this).attr('data-slide-number');

        //// Restart the timer
        clearInterval(timer);
        timer = setInterval(slide_timer, slide_time);

        // Call the setSlide function
        slide(slide_number)
    });

    /*
    |----------------------------------------------------------------
    |   Next slide button.
    |----------------------------------------------------------------
    */
    slide_next.click(function(){
        // Restart the timer
        clearInterval(timer);
        timer = setInterval(slide_timer, slide_time);

        // Call the setSlide function
        slide(parseInt(slide_index) + 1);
    });

    /*
    |----------------------------------------------------------------
    |   Prev slide button.
    |----------------------------------------------------------------
    */
    slide_prev.click(function(){
        // Restart the timer
        clearInterval(timer);
        timer = setInterval(slide_timer, slide_time);

        // Call the setSlide function
        slide(slide_index - 1);
    });

    /*
    |----------------------------------------------------------------
    |  Update Menu Function.
    |----------------------------------------------------------------
    */
    function updateMenu(slide_number){
        var clicked_li = $('li[data-slide-number="'+slide_number+'"]');
        /*
        |----------------------------------------------------------------
        |  Bottom Menu.
        |----------------------------------------------------------------
        */
        // Set the active menu item back to original
        bottom_menu.find('.active').find('i').removeClass('icon-circle');
        bottom_menu.find('.active').find('i').addClass('icon-circle-empty');

        // Remove the active class
        bottom_menu.find('li').removeClass('active');

        // Set the clicked item icon
        clicked_li.find('i').removeClass('icon-circle-empty');
        clicked_li.find('i').addClass('icon-circle');

        // Set the clicked item to active
        clicked_li.addClass('active');

        if(slide_number < 1){
            slide_prev.hide();
        }
        else {
            slide_prev.show();
        }

        if(slide_number >= (slide_count - 1)){
            slide_next.hide();
        }
        else {
            slide_next.show();
        }
    }

    /*
    |----------------------------------------------------------------
    |  Slide Function.
    |----------------------------------------------------------------
    */
    function slide(new_slide_index){
        /*
        |----------------------------------------------------------------
        |  Slide Animation
        |----------------------------------------------------------------
        */
        if(slide_style == 'slide'){
            // Set the animate distance
            var animate_left = (new_slide_index * (-100)) + "%";

            // Apply the animate distance
            ul.css('margin-left', animate_left);

            // Update the menu
            updateMenu(new_slide_index);

            // The slide_index is the new_slide_index
            slide_index = new_slide_index;
        }

        /*
        |----------------------------------------------------------------
        |  Fade Animation
        |----------------------------------------------------------------
        */
        else if(slide_style == 'fade'){
            // Remove the active class
            ul.find('li').removeClass('active');

            // Find the new slide and add the active class
            ul.find('.slide[data-slide-index="'+new_slide_index+'"]').addClass('active');

            // Update the menu
            updateMenu(new_slide_index);

            // The slide_index is the new_slide_index
            slide_index = new_slide_index;
        }
    }

});