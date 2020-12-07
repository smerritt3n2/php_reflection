window.onload = function () {
    $('.slider1').jdSlider();
    $('.slider2').jdSlider({
        wrap: '.slide-inner',
        isAuto: true,
        isLoop: true
    });
    $('.slider3').jdSlider({
        wrap: '.slide-inner',
        slideShow: 2,
        slideToScroll: 2,
        isLoop: false,
        responsive: [{
            viewSize: 768,
            settings: {
                slideShow: 1,
                slideToScroll: 1
            }
        }]
    });
    $('.slider3-2').jdSlider({
        wrap: '.slide-inner',
        slideShow: 2,
        slideToScroll: 1,
        isLoop: true,
        responsive: [{
            viewSize: 768,
            settings: {
                slideShow: 1
            }
        }]
    });
    $('.slider3-3').jdSlider({
        wrap: '.slide-inner',
        slideShow: 2,
        slideToScroll: 2,
        isLoop: true,
        responsive: [{
            viewSize: 768,
            settings: {
                slideShow: 1,
                slideToScroll: 1
            }
        }]
    });
    $('.slider4').jdSlider({
        wrap: '.slide-inner',
        isSliding: false,
        isAuto: true,
        isLoop: true,
        isDrag: false
    });
};