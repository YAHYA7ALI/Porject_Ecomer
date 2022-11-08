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

		$page = 'Dashboard'; 
		include ('Database/db.php');
		include('incloud/header.php'); 
		include('incloud/sidebar.php'); 
		include('incloud/scrool.php');
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>Dashboard</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding">
							<em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">
								<?php  
								
									$select = "SELECT * FROM products" ;
									
									$query = $conn -> query($select);
									
									$num = $query  -> num_rows ;
									
									echo $num ;

								?>
							</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding">
							<em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">
							<?php  
								
								$select = "SELECT * FROM messages" ;
								
								$query = $conn -> query($select) ;
								
								$num = $query  -> num_rows ;
								
								echo $num ;
							?>
							</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding">
							<em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">
								<?php  
									
									$select = "SELECT * FROM user_1" ;
									
									$query = $conn -> query($select) ;
									
									$num = $query  -> num_rows ;
									
									echo $num ;
								?>
							</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding">
							<em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
			<?php include ('incloud/chart.php')?>
	</div>
	<?php include('incloud/footer.php') ?>