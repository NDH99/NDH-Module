var swiper = new Swiper('.swiper-container', {
    breakpoints: {
        400: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        999: {
            slidesPerView: 5,
            spaceBetween: 8,
        }
    },
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});


// Gets the video src from the data-src on each button
$(".modal-transparent").on('show.bs.modal', function() {
    setTimeout(function() {
        $(".modal-backdrop").addClass("modal-backdrop-transparent");
    }, 0);
});
$(".modal-transparent").on('hidden.bs.modal', function() {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
});

$(".modal-fullscreen").on('show.bs.modal', function() {
    setTimeout(function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});