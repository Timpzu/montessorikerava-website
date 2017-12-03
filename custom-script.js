function menuBtn() {
  var x = document.querySelector(".menu");
  if (x.className === "menu") {
    x.className += " visible";
  }
  else {
    x.className = "menu";
  }
}
