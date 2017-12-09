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
// Accordion actions
function handleBtnClick(event) {
  toggleButton(event.target);
}
function handleBtnKeyPress(event) {
  if (event.key === " " || event.key === "Enter") {
    event.preventDefault();
    if (event.target.hasAttribute('aria-pressed')) {
      toggleButton(event.target);
    }
  }
}
function toggleButton(element) {
  var pressed = (element.getAttribute("aria-pressed") === "true");
  element.setAttribute("aria-pressed", !pressed);
  var x = element.nextElementSibling;
  if (x.className === "") {
    x.className += " visible";
  }
  else {
    x.className = "";
  }
}
