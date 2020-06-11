function HeaderMobileNavManager () {
  this.burger = document.querySelector('.burger');
  this.navList = document.querySelector('.nav-list');

  var activateNav = function () {
    this.burger.classList.toggle('burger__bar--change');
    this.navList.classList.toggle('nav-list-mobile--active');
  }.bind(this);

  this.burger.addEventListener('click', activateNav)
}

var headerMobileNavManager = new HeaderMobileNavManager();
