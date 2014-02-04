$(document).ready(function() {
    $('.social .iconblock').each(function() {
        $(this).append('<div class="shot" style="background-image: url('+$(this).data('image')+')"></div>');
        $(this).append('<div class="bar"></div>');
    });

    $('.social a').on('mouseover',function() {
        var elem = $(this).parent();
        var shot = elem.find('.shot');
        shot.css({height : '48px'});
        elem.find('.bar').animate({
            width : '60px'
        }, {
            complete : function() {
                shot.animate({
                    width : '280px'
                },{
                    complete : function() {
                        shot.animate({
                            height: '300px'
                        });
                    }
                });
            }
        });
    });
    $('.social a').on('mouseout',function() {
        var elem = $(this).parent();
        var shot = elem.find('.shot');
        shot.animate({
            height : '48px'
        }, {
            complete : function() {
                shot.animate({width : '0px'}, {
                    complete : function() {
                        elem.find('.bar').animate({
                            width : '0px'
                        });
                    }
                });
            }
        });
    });
});