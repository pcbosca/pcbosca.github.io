function crearParrafo() {
  // Crear nodo de tipo Element
  var parrafo = document.createElement("p");

  // Crear nodo de tipo Text
  var contenido = document.createTextNode(
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate dicta sequi harum ipsum obcaecati necessitatibus eaque labore qui eum ad?"
  );

  // Añadir el nodo Text como hijo del nodo Element
  parrafo.appendChild(contenido);

  // Añadir el parrafo a el encabezado
  var encab = document.getElementById("encabezado");
  encab.appendChild(parrafo);
}

function borrarParrafos() {
  var parrafos = document.getElementsByTagName("p");
  var numParrafos = parrafos.length;

  // Version vieja
  // para borrar un hijo acceder al padre y desde padre borrar el hijo
  //parrafos[numParrafos-1].parentNode.removeChild(parrafos[numParrafos-1]);

  // Version moderna
  // borrar directamente el hijo
  parrafos[numParrafos - 1].remove();
}

var bot = document.getElementById("boton");
bot.addEventListener("click", crearParrafo);

var botBorrar = document.getElementById("botBorrar");
botBorrar.addEventListener("click", borrarParrafos);
