function ajaxRequest(URL, callback) {
  const xhr = new XMLHttpRequest();

  xhr.open("GET", URL);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      var status = xhr.status;
      if (status === 0 || (status >= 200 && status < 400)) {
        // The request has been completed successfully
        callback(JSON.parse(xhr.responseText));
      } else {
        console.error("there was an error fetching the data from the server");
      }
    }
  };

  xhr.send();
}
