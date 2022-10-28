// const observer = new IntersectionObserver(entries => {
//     // перебор записей
//     entries.forEach(entry => {
//         // если элемент появился
//         if (entry.isIntersecting) {
//             // добавить ему CSS-класс
//             entry.target.classList.add('choose-svg-elem-11');
//         }
//     });
// });

// const trueCallback = function(entries, observer) {
//     entries.forEach((entry) => {
//         // получаем свойства, которые доступны в объекте entry
//         const { target, isIntersecting } = entry;
//
//         if( isIntersecting ) {
//             // добавляем класс, когда элемент входит в область наблюдения
//             target.classList.add( 'choose-svg-elem-11' );
//         } else {
//             // удаляем класс, когда элемент из неё выходит
//             target.classList.remove( 'choose-svg-elem-11' );
//         }
//
//     });
// }

// const observer = new IntersectionObserver(entries => {
//     entries.forEach((entry) => {
//         // получаем свойства, которые доступны в объекте entry
//         const {target, isIntersecting} = entry;
//
//         if (isIntersecting) {
//             // добавляем класс, когда элемент входит в область наблюдения
//             target.classList.add('choose-svg-elem-11');
//         } else {
//             // удаляем класс, когда элемент из неё выходит
//             target.classList.remove('choose-svg-elem-11');
//         }
//     });
// });
//
// // Сообщить наблюдателю, какие элементы следует отслеживать
// observer.observe(document.querySelector('.scroll-logo'));

////////////////////////////////////////////////
//observer для заголовков
// функция добавляет CSS-класс, который и осуществляет анимацию
const scrollImations = (entries, observer) => {
    entries.forEach((entry) => {
        // анимируем, если элемент целиком попадает в отслеживаемую область
        if (entry.isIntersecting && entry.intersectionRatio == 1) {
            entry.target.classList.add('box--visible');
        } else {
            entry.target.classList.remove('box--visible');
        }
    });
}

// создаём обсервер с параметрами
const options = {
    threshold: 1,
};
const observer = new IntersectionObserver(scrollImations, options);

const boxes = document.querySelectorAll('.scroll-title');
boxes.forEach((box) => {
    observer.observe(box);
});