(function () {
  const form = document.querySelector("#filter");
  const books = document.querySelector("#books");
  faker();

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    Array.from(books.children).forEach((element) => {
      authorFilter(element);
      priceFilter(element);
    });
  });

  function authorFilter(element) {
    const { authorId } = element.querySelector(".author").dataset;
    const select = form.author;

    if (select.value != authorId) {
      element.style.display = "none";
    } else {
      element.style.display = "block";
    }

    console.log(authorId);
  }

  function priceFilter(element) {
    const price = parseFloat(
      element.querySelector(".prix").textContent.replace("dh", "")
    );
    const { min_prix, max_prix } = form;

    if (max_prix.value) {
      if (price > parseFloat(max_prix.value)) {
        element.style.display = "none";
      } else {
        element.style.display = "flex";
      }
    }
    console.log(
      `is ${price} less than ${max_prix.value}`,
      price < parseFloat(max_prix.value)
    );

    if (min_prix.value) {
      if (price < parseFloat(min_prix.value)) {
        element.style.display = "none";
      } else {
        element.style.display = "flex";
      }
    }

    console.log(
      `is ${price} bigger than ${min_prix.value}`,
      price > parseFloat(min_prix.value)
    );
  }
})();
