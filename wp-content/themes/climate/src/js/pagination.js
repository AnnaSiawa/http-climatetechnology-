let pagination = document.querySelector('#pagination');
let slideListsWrap = document.querySelector('.catalog-list');
let slideLists = document.querySelectorAll('.catalog-slide');
let arrSlideLists = Array.from(slideLists); // или let arrSlideLists = [...slideLists];
let activeLi = document.querySelector('#pagination li.current');
let prevPage = document.querySelector('.pagination-btn-p');
let nextPage = document.querySelector('.pagination-btn-n');

let notesOnPage = 2; //количество записей на странице
let countOfItems = Math.ceil(arrSlideLists.length / notesOnPage); //количество страниц пагинации

let items = []; //массив li

if (slideLists) {
    //динамический вывод страниц пагинации
    for (let i = 1; i <= countOfItems; i++) {
        let li = document.createElement('li');
        li.setAttribute('data-goto', '.scroll-top-catalog');
        li.innerHTML = i;
        if (pagination) {
            pagination.appendChild(li);
            items.push(li);
        }
    }

//после загрузки страницы отобразить первый элемент массива items (первые три записи)
    showPage(items[0]);

//пагинация
    for (let item of items) {
        item.addEventListener('click', function (e) {
            showPage(this);
            scrollPage(e);
        });
    }

//скролл к первой записи после клика по кнопке пагинации
    function scrollPage(e) {
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
        if (activeLi) {
            //выделить активную кнопку пагинации
            activeLi.classList.remove('current');

            //заблокировать стрелки пагинации (prev, next), когда дошли до последней страницы
            prevPage.classList.remove('disabled');
            nextPage.classList.remove('disabled');
        }
        activeLi = item;
        let pageNum;

        if (item) {
            item.classList.add('current');
            pageNum = +item.innerHTML;

        }

        let start = (pageNum - 1) * notesOnPage;
        let end = start + notesOnPage;
        let notes = arrSlideLists.slice(start, end); // массив выводимых записей

        //очистить предыдущие записи
        if (slideListsWrap) {
            slideListsWrap.innerHTML = '';
            for (let note of notes) {
                slideListsWrap.appendChild(note);
            }
        }

        //заблокировать стрелки пагинации (prev, next), когда дошли до последней страницы
        if (activeLi) {
            if (activeLi.innerHTML && (+activeLi.innerHTML === 1)) {
                prevPage.classList.add('disabled');
            }
            if (activeLi.innerHTML && (+activeLi.innerHTML === items.length)) {
                nextPage.classList.add('disabled');
            }

            hideOverPages();
        }

    }

    if (prevPage && nextPage) {
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
    }


//Скрытие промежуточных номеров страниц
    function hideOverPages() {
        let items = [...pagination.children];
        if (items.length > 5) {
            items.forEach((item) => item.classList.add("_hide"));
            items[0].classList.remove("_hide");
            if (activeLi.previousElementSibling) {
                console.log(activeLi.previousElementSibling);
                activeLi.previousElementSibling.classList.remove("_hide");
            }
            activeLi.classList.remove("_hide");
            if (activeLi.nextElementSibling) {
                activeLi.nextElementSibling.classList.remove("_hide");
            }
            items[items.length - 1].classList.remove("_hide");
        }
    }

//сбросить фильтр
    let resetBtn = document.querySelector('#reset-filter');
    let checkboxInputs = document.querySelectorAll('.checkbox-input');

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            let arrCheckboxInputs = [...checkboxInputs];
            for (let checkboxInput of arrCheckboxInputs) {
                if (checkboxInput.checked) {
                    checkboxInput.checked = false;
                }
            }
        });
    }
}

