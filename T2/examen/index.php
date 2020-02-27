<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen - Inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
    $menu1 = "active";
    $menu2 = "";
    $menu3 = "";
    include "header.php";?>
    <div style="padding-left:16px">
        <h2>Top Navigation Example</h2>
        <p>Some content..</p>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php include "form.html";?>
    </div>
    <?php include "footer.html";?>
    <script src="js/code.js">
    </script>
</body>

</html>