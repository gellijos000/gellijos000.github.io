var headerNav = document.getElementsByClassName('navigation');

for(var i = 0; i < headerNav.length; i++) {
  if (headerNav[i].getAttribute('active') == true) {
    headerNav[i].className += (' active');
  }

  headerNav[i].addEventListener(
    "click",
    function() {
    },
    false
  );
}
