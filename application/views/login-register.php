<!doctype html>
	<head>
		<title><?php if($title){ echo $title;}?></title>
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="<?php echo base_url();?>">
					<i class="fa fa-comments-o fa-lg"></i>
					
				  </a>
				  <a class="navbar-brand" href="<?php echo base_url()?>">Messanger</a>
				</div>
			  </div>
			</nav>
		</header>
		<div class="container">
		<?php $this->lib->alert_message();?>
			<div class="col-lg-4" style="background:#2b85c1;height:500px">
				<h1><i class="fa fa-comments"></i>Messager</h1>
				<h4>Your tagline here</h4>
			
			</div>
			
			<div class="col-lg-4" style="background:#ecf0f1">
				<h2><i class="fa fa-plus-circle"></i> Signup</h2>
				<hr>
				<form class="form" action="<?php echo base_url('home/signup')?>" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name"  class="form-control" placeholder="Your name" required>
					</div>
					
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Your email" required>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="Your password" required>
					</div>
					
					<div class="form-group">
						<label>Repeat password</label>
						<input type="password" class="form-control" name="cpassword" placeholder="Type password again" required>
					</div>
					
					<div class="form-group">
					<p><i class="fa fa-check-circle"></i> By Singing up, you agrees our terms</p>
						<button class="btn btn-success btn-block"><i class="fa fa-save"></i> Signup</button>
					</div>
					
					
				
				</form>
				<hr>
			
			</div>
			
			<div class="col-lg-4 bg-warning">
				<h2><i class="fa fa-sign-in"></i> Login</h2>
				
				<hr>
				<h4>Login with your email/password and enter search user to chat</h4>
				<form class="form" action="<?php echo base_url('home/login')?>" method="post">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<button class="btn btn-warning btn-block">Login</button>
					</div>
				
				
				</form>
			
			</div>
		
		
		
		</div>
	
	</body>

<!doctype!>