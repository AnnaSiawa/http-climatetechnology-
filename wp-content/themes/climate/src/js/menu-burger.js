window.onload = function () {
    const iconMenu = document.querySelector('.menu__icon');
    const bodyMenu = document.querySelector('.mobile-menu');
    const menuCell = document.querySelector('.mobile-menu-cell');
    const contactsMenu = document.querySelector('.contacts-menu');
    const contactsItem = document.querySelectorAll('.contacts-item');
    const photoItem = document.querySelector('.photo-item');

    //mobile menu
    const toggleMenu = () => {
        document.body.classList.toggle('lock');
        document.getElementsByTagName('html')[0].classList.toggle('lock');
        bodyMenu.classList.toggle('active');
        iconMenu.classList.toggle('active');
        menuCell.classList.toggle('active');
        contactsMenu.classList.remove('active');
    }

    if (iconMenu) {
        iconMenu.addEventListener('click', e => {
            e.stopPropagation();
            toggleMenu();
        });

        photoItem.addEventListener('click', e => {
            e.stopPropagation();
            toggleMenu();
        });

        //прокрутка до блока Наши работы
        const itemPhotoScroll = document.querySelector('.photo-item[data-goto]');
        itemPhotoScroll.addEventListener('click', onItemScrollPhoto);

        function onItemScrollPhoto(e) {
            const itemPhotoScroll = e.currentTarget;
            const gotoBlock = document.querySelector(itemPhotoScroll.dataset.goto);
            if (gotoBlock) {
                const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;

                window.scrollTo({
                    top: gotoBlockValue - 50,
                    // behavior: 'smooth'
                });
            }
        }

        document.addEventListener('click', e => {
            let target = e.target;
            let itsMenu = target === bodyMenu || bodyMenu.contains(target);
            let itsIconMenu = target === iconMenu;
            let menuIsActive = bodyMenu.classList.contains('active');

            if (!itsMenu && !itsIconMenu && menuIsActive) {
                bodyMenu.classList.toggle('active');
                iconMenu.classList.toggle('active');
                menuCell.classList.toggle('active');
                contactsMenu.classList.remove('active');
            }
        });
    }

    //contacts mobile and desktop menu
    const toggleContacts = () => {
        contactsMenu.classList.toggle('active');
    }

    contactsItem.forEach(item => {
        item.addEventListener('click', e => {
            e.stopPropagation();
            toggleContacts();
        });
        document.addEventListener('click', e => {
            let target = e.target;
            let itsContactsMenu = target === contactsMenu || contactsMenu.contains(target);
            let menuIsActive = contactsMenu.classList.contains('active');
            if (!itsContactsMenu && menuIsActive) {
                contactsMenu.classList.toggle('active');
            }
        });
    });

}