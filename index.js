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


    //New Products Owl Carousel
    $("#newProducts .owl-carousel").owlCarousel({
        dots: true,
        loop: true,
        nav: false,
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


    //Blogs Owl Carousel
    $("#blogs .owl-carousel").owlCarousel({
        dots: true,
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });


    //product quantity section on product page
    let $quantityUp = $(".qty .qtyUp");
    let $quantityDown = $(".qty .qtyDown");
    // let $quantityInput = $(".qty .qtyInput");

    $quantityUp.click(function () {
        let $quantityInput = $(`.qtyInput[data-id='${$(this).data("id")}']`);
        if ($quantityInput.val() >= 1 && $quantityInput.val() <= 9) {
            $quantityInput.val(function (i, oldVal) {
                return ++oldVal;
            });
        }
    });
    $quantityDown.click(function () {
        let $quantityInput = $(`.qtyInput[data-id='${$(this).data("id")}']`);
        if ($quantityInput.val() <= 10 && $quantityInput.val() >= 2) {
            $quantityInput.val(function (i, oldVal) {
                return --oldVal;
            });
        }
    });


});