document.addEventListener('DOMContentLoaded', function () {
    const navLi = document.querySelector('.nav-li');
  
    navLi.addEventListener('mouseover', function () {
        this.querySelector('.submenu').style.display = 'block';
    });
  
    navLi.addEventListener('mouseout', function () {
        this.querySelector('.submenu').style.display = 'none';
    });
  }); // SUBMENU DE NAV
  