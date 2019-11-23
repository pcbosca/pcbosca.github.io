"use strict";

function verInformacionEnlaces() {
  // Pone número de enlaces
  var textEnlaces = document.getElementById("numEnlaces");
  var enlaces = document.links;
  textEnlaces.innerHTML = enlaces.length;

  // Pone dirección a la que enlaza el penúltimo enlace
  var textPenulEnlace = document.getElementById("dirEnlace");
  textPenulEnlace.innerHTML = enlaces[enlaces.length - 2].href;

  // Pone número de enlaces del tercer párrafo
  var textEnlace3Par = document.getElementById("numEnlaces3Parrafo");

  var enlacesParrafo3 = document.querySelectorAll("#parrafo3 a");
  textEnlace3Par.innerHTML = enlacesParrafo3.length;
}

var botVer = document.getElementById("botVer");
botVer.addEventListener("click", verInformacionEnlaces);
