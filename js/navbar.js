(function () {
  var navMenu = document.querySelector(".main-navbar .nav-menu");
  var burgerIcon = document.querySelector(".main-navbar .burger-icon");

  burgerIcon.addEventListener("click", function () {
    navMenu.classList.toggle("show");
    console.log(navMenu);
  });
})();
