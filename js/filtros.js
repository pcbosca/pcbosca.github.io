// Version remejorada de blur y saturate
function ponBlurYSature(objeto) {
    objeto.style.filter = "blur(5px) saturate(4)"
}

function quitaBlurYSature(objeto) {
    objeto.style.filter = ""
}

/* var miImagen1 = document.getElementById("miFoto1")
miImagen1.addEventListener("mouseover", function() {ponBlurYSature(this)})
miImagen1.addEventListener("mouseout", function() {quitaBlurYSature(this)})

var miImagen2 = document.getElementById("miFoto2")
miImagen2.addEventListener("mouseover", function() {ponBlurYSature(this)})
miImagen2.addEventListener("mouseout", function() {quitaBlurYSature(this)})

var miImagen3 = document.getElementById("miFoto3")
miImagen3.addEventListener("mouseover", function() {ponBlurYSature(this)})
miImagen3.addEventListener("mouseout", function() {quitaBlurYSature(this)})

var miImagen4 = document.getElementById("miFoto4")
miImagen4.addEventListener("mouseover", function() {ponBlurYSature(this)})
miImagen4.addEventListener("mouseout", function() {quitaBlurYSature(this)}) */

// Version 1
/* var misImagenes = document.getElementsByTagName("img")

var i
for (i = 0; i < misImagenes.length; i++) {
    misImagenes[i].addEventListener("mouseover", function() {ponBlurYSature(this)})
    misImagenes[i].addEventListener("mouseout", function() {quitaBlurYSature(this)})
} */

// Version 2
var misImagenes = document.images

var i
for (i = 0; i < misImagenes.length; i++) {
    misImagenes[i].addEventListener("mouseover", function() {ponBlurYSature(this)})
    misImagenes[i].addEventListener("mouseout", function() {quitaBlurYSature(this)})
}