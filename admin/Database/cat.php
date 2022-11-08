<?php

    require_once 'db.php';
        $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
        $name = filter_var($_POST ['name'],FILTER_SANITIZE_STRING);
        $update_1 = "UPDATE category SET name = '$name' WHERE id = '$id'";
        if ($conn -> query($update_1)) {
            header('location:../Category.php');
            exit;
        }else {
            echo $conn -> error ;
        }