function expandImage() {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = this.src;
    imgText.innerHTML = this.alt;
    expandImg.parentElement.style.display = "block";
}

function closeImage() {
    this.parentElement.style.display = 'none'
}

var cierra = document.getElementById("cierra")
cierra.addEventListener("click", closeImage)

/* var img1 = document.getElementById("img1")
img1.addEventListener("click", expandImage)

var img2 = document.getElementById("img2")
img2.addEventListener("click", expandImage)

var img3 = document.getElementById("img3")
img3.addEventListener("click", expandImage)

var img4 = document.getElementById("img4")
img4.addEventListener("click", expandImage)

var img5 = document.getElementById("img5")
img5.addEventListener("click", expandImage)

var img6 = document.getElementById("img6")
img6.addEventListener("click", expandImage) */

var imgs = document.querySelectorAll(".row img")

for (var i = 0; i < imgs.length; i++) {
    imgs[i].addEventListener("click", expandImage)
}