let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

var prev = document.getElementById("prev")
prev.addEventListener("click", function () { plusSlides(-1) })

var next = document.getElementById("next")
next.addEventListener("click", function () { plusSlides(1) })

/* var dot1 = document.getElementById("dot1")
dot1.addEventListener("click", function () { currentSlide(1) })

var dot2= document.getElementById("dot2")
dot2.addEventListener("click", function () { currentSlide(2) })

var dot3 = document.getElementById("dot3")
dot3.addEventListener("click", function () { currentSlide(3) })

var dot4 = document.getElementById("dot4")
dot4.addEventListener("click", function () { currentSlide(4) })

var dot5 = document.getElementById("dot5")
dot5.addEventListener("click", function () { currentSlide(5) }) */

// BUCLE FOR
var dot = []
for (var i = 0; i < 5; i++) {
    let e = i + 1
    dot[i] = document.getElementById("dot" + e)
    dot[i].addEventListener("click", function () { currentSlide(e) })
}
