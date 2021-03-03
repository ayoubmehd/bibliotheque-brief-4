var select = document.querySelector("#author");
function faker() {
  books.innerHTML = "";

  let authors = fakeAuthors(10);
  for (let i = 0; i < 40; i++) {
    let price = Math.random() * 500;

    let { id, name } = fakeAuthor(authors);
    books.innerHTML += `
          <div class="card">
                  <img
                    src="./img-books/gallery/0cee7e54fda8ac99ec11459448e89c7d.jpg"
                    alt=""
                  />
                  <div class="text">
                    <h2 class="title">book title <span class="prix">${price.toFixed(
                      2
                    )} dh</span></h2>
                    <h3 class="author" data-author-id="${id}">
                      <a href="">${name}</a>
                    </h3>
                  </div>
                </div>`;
  }
}

function fakeAuthors(amount) {
  let authors = [];
  select.innerHTML = "";
  for (let i = 0; i < amount; i++) {
    const authorName = makeid(7);
    select.innerHTML += `
                <option value="${i}">${authorName}</option>
            `;
    authors.push({
      id: i,
      name: authorName,
    });
  }

  return authors;
}

function fakeAuthor(authors) {
  const randomElm = Math.floor(Math.random() * authors.length);
  return authors[randomElm];
}

function makeid(length) {
  var result = "";
  var characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  return result;
}
