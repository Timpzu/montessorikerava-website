// Menu button
function menuBtn() {
  var mobile_menu = document.querySelector('.menu');
  var menu_button = document.getElementById('mobile-nav-button');
  if (mobile_menu.className === 'menu') {
    mobile_menu.className += ' visible';
    menu_button.setAttribute("aria-expanded", "true");
  }
  else {
    mobile_menu.className = 'menu';
    menu_button.setAttribute("aria-expanded", "false");
  }
}
// Accordion actions
function handleBtnClick(event) {
  toggleButton(event.target);
}
function handleBtnKeyPress(event) {
  if (event.key === ' ' || event.key === 'Enter') {
    event.preventDefault();
    if (event.target.hasAttribute('aria-pressed')) {
      toggleButton(event.target);
    }
  }
}
function toggleButton(element) {
  var pressed = (element.getAttribute('aria-pressed') === 'true');
  element.setAttribute('aria-pressed', !pressed);
  var x = element.nextElementSibling;
  if (x.className === '') {
    x.className += ' visible';
  }
  else {
    x.className = '';
  }
}
