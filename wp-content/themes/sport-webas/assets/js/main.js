$('.tour-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 850,
            settings: {
                dots:false,
                arrows:true
            }
        }
    ]
});
