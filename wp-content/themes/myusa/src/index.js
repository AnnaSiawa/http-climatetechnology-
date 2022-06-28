import './scss/index.scss';

window.onload = function () {
    const iconMenu = document.querySelector('.menu__icon');
    const bodyMenu = document.querySelector('.mobile-menu');
    const menuCell = document.querySelector('.mobile-menu-cell');

    const toggleMenu = () => {
        document.body.classList.toggle('lock');
        bodyMenu.classList.toggle('active');
        iconMenu.classList.toggle('active');
        menuCell.classList.toggle('active');
    }

    if (iconMenu) {
        iconMenu.addEventListener('click', e => {
            e.stopPropagation();
            toggleMenu();
        });
        document.addEventListener('click', e => {
            let target = e.target;
            let itsMenu = target === bodyMenu || bodyMenu.contains(target);
            let itsIconMenu = target === iconMenu;
            let menuIsActive = bodyMenu.classList.contains('active');
            if (!itsMenu && !itsIconMenu && menuIsActive) {
                bodyMenu.classList.toggle('active');
                iconMenu.classList.toggle('active');
                menuCell.classList.toggle('active');
            }
        });
    }
}

import Swiper, {Navigation, Pagination} from 'swiper';
//
// Swiper.use([Navigation, Pagination]);
// // import './js/common';
// // import './js/payment-form';
//
// import 'simplebar';
// import tippy, {followCursor} from 'tippy.js';
//
// const anim = document.querySelector('.header-bottom');
// setTimeout(function () {
//     anim.classList.remove('preload');
//     // console.log('anim');
// }, 300);
//
// window.onload = function () {
//     const skyscraperList = document.querySelector('.skyscraper__list');
//     const discription = document.getElementById('discription');
//     const column = document.getElementById('column');
//
//     const flagMenu = document.querySelector('.header-top__language');
//     const flagWrap = document.querySelector('.header-top__flag-wrap');
//
//     const flagMenuFooter = document.querySelector('.inner-links__link');
//     const flagWrapFooter = document.querySelector('.inner-links__flag-wrap');
//
//     const iconMenu = document.querySelector('.menu__icon');
//     const menuBody = document.querySelector('.header-bottom__menu');
//
//     const menuItem1 = document.getElementById('menu-item1');
//     const menuItem2 = document.getElementById('menu-item2');
//     // const submenu1 = document.getElementById('submenu-item1');
//     const submenu2 = document.getElementById('submenu-item2');
//
//     const faqClickArticles = document.getElementById('faq-click-articles');
//     const faqClickResources = document.getElementById('faq-click-resources');
//     const pageFaqColumnsArticles = document.getElementById('column-articles');
//     const pageFaqColumnsResource = document.getElementById('column-resource');
//     const search = document.querySelectorAll('.header-bottom__search');
//     const buttonSearchClose = document.querySelector('.search-close');
//     const searchInput = document.querySelector('.search-text-desktop');
//     const searchWrap = document.querySelector('.header-bottom__search-desktop');
//     const headerInfo = document.querySelector('.header-bottom__info');
//     const headerLogin = document.querySelector('.header-bottom__login');
//     const headerAbout = document.querySelector('.header-bottom__about');
//     // const clearInput = document.querySelector('.clear-input');
//     // const clearInputDesktop = document.querySelector('.clear-input-desktop');
//     const clearInputs = document.querySelectorAll('.input');
//     const inputSearch1 = document.getElementById('text-to-find1');
//     const inputSearch2 = document.getElementById('text-to-find2');
//
//     //search
//     function addActive() {
//         buttonSearchClose.classList.add('_active');
//         searchInput.classList.add('_active');
//         searchWrap.classList.add('_active');
//         headerInfo.classList.add('_active');
//         headerLogin.classList.add('_active');
//         menuBody.classList.add('_active-search');
//         headerAbout.classList.add('_active');
//     }
//
//     const isMobile = () => {
//         return window.innerWidth < 980;
//     };
//
//     let visibleResultsHolder = document.querySelector('.search-result-' + (isMobile() ? 'mobile' : 'desktop'));
//     let resultsHolders = document.querySelectorAll('.search-result');
//
//     window.addEventListener('resize', () => {
//         // If tablet device rotates
//         let hiddenHolder = document.querySelector('.search-result-' + (isMobile() ? 'desktop' : 'mobile'));
//         let visibleHolder = document.querySelector('.search-result-' + (isMobile() ? 'mobile' : 'desktop'));
//
//         let visibleInput = document.querySelector('.search-text-' + (isMobile() ? 'mobile' : 'desktop'));
//         let hiddenInput = document.querySelector('.search-text-' + (isMobile() ? 'desktop' : 'mobile'));
//
//         visibleInput.value = hiddenInput.value;
//         visibleResultsHolder = visibleHolder;
//
//         hiddenHolder.style.display = 'none';
//         visibleHolder.style.display = 'block';
//     });
//
//     const clearAndHideSearchResults = () => {
//         resultsHolders.forEach((item) => {
//             item.innerHTML = '';
//             item.style.display = 'none';
//         });
//     };
//
//     const debounce = (func, wait, immediate) => {
//         let timeout;
//
//         return function () {
//             const context = this, args = arguments;
//             const later = function () {
//                 timeout = null;
//                 if (!immediate) func.apply(context, args)
//             };
//
//             const callNow = immediate && !timeout;
//             clearTimeout(timeout);
//             timeout = setTimeout(later, wait);
//             if (callNow) func.apply(context, args)
//         }
//     };
//
//     if (search) {
//         search.forEach(item => {
//             item.addEventListener(('click'), addActive);
//
//             item.addEventListener(('input'), debounce((event) => {
//                 let query = event.target.value;
//                 if (query.length === 0) {
//                     resultsHolders.forEach((item) => {
//                         item.innerHTML = '';
//                     });
//                     return false;
//                 }
//                 let data = {query: event.target.value};
//                 fetch("/wp-json/search/posts", {
//                     method: "POST",
//                     headers: {'Content-Type': 'application/json'},
//                     body: JSON.stringify(data)
//                 }).then(res => {
//                     return res.json().then((links) => {
//                         resultsHolders.forEach((item) => {
//                             item.innerHTML = links.length > 0 ?
//                                 '' : 'For more results, reduce the number of search terms or try more general words';
//                             for (const link of links) {
//                                 let a = document.createElement('a');
//                                 a.setAttribute('href', link.href);
//                                 a.innerHTML = link.title;
//                                 item.append(a);
//                             }
//                         });
//                         visibleResultsHolder.style.display = 'block';
//                     });
//                 });
//             }, 1000));
//
//             item.oninput = () => {
//                 clearInputs.forEach(i => {
//                     i.classList.add('_active');
//                 });
//                 if (inputSearch1.value === "" && inputSearch2.value === "") {
//                     clearInputs.forEach(i => {
//                         i.classList.remove('_active');
//                     })
//                 }
//             };
//         });
//
//         clearInputs.forEach(e => {
//             e.addEventListener('click', i => {
//                 i.target.classList.remove('_active');
//                 inputSearch1.value = '';
//                 inputSearch2.value = '';
//                 clearAndHideSearchResults();
//             });
//         });
//
//         buttonSearchClose.addEventListener('click', e => {
//             e.preventDefault();
//             // searchWrap.classList.remove('_active');
//
//             // clear search results and hide all result holders
//             clearAndHideSearchResults();
//
//             clearInputs.forEach(e => {
//                 e.classList.remove('_active');
//                 inputSearch1.value = '';
//                 inputSearch2.value = '';
//             });
//
//             searchInput.classList.remove('_active');
//             buttonSearchClose.classList.remove('_active');
//             headerInfo.classList.remove('_active');
//             headerLogin.classList.remove('_active');
//             headerAbout.classList.remove('_active');
//             searchWrap.classList.remove('_active');
//
//             setTimeout(function () {
//                 menuBody.classList.remove('_active-search');
//             }, 900);
//         });
//     }
//
//     const itemSearch = document.querySelector('a[href="#search"]');
//     if (itemSearch != null) {
//         itemSearch.addEventListener('click', function () {
//             setTimeout(addActive, 600)
//         });
//     }
//
//     //language menu
//     const toogleFlagMenu = () => {
//         flagWrap.classList.toggle('_active');
//     }
//     const toogleFlagMenuFooter = () => {
//         flagWrapFooter.classList.toggle('_active');
//     }
//     if (flagMenu) {
//         flagMenu.addEventListener(('click'), e => {
//             e.stopPropagation();
//             toogleFlagMenu();
//         });
//         document.addEventListener(('click'), e => {
//             let target = e.target;
//             let itsFlagWrap = target === flagWrap || flagWrap.contains(target);
//             let itsMenuIFlag = target === flagWrap;
//             let menuActiveFlag = flagWrap.classList.contains('_active');
//             if (!itsFlagWrap && !itsMenuIFlag && menuActiveFlag) {
//                 toogleFlagMenu();
//             }
//         });
//
//         flagMenuFooter.addEventListener(('click'), e => {
//             e.stopPropagation();
//             toogleFlagMenuFooter();
//         });
//         document.addEventListener(('click'), e => {
//             let target = e.target;
//             let itsFlagWrapFooter = target === flagWrapFooter || flagWrapFooter.contains(target);
//             let itsMenuIFlagFooter = target === flagWrapFooter;
//             let menuActiveFlagFooter = flagWrapFooter.classList.contains('_active');
//             if (!itsFlagWrapFooter && !itsMenuIFlagFooter && menuActiveFlagFooter) {
//                 toogleFlagMenuFooter();
//             }
//         });
//     }
//
//     // burger
//     if (iconMenu) {
//         iconMenu.addEventListener('click', function (e) {
//             e.preventDefault();
//             document.body.classList.toggle('lock');
//             document.getElementsByTagName('html')[0].classList.toggle('lock');
//             document.querySelector('.header-top').classList.toggle('lockfix');
//             document.querySelector('.header-bottom__inner').classList.toggle('lockfix');
//             iconMenu.classList.toggle('_active');
//             menuBody.classList.toggle('_active');
//         });
//     }
//
//     const toogleMenu2 = () => {
//         submenu2.classList.toggle('_active');
//         menuItem2.classList.toggle('_active');
//     }
//     if (menuItem2) {
//         menuItem2.addEventListener(('click'), e => {
//             e.stopPropagation();
//             toogleMenu2();
//             menuItem1.classList.remove('_active');
//         });
//         document.addEventListener(('click'), e => {
//             let target = e.target;
//             let itsSubmenu = target === submenu2 || submenu2.contains(target);
//             let itsMenuItem = target === menuItem2;
//             let menuActive = submenu2.classList.contains('_active');
//             if (!itsSubmenu && !itsMenuItem && menuActive) {
//                 toogleMenu2();
//             }
//         });
//     }
//
//     // scrolling for links in the footer
//     const footerMenuLinks = document.querySelectorAll('.footer__menu a');
//     if (footerMenuLinks) {
//         for (let link of footerMenuLinks) {
//             if (link.getAttribute('href').indexOf('#') !== -1) {
//                 link.addEventListener('click', onMenuLinkClick);
//             }
//         }
//
//         function onMenuLinkClick(e) {
//             let link = e.target;
//             let uri = link.getAttribute('href');
//             let hashPosition = uri.indexOf('#');
//             let questionMarkPosition = uri.indexOf('?');
//
//             let nodeId = (questionMarkPosition !== -1) ?
//                 uri.slice(hashPosition, questionMarkPosition) :
//                 uri.slice(hashPosition);
//
//             let gotoBlock = document.querySelector(nodeId);
//             if (gotoBlock) {
//                 e.preventDefault();
//                 let gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;
//                 window.scrollTo({
//                     top: gotoBlockValue - 100,
//                     behavior: "smooth",
//                 });
//             }
//         }
//     }
//
//     // TODO: Крайне сомнительное решение делать глобально на всем сайте что то с хешами,
//     //       а тем более его сбрасывать. Лучше делать по data- атрибутам.
//     //scroll to state when navigating from another page
//     let myHash = location.hash;
//     if (myHash[1] !== undefined) {
//         location.hash = ''; // так хэш из url не удалить
//         setTimeout(() => $('html, body').animate({scrollTop: $(myHash).offset().top}, 500), 100);
//     }
//
//     //page-faq
//     if (faqClickArticles) {
//         faqClickArticles.addEventListener('click', function (e) {
//             e.preventDefault();
//             faqClickArticles.classList.toggle('_active');
//             pageFaqColumnsArticles.classList.toggle('_active');
//         });
//         faqClickResources.addEventListener('click', function (e) {
//             e.preventDefault();
//             faqClickResources.classList.toggle('_active');
//             pageFaqColumnsResource.classList.toggle('_active');
//         });
//     }
//
//     //page-home
//     if (skyscraperList) {
//         let skyscraperList2 = skyscraperList.cloneNode(true);
//         skyscraperList2.classList.add('skyscraper__list2');
//         skyscraperList2.setAttribute('id', 'list2');
//         if (!(document.getElementById('list2'))) {
//             discription.insertBefore(skyscraperList2, column);
//         }
//     }
//
//     //initializing the slider testimonials
//     const swiperSlider = new Swiper('.slider', {
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         watchOverflow: true,
//         observer: true,
//         observeParents: true,
//         observeSlideChildren: true,
//         resizeObserver: true,
//         loop: true,
//         breakpoints: {
//             1480: {
//                 slidesPerView: 2,
//                 slidesOffsetBefore: 30,
//                 spaceBetween: 60,
//             },
//             1280: {
//                 slidesPerView: 2,
//                 slidesOffsetBefore: 75,
//             },
//             980: {
//                 slidesPerView: 1.5,
//                 slidesOffsetBefore: 75,
//             },
//             480: {
//                 slidesOffsetBefore: 70,
//             },
//             380: {
//                 slidesPerView: 1,
//                 slidesOffsetBefore: 55,
//                 spaceBetween: 20,
//
//             },
//             370: {
//                 slidesPerView: 1,
//                 slidesOffsetBefore: 48,
//                 spaceBetween: 40,
//             },
//             300: {
//                 slidesPerView: 1,
//                 slidesOffsetBefore: 10,
//                 spaceBetween: 40,
//             }
//         }
//     });
//
//     tippy('.tooltip', {
//         content(reference) {
//             const id = reference.getAttribute('data-template');
//             const template = document.getElementById(id);
//             return template.innerHTML;
//         },
//         maxWidth: 800,
//         allowHTML: true,
//         animation: 'scale',
//         // trigger: 'click',
//         // hideOnClick: false,
//         theme: 'light-border',
//         followCursor: 'horizontal',
//         plugins: [followCursor],
//     });
//     tippy('.icon-tooltip', {
//         content(reference) {
//             const id = reference.getAttribute('data-template');
//             const template = document.getElementById(id);
//             return template.innerHTML;
//         },
//         maxWidth: 800,
//         allowHTML: true,
//         animation: 'scale',
//         theme: 'light-border',
//         /* todo: если иконка вопроса стоит в лейбле инпута радиобаттона,
//             то она на мобильном тачскрине не работает как надо.
//             это чинится установкой trigger: click, но тогда хинт не показывается по ховеру,
//             а только по клику.
//             ситуация. */
//
//         // trigger: 'click',
//     });
// }
