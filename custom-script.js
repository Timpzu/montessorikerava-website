window.onload = function() {
  // Menu button
  function menuBtn() {
    var x = document.querySelector(".menu");
    if (x.className === "menu") {
      x.className += " visible";
    }
    else {
      x.className = "menu";
    }
  }
  // Accordion action
  document.querySelector(".haitari > h3").onclick = function() {
    toggleButton(event.target);
  };
  function handleBtnKeyPress(event) {
    if (event.key === " " || event.key === "Enter") {
      event.preventDefault();
      toggleButton(event.target);
    }
  }
  function toggleButton(element) {
    var pressed = (element.getAttribute("aria-pressed") === "true");
    element.setAttribute("aria-pressed", !pressed);
    var x = element.nextElementSibling;
    if (x.className === "textwidget") {
      x.className += " dvisible";
    }
    else {
      x.className = "textwidget";
    }
  }
}
