window.onload = function () {
    const iconMenu = document.querySelector('.menu__icon');
    const bodyMenu = document.querySelector('.mobile-menu');
    const menuCell = document.querySelector('.mobile-menu-cell');

    const toggleMenu = () => {
        document.body.classList.toggle('lock');
        document.getElementsByTagName('html')[0].classList.toggle('lock');
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