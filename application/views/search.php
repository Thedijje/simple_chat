<!doctype html>
	<head>
		<title><?php if($title){ echo $title;}?></title>
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	
	<style>
		nav a{
		color:#fff !important;
		}
		
		nav{
		background:#2c3e50 !important;
		}
	</style>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="<?php echo base_url();?>">
					<i class="fa fa-comments-o fa-lg" style="color:#fff"></i>
					
				  </a>
				  <a class="navbar-brand" href="<?php echo base_url()?>">Messanger</a>
				 
				</div>
				 <a href="<?php echo base_url('logout')?>"><span class="pull-right"><i class="fa fa-power-off"></i> Logout</span></a>
			  </div>
			</nav>
		</header>
		<div class="container">
			<h1><i class="fa fa-search"></i> Search Page</h1>
			<hr>
			<form class="form" action="">
				<input type="search" name="q" placeholder="Search by name and hit enter" required class="form-control input-lg">
			</form>
			<hr>
			<?php 
			if($search){
				foreach($search as $sd){
				?>
				<div class="col-lg-8">
					<div class="col-lg-2">
						<h1 style="color:#f0ad4e"><i class="fa fa-user fa-2x"></i></h1>
					</div>
					<div class="col-lg-8">
						<h2><?php echo $sd->name;?></h2>
						<p>Last Active <?php echo timespan($sd->last_active,time(),2)?> ago</p>
					</div>
					<div class="col-lg-2">
						<a href="<?php echo base_url('message/'.$sd->id)?>"><button class="btn btn-success btn-lg"><i class="fa fa-comment"></i> Message</button></a>
					</div>
				
				</div>
				<?php
				}
			}else{
				?>
				<div class="alert alert-danger">
					<p><i class="fa fa-times-circle"></i> No user found</p>
				</div>
				<?php
				}
			?>
		</div>
	</body>

<!doctype!>