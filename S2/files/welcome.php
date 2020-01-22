<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <?php
/* reading data from form */
$user_f = trim($_POST["name"]);
$passwd_f = trim($_POST["passwd"]);
/* reading data from file: users.txt */
$myfile = fopen("users.txt", "r") or die("Unable to open file!");
$user = trim(fgets($myfile));
$passwd = trim(fgets($myfile));
fclose($myfile);

/* for debuging */
echo strcmp($user, $user_f) . '<br>';
echo $user_f . '<br>';
echo $user . '<br>';
echo strcmp($passwd, $passwd_f) . '<br>';
echo $passwd_f . '<br>';
echo $passwd . '<br>';

if ((strcmp($user, $user_f) == 0) &&
    (strcmp($passwd, $passwd_f) == 0)) {
    echo "<h1>Access authorized.</h1>";

    echo "Welcome " . $user_f . "<br>";
    echo "Your password is: " . $passwd_f . "<br>";
} else {
    echo "<h1>Access denied.</h1>";
}
?>

    </div>
</body>

</html>