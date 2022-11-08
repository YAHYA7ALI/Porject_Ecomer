<?php
    require_once 'db.php' ;
	$user = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
	$Pass =filter_var(md5($_POST["password"]));
	//$password_md5 = filter_var(md5($Pass));
	$sql = "SELECT * FROM user_1 WHERE name= '$user' and password = '$Pass'
		and dir = 1 ";
	$queryconn = $conn -> query($sql) ;
    $user = $queryconn -> fetch_assoc();
    $id =filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT);
    if ($queryconn -> num_rows > 0) 
    {
        session_start();
        session_regenerate_id();
        $_SESSION['login_id'] = $id ;
        header('Location: ../Dashboard.php');
        exit;
    }
    else 
    {
        header('Location: ../index.php');
        exit;
    }
