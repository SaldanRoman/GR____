const closeMenuButton = document.querySelector('.menu-close');
const openMenuButton = document.querySelector('.menu-open');
const menu = document.getElementById('menu');
const menuListItems = document.querySelectorAll('.menu-list-item');


const closeMenu = () => {
    openMenuButton.style.display = 'block';
    menu.style.transform = "translateX(-100%)";
}

const openMenu = () => {
    openMenuButton.style.display = 'none';
    menu.style.transform = "unset";
}


closeMenuButton.addEventListener('click', closeMenu);
openMenuButton.addEventListener('click', openMenu);
menuListItems.forEach((e)=>e.addEventListener('click', closeMenu))
