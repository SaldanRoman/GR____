const closeMenuButton = document.querySelector('.menu-close');
const openMenuButton = document.querySelector('.menu-open');
const menu = document.getElementById('menu');
const menuList = document.getElementById('menuList');
const menuListItems = document.querySelectorAll('.menu-list-item');


const closeMenu = () => {
    openMenuButton.style.display = 'block'
    menu.style.width = '0'
    menuList.style.display = 'none';
    closeMenuButton.style.display = 'none'
}

const openMenu = () => {
    openMenuButton.style.display = 'none'
    menu.style.width = '100%'
    menuList.style.display = 'flex';
    closeMenuButton.style.display = 'block'
}


closeMenuButton.addEventListener('click', closeMenu);
openMenuButton.addEventListener('click', openMenu);
menuListItems.forEach((e)=>e.addEventListener('click', closeMenu))
