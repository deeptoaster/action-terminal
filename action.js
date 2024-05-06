window.onload = function () {
  document.body.onmousemove = function (e) {
    document.body.style.backgroundPosition = -e.clientX / 800 + "em";
  };
};
