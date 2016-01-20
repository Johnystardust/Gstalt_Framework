/**
 * Created by Tim on 1/14/2016.
 */

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |  Carousel Function
    |
    |  This is the function for the carousel
    |-------------------------------------------------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------
    |   Get some variables we can work with.
    |----------------------------------------------------------------
    */
    var carousel    = $('#carousel');
    var wrapper     = $('.carousel-wrapper');
    var ul          = $('.carousel-container');

    var slide_count = ul.children().length;
    var slide_time  = carousel.attr('data-slide-time');

    var item_width;
    var ul_width;

    if(wrapper.width() < 649) {
        item_width = wrapper.width() / 2;
    }
    else if(wrapper.width() > 649){
        item_width = wrapper.width() / 3;
    }
    else if(wrapper.width() < 1024){
        item_width = wrapper.width() / 4;
    }
    else if(wrapper.width() > 1024){
        item_width = wrapper.width() / 5;
    }

    ul_width = item_width * (slide_count + 1);

    /*
    |----------------------------------------------------------------
    |   Resize function.
    |----------------------------------------------------------------
    */
    $(window).resize(function(){
        if(wrapper.width() < 649) {
            item_width = wrapper.width() / 2;
        }
        else if(wrapper.width() > 649){
            item_width = wrapper.width() / 3;
        }
        else if(wrapper.width() < 1024){
            item_width = wrapper.width() / 4;
        }
        else if(wrapper.width() > 1024){
            item_width = wrapper.width() / 5;
        }

        ul_width = item_width * (slide_count + 1);

        setCSS();
    });

    /*
    |----------------------------------------------------------------
    |   Set CSS Function.
    |----------------------------------------------------------------
    */
    function setCSS(){
        // Set the ul width
        ul.css('width', ul_width);

        // Set the item_width
        ul.find('.carousel-item').each(function(){
            $(this).css('width', item_width);
        });

        // Move the last item to the front
        ul.find('li:first').before(ul.find('li:last'));

        ul.css('left', -item_width);
    }
    setCSS();

    /*
    |----------------------------------------------------------------
    |  Timer Function
    |----------------------------------------------------------------
    */
    var timer;

    function slide_timer(){
        slide();
    }
    timer = setInterval(slide_timer, slide_time);

    /*
    |----------------------------------------------------------------
    |   The Slide Function
    |----------------------------------------------------------------
    */
    function slide(){
        var left_indent = -(item_width * 2);

        ul.animate({
            'left': left_indent
        },{
            queue: false,
            duration: 300,
            complete: function(){
                ul.find('li:last').after(ul.find('li:first'));

                ul.css({'left': -item_width});
            }
        });
    }

});