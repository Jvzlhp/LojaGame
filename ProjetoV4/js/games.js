const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
        768: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        },
        1024: {
            slidesPerView: 4,
            slidesPerGroup: 4,
        },
    },
});
        