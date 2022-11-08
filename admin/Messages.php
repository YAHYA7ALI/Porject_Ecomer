	<?php 
		session_start();
		session_regenerate_id();
		if (!isset($_SESSION['login_id'])) 
		{
			header('Location: index.php');
			exit;
		}
	?>
	<?php
		$page = 'Messages';
		require_once 'incloud/header.php';
		require_once 'incloud/sidebar.php';
		require_once 'incloud/scrool.php';
	?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<em class="fa fa-envelope"></em>
					</a>
				</li>
				<li>Messages</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div>
	</div>
    <?php require_once 'incloud/footer.php';?>
    