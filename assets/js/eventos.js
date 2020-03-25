$(document).ready(function () {
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
});