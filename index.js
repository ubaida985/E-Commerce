$(document).ready(function () {

    // banner owl carousel
    $("#bannerArea .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $("#topSale .owl-carousel").owlCarousel({
        dots: false,
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    //isotope filters
    let $grid = $(".grid").isotope({
        itemSelector: '.gridItem',
        layoutMode: 'fitRows'
    });
    // filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });


});