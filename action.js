window.onload = function () {
  document.body.onmousemove = function (event) {
    document.body.style.backgroundPosition = -event.clientX / 800 + "em";
  };

  var forms = document.getElementsByClassName("console-input");

  for (var formIndex = 0; formIndex < forms.length; formIndex += 1) {
    var form = forms[formIndex];

    form.getElementsByTagName("form")[0].onsubmit = function (event) {
      event.preventDefault();

      var input = this.getElementsByTagName("input")[0].value;
      var request = new XMLHttpRequest();

      request.open("POST", this.action, true);

      request.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
      );

      request.send("code=" + encodeURIComponent(input));

      request.onreadystatechange = function () {
        if (request.readyState === 4) {
          switch (request.status) {
            case 200:
              form.getElementsByTagName("p")[0].textContent =
                request.responseText;
              form.className = "console-input success";
              console.log(form);
              break;
            case 403:
              form.className = "console-input error";

              setTimeout(function () {
                form.className = "console-input";
              }, 800);

              break;
          }
        }
      };
    };
  }
};
