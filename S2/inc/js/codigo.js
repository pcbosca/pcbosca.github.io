function desplegar_menu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var btnHamburguesa = document.getElementById("btnHamb");
if (btnHamburguesa) {
  btnHamburguesa.addEventListener("click", function() {
    desplegar_menu();
  });
}
