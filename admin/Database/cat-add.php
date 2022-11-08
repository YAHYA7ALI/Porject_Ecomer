<?php
require_once 'db.php';
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $insert = "INSERT INTO category (name)VALUES('$name' )";
    $query = $conn -> query($insert);
    if ($query) {
        header("location:../Category.php");
        exit;
    }else {
        echo $conn -> error;
    }
