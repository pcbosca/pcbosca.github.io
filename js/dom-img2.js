function crearImagen() {
    // Crear nodo de tipo Element
    let  imagen = document.createElement("img");

    // Añado atributo src
    imagen.setAttribute("src", "images/Koala.jpg")

    // Añado atributo height
    imagen.setAttribute("height", "100px")

    // Añado atributo class="imgDiv"
    imagen.setAttribute("class", "imgDiv")

    // Añadir el imagen a el encabezado
    let  encab = document.getElementById("encabezado")
    encab.appendChild(imagen)
}

function borrarImagenes() {
    // Finding HTML Elements by Class Name
    let  imagenes = document.getElementsByClassName("imgDiv")
    let  numImagenes = imagenes.length;

    // Recorrer array de imagenes e ir borrando cada una
    // BUCLE WHILE
    let  j = numImagenes - 1;
    while (numImagenes > 0) {
        imagenes[j].remove()
        --numImagenes
        --j
    }
}

let  bot = document.getElementById("boton")
bot.addEventListener("click", crearImagen)

let  botBorrar = document.getElementById("botBorrar")
botBorrar.addEventListener("click", borrarImagenes)