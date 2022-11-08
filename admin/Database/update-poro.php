<?php

    require_once 'db.php';
        $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
        $name = filter_var($_POST ['name'],FILTER_SANITIZE_STRING);
        $price = filter_var($_POST ['price'],FILTER_SANITIZE_NUMBER_INT);
        $sale = filter_var($_POST ['sale'],FILTER_SANITIZE_NUMBER_INT);
        $description = filter_var($_POST ['description'],FILTER_SANITIZE_STRING);
        $img = $_FILES['img']['name'];
        $temp = $_FILES['img']['tmp_name'];
        $cat_id = filter_var($_POST ['cat_id'],FILTER_SANITIZE_NUMBER_INT);
        $update_1 = "UPDATE products SET name = '$name',price = '$price',sale = '$sale', description = '$description', img = '$img', cat_id = '$cat_id' WHERE id = '$id'";
        if ($conn -> query($update_1)) {
            header('location:../Porodacet.php');
            exit;
        }else {
            echo $conn -> error ;
        }