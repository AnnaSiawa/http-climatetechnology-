//btnScroll
const btnScroll = document.querySelector('.ellipse[data-goto]');
btnScroll.addEventListener('click', onBtnScrollClick);

function onBtnScrollClick(e) {
    const btnScroll = e.currentTarget;
    const gotoBlock = document.querySelector(btnScroll.dataset.goto);
    if (gotoBlock) {
        const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;

        window.scrollTo({
            top: gotoBlockValue - 100,
            // behavior: 'smooth'
        });
    }
}

//reducing the header when scrolling the page
const headerScroll = document.querySelector('.header');
const headerRowScroll = document.querySelector('.header__row');

window.onscroll = function () {
    scrollPage();
}

function scrollPage() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        headerScroll.classList.add('_scroll');
        headerRowScroll.classList.add('_scroll');
    } else {
        headerScroll.classList.remove('_scroll');
        headerRowScroll.classList.remove('_scroll');
    }
}
