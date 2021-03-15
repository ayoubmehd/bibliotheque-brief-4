(function () {
  const inputWrapper = document.querySelector(".form-fild .file");

  console.log(inputWrapper);

  // Clear image
  const clearIcon = inputWrapper.querySelector(".close-icon");
  // file image
  const fileImage = inputWrapper.querySelector(".file-image");
  // acual input
  const input = inputWrapper.querySelector("input");

  clearIcon.addEventListener("click", () => {
    fileImage.classList.add("hide");
    fileImage.setAttribute("src", "");
  });

  input.addEventListener("change", (event) => {
    fileImage.classList.remove("hide");
    fileImage.setAttribute("src", URL.createObjectURL(event.target.files[0]));
  });
})();
