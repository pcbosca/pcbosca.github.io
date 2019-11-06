
function cambiaColorRojo() {
    var parrafos = document.getElementsByTagName("p")
    var num_parrafos = parrafos.length

    console.log(parrafos)
    console.log(num_parrafos)

    for (var i = 0; i < num_parrafos; i++) {
        parrafos[i].style.color = "rgb(255,0,0)"
    }
}

var boton = document.getElementById("boton")
boton.addEventListener("click", cambiaColorRojo)



