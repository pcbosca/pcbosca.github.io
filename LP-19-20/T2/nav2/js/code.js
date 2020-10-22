function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

var botCerrar = document.getElementById("cerrar");
botCerrar.addEventListener("click", closeNav);

var botLogin = document.getElementById("login");
botLogin.addEventListener("click", openNav);
