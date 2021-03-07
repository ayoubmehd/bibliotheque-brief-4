(function () {
  var navMenu = document.querySelector(".main-navbar .nav-menu");
  var burgerIcon = document.querySelector(".main-navbar .burger-icon");

  burgerIcon.addEventListener("click", function () {
    // showNav();
    navMenu.classList.toggle("show");
  });

  // navMenu.addEventListener("transitionend", (event) => {
  //   if (
  //     event.propertyName === "opacity"
  //   ) {
  //     hideNav();
  //   }
  // });

  function hideNav() {
    navMenu.style.display = "none";
  }

  function showNav() {
    navMenu.style.display = "block";
  }
})();
