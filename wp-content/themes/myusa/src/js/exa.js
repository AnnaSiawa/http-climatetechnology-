const items = [{
    title: 'Pagination1',
    img: 'img/icons/loading.gif'
}, {
    title: 'Pagination2',
    img: 'img/icons/loading.gif'
}, {
    title: 'Pagination3',
    img: 'img/icons/loading.gif'
},
    {
        title: 'Pagination4',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination5',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination6',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination7',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination8',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination9',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination10',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination11',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination12',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination13',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination14',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination15',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination16',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination17',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination18',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination19',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination20',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination21',
        img: 'img/icons/loading.gif'
    },
    {
        title: 'Pagination22',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination23',
        img: 'img/icons/loading.gif'
    }, {
        title: 'Pagination24',
        img: 'img/icons/loading.gif'
    },
];
let block = document.querySelector('#block');
let pagination = document.querySelector('.pagination__list');
let prevPage = document.querySelector('.pagination__arrow_prev');
let nextPage = document.querySelector('.pagination__arrow_next');
let notesOnPage = 4;

let countOfItems = Math.ceil(items.length / notesOnPage);

let paginationItem = [];
for (let i = 1; i <= countOfItems; i++) {
    let li = document.createElement('li');
    li.classList.add('pagination__item');
    pagination.appendChild(li);
    let span = document.createElement('span');
    span.innerHTML = i;
    li.appendChild(span);
    paginationItem.push(span);
}
let active;
showPage(paginationItem[0]);
for (let item of paginationItem) {
    item.addEventListener('click', function() {
        showPage(this);
    });
}

function showPage(item) {
    if (active) {
        active.classList.remove('_active')
    }
    active = item;
    item.classList.add('_active');


    let pageNum = +item.innerHTML;

    let start = (pageNum - 1) * notesOnPage;
    let end = start + notesOnPage;
    let notes = items.slice(start, end);

    block.innerHTML = '';
    for (let note of notes) {
        let blockItem = document.createElement('div');
        blockItem.classList.add('block__item');
        block.appendChild(blockItem);

        let blockTitle = document.createElement('h2');
        blockTitle.classList.add('block__title');
        blockTitle.innerHTML = note.title;
        blockItem.appendChild(blockTitle);

        let blockImg = document.createElement('img');
        blockImg.classList.add('block__img');
        blockImg.src = note.img;
        blockImg.alt = '';
        blockItem.appendChild(blockImg);
    }
}

prevPage.addEventListener('click', function() {
    if (active.parentElement.previousElementSibling) {
        showPage(active.parentElement.previousElementSibling.querySelector('span'));
    }
});
nextPage.addEventListener('click', function() {
    if (active.parentElement.nextElementSibling) {
        showPage(active.parentElement.nextElementSibling.querySelector('span'));
    }
});