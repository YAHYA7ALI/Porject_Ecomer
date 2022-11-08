<?php
        session_start();
        session_regenerate_id();
        if (!isset($_SESSION['login_id'])) 
        {
            header('location: index.php');
            exit;
        }
    ?>
    <?php
        $page = 'Category';
        include('incloud/header.php');
        include('incloud/sidebar.php'); 
        include('incloud/scrool.php');
    ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-list-alt"></em>
                </a></li>
            <li>Category</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category</h1>
        </div>
    </div>
    <?php
        if (!isset($_GET['action'])) 
        {
            include('Design/Category/table.php');
        } 
        elseif ($_GET['action'] == 'add') 
        {
            include('Design/Category/add.php');
        } 
        elseif ($_GET['action'] == 'edit') 
        {
            include('Design/Category/edit.php');
        }
        
    ?>
</div>