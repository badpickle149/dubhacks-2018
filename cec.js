(function() {

  window.onload = function() {
    let button = document.getElementById("submit");
    button.onclick = function() {
      callAPI();
    }
  }

  function checkStatus(response) {
    if (response.status >= 200 && response.status < 300) {
        return response.text();
    } else {
        return Promise.reject(new Error(response.status +
                                        ": " + response.statusText));
    }
  }

  function callAPI() {
    let search = document.querySelector('#search > input').value;
    let url = "search.php?search=" + search;
    fetch (url, {credentials: 'include'})
      .then(checkStatus)
      .then(fill)
      .catch(alert(error));
  }

  function fill(result) {
    let container = document.createElement("div");
    for (let i = 0; i < result.length; i++) {
      let item = document.createElement("span");
      span.innerText = result[i];
      container.appenChild(item);
    }
    document.querySelector('main').appenChild(container);
  }


})();
