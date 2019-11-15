"use strict"

function toggleFlag() {
    var flag = document.getElementById("flag")

    // One solution
    //flag.classList.toggle("change");
    // Another
    if (flag.style.display === "none" || !flag.style.display) {
        flag.style.display = "block";
    } else {
        flag.style.display = "none";
    }
}

var botToggle = document.getElementById("botToggle")
botToggle.addEventListener("click", toggleFlag)