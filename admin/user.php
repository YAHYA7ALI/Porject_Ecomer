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
        $page = 'user' ;
        include 'incloud/header.php' ;
        include 'incloud/sidebar.php' ; 
        include 'incloud/scrool.php' ;
    ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <em class="fa fa-users"></em>
                </a>
            </li>
            <li>Users</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
            <?php
                if (!isset($_GET['action'])) 
                    {
                        include('Design/user-table.php');
                    }
                        elseif ($_GET['action'] == 'add') 
                    {
                        include('Design/add-user.php');
                    } 
                        elseif ($_GET['action'] == 'edit') 
                    {
                        include('Design/edit-user.php');
                    }
            ?>
        </div>
    </div>
    <?php include 'incloud/footer.php' ?>