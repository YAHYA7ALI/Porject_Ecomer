<?php
require_once 'db.php';
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $price = filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
    $sale = filter_var($_POST['sale'],FILTER_SANITIZE_NUMBER_FLOAT);
    $description = filter_var($_POST['description'],FILTER_SANITIZE_STRING);
    $img = $_FILES ['img']['name'] ;
    $temp = $_FILES ['img']['tmp_name'];
    if ($_FILES['img']['error'] == 0) 
    {
        $exstensions = ['jpg', 'jpeg', 'gif', 'png'];
        $ext = pathinfo($img , PATHINFO_EXTENSION);
    /* 
        /////very important/////
        PATHINFO_DIRNAME - return only dirname
        PATHINFO_BASENAME - return only basename
        PATHINFO_EXTENSION - return only extension
        PATHINFO_FILENAME - return only filename
    */
            if (in_array($ext , $exstensions)) 
            {
                    if ($_FILES['img']['size'] < 2000000) 
                    {
                        $newName = md5(uniqid(). '.' . $ext) ;
                        move_uploaded_file($temp,'../images/' . $newName);
                    }
                    else 
                    {
                        echo "File Size Is To Big" ;
                    }
            }
            else 
            {
                echo " Worning File Exstensions " ;
            }
    }
    else 
    {
        echo "You Must Upload In Image" ;
    }
    $category =filter_var( $_POST ['cat_id'],FILTER_SANITIZE_NUMBER_INT) ;
    $insert = "INSERT INTO products (name , price , sale , description, img , cat_id)VALUES('$name' , '$price' , '$sale','$description', '$newName' , '$category')";
    $query = $conn -> query($insert);
    if ($query) {
        header("location:../Porodacet.php");
        exit;
    }else {
        echo $conn -> error;
    }
