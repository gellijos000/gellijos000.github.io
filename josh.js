function joshScript() {
  var figures = {};

  figures = document.getElementsByTagName('figure');
  console.log(figures);

  for(var i = 0; i < figures.length; i++) {
    figures[i].addEventListener(
      "click",
      function() {
        alert(this.innerHTML);
      }
    );
  }
}

document.addEventListener(
  "load",
  joshScript()
);
