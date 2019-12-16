window.onscroll = function () { myFunction() };

function myFunction() {
  if (document.body.scrollTop > 245 || document.documentElement.scrollTop > 245) {
    document.getElementById("escudo").className = "";
    var x = document.getElementsByClassName("nav-item");
    var i;
    for (i = 0; i < x.length; i++) {
      x[i].classList.add('animacion');
    }

  } else {
    document.getElementById("escudo").className = "d-none";
    var x = document.getElementsByClassName("nav-item");
    var i;
    for (i = 0; i < x.length; i++) {
      x[i].classList.remove('animacion');
    }
  }
}
