<?php

session_start();

function clear() {
    unset($_SESSION["login"]);
    unset($_SESSION["image"]);
    if (ini_get("session.use_cookies")) {
        setcookie(session_name(), '', time()-42000);
    }
    session_destroy();
    header("location:index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <div style="background-color: pink"> -->
    <?php
    if ($_SESSION["login"] == "ok") {
    echo '<img src="images/'.$_SESSION["image"].'">';
    }
    else {
    echo '<img src="images/pigeon.jpeg">';
    }
?>


<form method="POST" action="login.php">
    <input type="text" name="image">
    <button type="submit">Choisir l'image</button>
</form>
<form method="POST" action="logout.php">
<button onclick=clear()>clear</button>
</form>
</div>
</body>
</html>