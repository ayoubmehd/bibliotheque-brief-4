(function () {
  const form = document.querySelector("#filter");
  const books = document.querySelector("#books");
  faker();

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    Array.from(books.children).forEach((element) => {
      //   authorFilter(element);
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
    const price = element.querySelector(".prix").textContent;
    const { min_prix, max_prix } = form;
    // if (min_prix.value && )
    // if (price > )
    console.log(!!min_prix.value, !!max_prix.value);
  }
})();
