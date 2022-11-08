<?php

    require_once 'db.php';
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
    $password = filter_var(md5($_POST['password']));
    //$password_md5 = filter_var(md5($password));
    $img = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $image_folder = 'images/' . $img;
    $dir = filter_var($_POST['dir'],FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
    if (!empty($password)) {
        $updatpass = " UPDATE user_1 SET password = '$password' WHERE id = '$id' ";
        $conn -> query($updatpass);
    }
    $update = "UPDATE user_1 SET name = '$name', email = '$email', address = '$address', password = '$password', img = '$img', dir = '$dir', gender = '$gender' WHERE id = '$id'" ;
    if ($update) {
        move_uploaded_file($tmp, $image_folder);
    }
    if ($conn -> query($update)) 
    {
        header("location: ../user.php");
        exit;
    }
    else 
    {
        echo $conn -> error ;
    }