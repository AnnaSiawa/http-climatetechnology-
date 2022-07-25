import Swiper, {Navigation, Pagination} from 'swiper';

Swiper.use([Navigation, Pagination]);

const swiper = new Swiper('.product-swiper', {
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev'
    },
    watchOverflow: true,
    // loop: true,
    slidesPerGroup: 1,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'fraction',
    },
    watchSlidesProgress: true,
});

//описание товаров
const swiperDisks = document.querySelectorAll('.product-swiper__disk-wrap');
if (swiperDisks) {
    swiperDisks.forEach(disk => {
        const detail = disk.children[1];
        const arrow = disk.children[0].children[1];
        disk.children[0].addEventListener('click', e => {
            e.stopPropagation();
            detail.classList.toggle('active');
            arrow.classList.toggle('active');
        });
        document.addEventListener('click', e => {
            let target = e.target;
            let itsDetail = target === detail || detail.contains(target);
            let its = target === detail;
            let detailActive = detail.classList.contains('active');
            if (!itsDetail && !its && detailActive) {
                detail.classList.toggle('active');
                arrow.classList.toggle('active');
            }
        });
    });
}


const swiperExamples = new Swiper('.examples-swiper', {
    navigation: {
        nextEl: '.examples-swiper-next',
        prevEl: '.examples-swiper-prev'
    },
    watchOverflow: true,
    // loop: true,
    slidesPerGroup: 1,
    slidesPerView: 1,
    pagination: {
        el: '.examples-swiper-pagination',
        clickable: true,
        type: 'fraction',
    },
    watchSlidesProgress: true,
    breakpoints: {
        1100: {
            slidesPerView: 2,
            spaceBetween: 80,
        }
    }
});

const swiperServices = new Swiper('.services-swiper', {
    navigation: {
        nextEl: '.services-swiper-next',
        prevEl: '.services-swiper-prev'
    },
    watchOverflow: true,
    // loop: true,
    slidesPerGroup: 1,
    slidesPerView: 1,
    pagination: {
        el: '.services-swiper-pagination',
        clickable: true,
        type: 'fraction',
    },
    watchSlidesProgress: true,
});