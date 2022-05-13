(function ($){
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 1000,
            infinite: false,
            variableWidth: false,
            rtl: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        centerMode: true,
                        variableWidth: false,
                    }
                }
            ]
        });
    });
})(jQuery)

