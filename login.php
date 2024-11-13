<?php

session_start();


    $_SESSION["image"] = $_POST["image"];
    $_SESSION["login"] = "ok";
    header("location:index.php");

?>