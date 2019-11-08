const crearImagen = function() {
    // Crear nodo de tipo Element
    let  imagen = document.createElement("img");

    // Añado atributo src
    imagen.setAttribute("src", "images/Koala.jpg")

    // Añado atributo height
    imagen.setAttribute("height", "100px")

    // Añadir el imagen a el encabezado
    let  encab = document.getElementById("encabezado")
    encab.appendChild(imagen)
}

const borrarImagenes = function() {
    // HTML DOM querySelectorAll() Method
    let  imagenes = document.querySelectorAll("#encabezado > img")
    let  numImagenes = imagenes.length;

    // Recorrer array de imagenes e ir borrando cada una
    // BUCLE WHILE
    let  j = numImagenes - 1;
    while (j >= 0) {
        imagenes[j].remove()
        //imagenes[j].parentNode.removeChild(imagenes[j]);
        --j
    }
}

let  bot = document.getElementById("boton")
bot.addEventListener("click", crearImagen)

let  botBorrar = document.getElementById("botBorrar")
botBorrar.addEventListener("click", borrarImagenes)