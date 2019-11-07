"use strict"

/* // Hola mundo
alert("Hola mundo desde JavaScript!!")
  */
function cambia() {
    document.getElementById("miTexto").innerHTML = "<p>Espero que funcione y no me mateis</p>"
}
 
var boton = document.getElementById("boton")
boton.addEventListener("click", cambia)
 /*
// VARIABLES
var n = 12
var m = 4
var resultado = n / m
 
document.write("<h1>El resultado de la division es " + resultado + "</h1>")
document.write("<p>Enlace a: <a href='http://www.elpais.es'>El Pais</a></p>")
 
console.log("El resultado de la division es " + resultado)
 
// CONDICION IF
var edad = 40
 
if (edad > 120) {
    alert("Record GUINESS eres la persona mas longeva del mundo")
    alert("Felicidades")
} else {
    alert("Eres un mortal normal y corriente")
}
 
var informeEncabezados = ["Introducción", "Historia", "Resultados", "Conclusion"]
 
document.write("<h1>" + informeEncabezados[0] + "</h1>")
document.write("<h1>" + informeEncabezados[1] + "</h1>")
document.write("<h1>" + informeEncabezados[2] + "</h1>")
document.write("<h1>" + informeEncabezados[3] + "</h1>")
 
// BUCLE FOR
for (var j = 0; j < 4; j++) {
    alert(j)
    if (j == 1) {
        document.write("<h2>" + informeEncabezados[j] + "</h2>")
    } else {
        document.write("<h1>" + informeEncabezados[j] + "</h1>")
    }
}
 
// BUCLE WHILE
var j = 0
while (j < 4) {
    alert(j)
    if (j == 1) {
        document.write("<h2>" + informeEncabezados[j] + "</h2>")
    } else {
        document.write("<h1>" + informeEncabezados[j] + "</h1>")
    }
    // j = j + 1
    ++j
}
 */

var informeEncabezados = ["Introducción", "Historia", "Resultados", "Conclusion"]

var informeEncabezados1 = ["Viva la Pepa", "God save the Queen", "Cosero", "Final"]

var informeEncabezados2 = ["Castellon", "Valencia", "Alicante", "Murcia"]
/*
// FOR-IF BUCLE orden inverso
for (var j = 4; j >= 0; --j) {
    if (j == 0) {
        document.write("<h1>" + informeEncabezados[j] + "</h1>")
    }
    if (j == 1) {
        document.write("<h2>" + informeEncabezados[j] + "</h2>")
    }
    if (j == 2) {
        document.write("<h2>" + informeEncabezados[j] + "</h2>")
    }
    if (j == 3) {
        document.write("<h3>" + informeEncabezados[j] + "</h3>")
    }
    alert(j)
}
*/

// BUCLE FOR y SWITCH, FUNCIONES
function muestraEncabezados(informe) {
    for (var j = 0; j < 4; ++j) {
        switch (j) {
            case 0:
                document.write("<h1>" + informe[j] + "</h1>")
                break
            case 1:
            case 2:
                document.write("<h2>" + informe[j] + "</h2>")
                break
            case 3:
                document.write("<h3>" + informe[j] + "</h3>")
                break
        }
        alert(j)
    }
}

// Funciones: FUNCTION
function calculaIVA(importe) {
    var total = importe * 0.21
    return total
}
var cantidad = 45000
document.write("<p>El IVA de " + cantidad + " es " + calculaIVA(cantidad) + "</p>")

muestraEncabezados(informeEncabezados)
muestraEncabezados(informeEncabezados1)
muestraEncabezados(informeEncabezados2)

var bn = false
function blancoYNegro() {
    var objeto = document.getElementById("miFoto1")
    if (bn == false) {
        objeto.style.filter = "grayscale(100%)"
        bn = true
    } else {
        objeto.style.filter = ""
        bn = false
    }
}
/*
var miImagen1 = document.getElementById("miFoto1")
miImagen1.addEventListener("click", blancoYNegro)*/

var bn2 = false
function borroso() {
    var objeto = document.getElementById("miFoto2")
    if (bn2 == false) {
        objeto.style.filter = "blur(5px)"
        bn2 = true
    } else {
        objeto.style.filter = ""
        bn2 = false
    }
}

/*var miImagen2 = document.getElementById("miFoto2")
miImagen2.addEventListener("click", borroso)*/

// Version mejorada blanco y negro
function ponBlancoYNegro() {
    var objeto = document.getElementById("miFoto1")
    objeto.style.filter = "grayscale(100%)"
}

function quitaBlancoYNegro() {
    var objeto = document.getElementById("miFoto1")
    objeto.style.filter = ""
}

var miImagen1 = document.getElementById("miFoto1")
miImagen1.addEventListener("mouseover", ponBlancoYNegro)
miImagen1.addEventListener("mouseout", quitaBlancoYNegro)

// Version mejorada de blur
/* function ponBlur() {
    var objeto = document.getElementById("miFoto2")
    objeto.style.filter = "blur(5px)"
}
 
function quitaBlur() {
    var objeto = document.getElementById("miFoto2")
    objeto.style.filter = ""
}
 
var miImagen2 = document.getElementById("miFoto2")
miImagen2.addEventListener("mouseover", ponBlur)
miImagen2.addEventListener("mouseout", quitaBlur) */

// Version mejorada de blur
function ponBlur(objeto) {
    objeto.style.filter = "blur(5px)"
}

function quitaBlur(objeto) {
    objeto.style.filter = ""
}

var miImagen2 = document.getElementById("miFoto2")
if (miImagen2) {
    miImagen2.addEventListener("mouseover", function () { ponBlur(this) })
    miImagen2.addEventListener("mouseout", function () { quitaBlur(this) })
}

var miTexto = document.getElementById("miTexto")
miTexto.addEventListener("mouseover", function () { ponBlur(this) })
miTexto.addEventListener("mouseout", function () { quitaBlur(this) })

// Version mejorada de blur y saturate
/* function ponBlurYSature() {
   var objeto = document.getElementById("miFoto3")
   objeto.style.filter = "blur(5px) saturate(4)"
}
 
function quitaBlurYSature() {
   var objeto = document.getElementById("miFoto3")
   objeto.style.filter = ""
}
 
var miImagen3 = document.getElementById("miFoto3")
miImagen3.addEventListener("mouseover", ponBlurYSature)
miImagen3.addEventListener("mouseout", quitaBlurYSature) */

// Version remejorada de blur y saturate
function ponBlurYSature(objeto) {
    objeto.style.filter = "blur(5px) saturate(4)"
}

function quitaBlurYSature(objeto) {
    objeto.style.filter = ""
}

var miImagen1 = document.getElementById("miFoto1")
miImagen1.addEventListener("mouseover", function () { ponBlurYSature(this) })
miImagen1.addEventListener("mouseout", function () { quitaBlurYSature(this) })

var miImagen2 = document.getElementById("miFoto2")
if (miImagen2) {
    miImagen2.addEventListener("mouseover", function () { ponBlurYSature(this) })
    miImagen2.addEventListener("mouseout", function () { quitaBlurYSature(this) })
}

var miImagen3 = document.getElementById("miFoto3")
if (miImagen3) {
    miImagen3.addEventListener("mouseover", function () { ponBlurYSature(this) })
    miImagen3.addEventListener("mouseout", function () { quitaBlurYSature(this) })
}

var miImagen4 = document.getElementById("miFoto4")
if (miImagen4) {
    miImagen4.addEventListener("mouseover", function () { ponBlurYSature(this) })
    miImagen4.addEventListener("mouseout", function () { quitaBlurYSature(this) })
}