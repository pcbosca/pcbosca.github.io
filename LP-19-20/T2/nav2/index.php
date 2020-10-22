<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Fullscreen Navigation with Login</title>
</head>

<body>

    <div id="myNav" class="overlay">
        <a id="cerrar" href="javascript:void(0)" class="closebtn">&times;</a>
        <div class="overlay-content">
            <?php
include "form.html";
?>
        </div>
    </div>
    <nav>
        <a href="https://es-es.facebook.com/"><img src="images/iconmonstr-facebook-4-240.png" alt="Facebook">Facebook
            |</a>
        <a href="https://twitter.com/?lang=es"><img src="images/iconmonstr-twitter-1-240.png" alt="Twitter">Twitter
            |</a>
        <a href="https://mail.google.com"><img src="images/iconmonstr-gmail-1-240.png" alt="Gmail">Gmail |</a>
        <a href="https://www.instagram.com/?hl=es"><img src="images/iconmonstr-instagram-11-240.png"
                alt="Instagram">Instagram |</a>
        <img id="login" src="images/iconmonstr-key-10-48.png" alt="Login">
    </nav>

    <script src="js/code.js"></script>

</body>

</html>