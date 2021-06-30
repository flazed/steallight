const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
    el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

checkResolution();

window.onresize = () => {
    checkResolution();
}

function checkResolution() {
    if(window.innerWidth < 1300) {
        new Swiper(".swiper-container-feedbacks", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination-feedbacks",
              clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else {
        new Swiper(".swiper-container-feedbacks", {
            slidesPerView: 2,
            loop: true,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination-feedbacks",
              clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
}
