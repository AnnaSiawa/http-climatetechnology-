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
});

const contentSwiper = document.querySelector('.product-swiper__content');
const swiperDisk = document.querySelectorAll('.product-swiper__disk-wrap');
// let swiperDisk = Array.prototype.slice.call(document.querySelectorAll('.product-swiper__disk'));
const swiperDetail = document.querySelectorAll('.product-swiper__detail');

console.log(swiperDisk);

if (swiperDisk) {
    swiperDisk.forEach(e => {
        console.log(e);
        e.addEventListener('click', event => {
           if (event.target.className === 'product-swiper__detail') {
               // swiperDetail.classList.add('_active');
               console.log(event);
               console.log('yhoo');
           }
       });
    });




}

// if (swiperDisk) {
//     swiperDisk.forEach(e => {
//         console.log(e);
//
//         // let target = e.target;
//         // let arr = [];
//         // arr.push(e);
//         //
//         // console.log(arr);
//
//         e.addEventListener(('click'), i => {
//             console.log(i);
//             swiperDetail.forEach((item) => {
//                 console.log(item);
//                 item.classList.add('_active');
//             });
//         });
//     });
// }