const menuButton = document.querySelector('.nav-responsive-buttons');
const navList = document.querySelector('.nav-responsive-list');

menuButton.addEventListener('click', () => {
    navList.classList.toggle('active');
});
