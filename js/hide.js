// Solución chapuzera
/* function ocultar() {
    //alert("Ocultar")
    var contenedor = document.getElementById("contenedor")
    contenedor.innerHTML = ""

    //document.write("");
} */

// Solución elegante
/* function ocultar() {
    //alert("Ocultar")
    var contenedor = document.getElementById("contenedor")
    contenedor.style.display = "none"
} */

// Solución elegante 2.0
function ocultar() {
    //alert("Ocultar")
    var contenedor = document.getElementById("contenedor")
    contenedor.style.visibility = "hidden"
}

var cerrar = document.getElementById("cerrar")
cerrar.addEventListener("click", ocultar)