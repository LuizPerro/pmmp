$(document).ready(function () {
    
    // slick-slides
    $('.eventos-wrapper').slick({
        infinite: true,
        slidesToShow: 3,
        arrows: false,
        dots: true,
        responsive: [{
            breakpoint: 800,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    // maginific-popup
    $('.eventos-wrapper').magnificPopup({
        delegate: 'a',
        type : 'image',
        gallery:{enabled:true}
    });
});