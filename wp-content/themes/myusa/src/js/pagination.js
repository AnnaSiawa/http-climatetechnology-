let pagination = document.querySelector('#pagination');
let slideListsWrap = document.querySelector('.product-swiper__wrapper');
let slideLists = document.querySelectorAll('.product-swiper__slide');
let arrSlideLists = Array.from(slideLists);
let activeLi = document.querySelector('#pagination li.current');
let prevPage = document.querySelector('.pagination-btn-p');
let nextPage = document.querySelector('.pagination-btn-n');

let notesOnPage = 2; //количество записей на странице
let countOfItems = Math.ceil(arrSlideLists.length / notesOnPage); //количество страниц пагинации

let items = []; //массив li

//динамический вывод страниц пагинации
for (let i = 1; i <= countOfItems; i++) {
    let li = document.createElement('li');
    li.setAttribute('data-goto', '.scroll-top-catalog');
    li.innerHTML = i;
    pagination.appendChild(li);
    items.push(li);
}

//после загрузки страницы отобразить первый элемент массива items (первые три записи)
showPage(items[0]);

let item;
//пагинация
for (let item of items) {
    item.addEventListener('click', function (e) {
        showPage(this);
        scrollPage(e);
    });
}

function scrollPage(e) {
    //скролл к первой записи после клика по кнопке пагинации
    const btnScroll = e.currentTarget;
    const gotoBlock = document.querySelector(btnScroll.dataset.goto);
    if (gotoBlock) {
        const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;
        window.scrollTo({
            top: gotoBlockValue - 100,
        });
    }
}

function showPage(item) {
    //выделить активную кнопку пагинации
    if (activeLi) {
        activeLi.classList.remove('current');
    }
    activeLi = item;
    item.classList.add('current');

    let pageNum = +item.innerHTML;
    let start = (pageNum - 1) * notesOnPage;
    let end = start + notesOnPage;
    let notes = arrSlideLists.slice(start, end); // массив выводимых записей

    //очистить предыдущие записи
    slideListsWrap.innerHTML = '';

    for (let note of notes) {
        slideListsWrap.appendChild(note);
    }
}

prevPage.addEventListener('click', function (e) {
    if (activeLi.previousElementSibling) {
        showPage(activeLi.previousElementSibling);
        scrollPage(e);
    }
});
nextPage.addEventListener('click', function (e) {
    if (activeLi.nextElementSibling) {
        showPage(activeLi.nextElementSibling);
        scrollPage(e);
    }
});