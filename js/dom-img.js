function crearImagen() {
  // Crear nodo de tipo Element
  var imagen = document.createElement("img");

  // Añado atributo src
  imagen.setAttribute("src", "images/Koala.jpg");

  // Añado atributo height
  imagen.setAttribute("height", "100px");

  // Añadir el imagen a el encabezado
  var encab = document.getElementById("encabezado");
  encab.appendChild(imagen);
}

var bot = document.getElementById("boton");
bot.addEventListener("click", crearImagen);
