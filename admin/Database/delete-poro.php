<?php

        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        require_once 'db.php';

        $delt = "DELETE FROM products WHERE id = '$id'" ;

        if ($conn -> query($delt))
        {
        header("location: ../Porodacet.php");
        exit;
        }
        else
        {
        echo $conn->error;
        }