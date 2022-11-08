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
        $page = 'Porodacet';
        include('incloud/header.php');
        include('incloud/sidebar.php'); 
        include('incloud/scrool.php');
    ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-product-hunt"></em>
                </a></li>
            <li>Porodacet</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Porodacet</h1>
        </div>
    </div>
    <?php
        if (!isset($_GET['action'])) 
        {
            include('Design/Porodacet/table.php');
        } 
        elseif ($_GET['action'] == 'add') 
        {
            include('Design/Porodacet/add.php');
        } 
        elseif ($_GET['action'] == 'edit') 
        {
            include('Design/Porodacet/edit-poro.php');
        }
        
    ?>
</div>