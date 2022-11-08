<?php
        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        require_once 'db.php';

        $del = "DELETE FROM user_1 WHERE id = '$id'" ;

        if ($conn -> query($del)) 
        {
            header("location: ../user.php");
            exit;
        } 
        else
        {
            echo $conn->error;
        }
