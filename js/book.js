(function () {
  // Variables
  const authors = document.querySelector(".authors .textarea");

  //   const authorHTML = `<span class="suggestion"><input type="hidden" name="authors[]" value="${res.id}" />${res.name}
  //             <img class="close-icon" src="/icon/close.svg" title="remove author" alt="clear image">
  //           </span>`;

  const suggestions = document.createElement("div");
  const input = authors.querySelector(".input");
  const inputHtml = input.querySelector("input");

  suggestions.classList.add("suggestions");
  suggestions.classList.add("hide");
  input.appendChild(suggestions);

  // Event handlers
  inputHtml.addEventListener("input", (event) => {
    if (!event.target.value) return suggestions.classList.add("hide");

    suggestions.classList.remove("hide");
    const URL = `/auteur/api/search.php?q=${event.target.value}`;
    ajaxRequest(URL, function (result) {
      showResults(result);
    });
  });

  authors.addEventListener("click", (event) => {
    if (
      !event.target.closest(".suggestion") &&
      !event.target.closest(".close-icon")
    )
      return;

    // remove author
    const target = event.target.closest(".close-icon");
    if (target) {
      target.parentNode.remove();
    }
    // suggestion
    if (event.target.closest(".suggestion")) {
      const name = event.target.closest(".suggestion").textContent;
      const { auteurId: id } = event.target.closest(".suggestion").dataset;
      showAuteur({ id, name });
    }
    clear();
  });

  // functions
  function showResults(results) {
    if (results) {
      resetSuggestions();
      results.forEach((res) => {
        suggestions.insertAdjacentHTML(
          "beforeend",
          `<span class="suggestion" data-auteur-id="${res.id}">${res.name}</span>`
        );
      });
    }
  }

  function showAuteur(auteur) {
    if (auteur) {
      authors.insertAdjacentHTML(
        "afterbegin",
        `<span class="author"><input type="hidden" name="authors[]" value="${auteur.id}" />${auteur.name}
            <img class="close-icon" src="/icon/close.svg" title="remove author" alt="clear image">
           </span>`
      );
    }
  }

  function resetAuthors() {
    authors.innerHTML = `
       <div class="input">
            <input type="text" />
        </div>
        `;
  }

  function clear() {
    suggestions.classList.add("hide");
    inputHtml.value = "";
    resetSuggestions();
    inputHtml.focus();
  }

  function resetSuggestions() {
    suggestions.innerHTML = "";
  }
})();
