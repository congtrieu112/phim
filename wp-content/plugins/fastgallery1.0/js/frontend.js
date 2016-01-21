// JavaScript Document

jQuery(document).ready(function(jquery) {

    jquery('.fg-gallery-caption').on('mouseover mouseout', function(event) {
        //jQuery(this).parent('.field-item').addClass('visible');
        if (event.type == 'mouseover') {
            jquery(this).parents('.gallery-icon').find('.fg_zoom').addClass('fg_over');
            return false;
        } else {
            jquery(this).parents('.gallery-icon').find('.fg_zoom').removeClass('fg_over');
            return false;
        }

    });

});

jQuery(window).load(function() {
    jQuery(document).ready(function(jquery) {
        jquery('.fastgallery').masonry({
            singleMode: true,
            itemSelector: '.fg-gallery-item'

        });
    });
});