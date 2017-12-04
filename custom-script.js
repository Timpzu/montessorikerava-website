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
  var elems = document.querySelectorAll(".haitari > h3");
  for (var i = 0; i < elems.length; i++) {
    elems[i].onclick = function() {
      toggleButton(event.target);
    }
  }
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
  // Lohkot
  var tbody = document.querySelector('tbody');
  tbody.className = "container-fluid";
  var trows = document.querySelectorAll('tr');
  for (var i = 0; i < trows.length; i++) {
    trows[i].className = "row";
  }
  var tdata = document.querySelectorAll('td');
  for (var i = 0; i < tdata.length; i++) {
    tdata[i].className = "col-md-6 offset-md-3";
  }
}
