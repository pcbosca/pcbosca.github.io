// Solución elegante 3.0
function ocultarImagen() {
  var contenedor = document.getElementById("contenedor");
  contenedor.style.visibility = "hidden";

  var mostrar = document.getElementById("mostrar");
  mostrar.style.visibility = "visible";
}

function mostrarImagen() {
  var contenedor = document.getElementById("contenedor");
  contenedor.style.visibility = "visible";

  var mostrar = document.getElementById("mostrar");
  mostrar.style.visibility = "hidden";
}

var cerrar = document.getElementById("cerrar");
cerrar.addEventListener("click", ocultarImagen);

var mostrar = document.getElementById("mostrar");
mostrar.addEventListener("click", mostrarImagen);
