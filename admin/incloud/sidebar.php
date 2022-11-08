
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <?php 
                require_once 'Database/db.php' ;
                $userId = $_SESSION['login_id'] ;
                $query = $conn -> query("SELECT * FROM user_1 WHERE id = $userId ") ;
                $img = $query -> fetch_assoc();
                echo"<img class='user-img-radious-style' src='images/" . $img['img'] . "' alt='image'>";
            ?>
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                <?php 
                    $query = $conn -> query("SELECT * FROM user_1 WHERE id = $userId ") ;
                    $name = $query -> fetch_assoc();
                    echo filter_var($name['name'],FILTER_SANITIZE_STRING);
                ?>
            </div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <?php
        function setActive($name)
        {
            global $page;
            if (isset($page) && $page == $name)
            {
                echo "class = 'active'";
            }
        }
    ?>
    <style>
        .active
        {
            background-color: #30a8fc !important;
        }
    </style>
    <ul class="nav menu">
        <li><a <?php setActive('Dashboard'); ?> href="Dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a <?php setActive('Porodacet'); ?> href="Porodacet.php"><em class="fa fa-product-hunt">&nbsp;</em> Porodacet</a></li>
        <li><a <?php setActive('Category'); ?> href="Category.php"><em class="fa fa-list-alt">&nbsp;</em> Category</a></li>
        <li><a <?php setActive('user'); ?> href="user.php"><em class="fa fa-users">&nbsp;</em> Users</a></li>
        <li><a <?php setActive('Messages'); ?> href="Messages.php"><em class="fa fa-envelope">&nbsp;</em> Messages</a></li>
        <li><a href="Database/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>
