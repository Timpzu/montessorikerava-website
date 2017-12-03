function menuBtn() {
  var x = document.getElementById('topnav');
  if (x.className === "resposive-nav") {
    x.className += " visible";
  }
  else {
    x.className = "visible";
  }
}
