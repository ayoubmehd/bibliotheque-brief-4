(function () {
  const form = document.querySelector("#filter");
  const books = document.querySelector("#books");
  faker();

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    Array.from(books.children).forEach((element) => {
      element.classList.remove("hide");
      authorFilter(element);
      priceFilter(element);
    });
  });

  function authorFilter(element) {
    const { authorId } = element.querySelector(".author").dataset;
    const select = form.author;

    if (select.value != authorId && !element.classList.contains("hide")) {
      element.classList.add("hide");
    }
  }

  function priceFilter(element) {
    if (element.classList.contains("hide")) return;

    const price = parseFloat(
      element.querySelector(".prix").textContent.replace("dh", "")
    );
    const { min_prix, max_prix } = form;

    maxFilter(max_prix, price, element);
    minFilter(min_prix, price, element);
  }

  function minFilter(min_prix, price, element) {
    if (min_prix.value) {
      if (price < parseFloat(min_prix.value)) {
        element.style.display = "none";
      }
    }

    console.log(
      `is ${price} bigger than ${min_prix.value}`,
      price > parseFloat(min_prix.value)
    );
  }

  function maxFilter(max_prix, price, element) {
    if (max_prix.value) {
      if (price > parseFloat(max_prix.value)) {
        element.style.display = "none";
      }
    }
    console.log(
      `is ${price} less than ${max_prix.value}`,
      price < parseFloat(max_prix.value)
    );
  }
})();
