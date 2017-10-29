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
					<i class="fa fa-comments-o fa-lg"></i>
					
				  </a>
				  <a class="navbar-brand" href="<?php echo base_url()?>">Messanger</a>
				 
				</div>
				 <a href="<?php echo base_url('logout')?>"><span class="pull-right"><i class="fa fa-power-off"></i> Logout</span></a>
				 <span class="pull-right"><i class="fa fa-user"></i> Hi <?php echo $this->session->userdata('name');?> | </span>
			  </div>
			</nav>
		</header>
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 bg-warning" style="padding:20px;height:500px;background:#efefef">
				<form class="form" action="<?php echo base_url('search')?>" method="get">
					<div class="form-group">
						<input type="search" name="q" placeholder="Search user" required class="form-control">
					</div>
				</form>
				<ul class="nav nav-pills nav-stacked">
				<?php 
				if($side_user){
						foreach($side_user as $su){
						if($su->from_id==$me){
						continue;	
						}
						
						?>
						 <li class="<?php if($su->from_id==$user_id){ echo "active";}?>"><a href="<?php echo base_url('message/'.$su->from_id)?>"><i class="fa fa-user fa-lg"></i> <?php echo $this->lib->get_row('users','id',$su->from_id,'name');?><span class="badge badge-warning pull-right"><?php echo $this->lib->count_multiple('message',array('from_id'=>$su->from_id,'to_id'=>$me,'seen_at'=>''))?></span></a></li>
						<?php
						}
				}
				
				?>
				 
				</ul>
			
			</div>
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
			
				<div class="col-lg-12" style="height:380px;overflow-y:scroll" id="messages">
				<?php 
				if($user_id):	
				?>
					<ul class="list-group">
					<?php 
						if($uchat){
							foreach($uchat as $msg){
							$this->lib->update('message',array('seen_at'=>time()),'id',$msg->id);
								if($msg->to_id==$user_id){
							?>	
							<li class="list-group-item" style="background:#D9EDF7"><i class="fa fa-user fa-fw fa-2x"></i><strong>Me </strong> <?php echo $msg->message?>
							<p><small><i class="fa fa-clock-o"></i> <?php echo timespan($msg->sent_at,time(),2);?> ago</small>	</p>
							</li>
							<?php	
							continue;
								}elseif($msg->from_id==$user_id){
								?>
								<li class="list-group-item" style="text-align:right"> <?php echo $msg->message?> <i class="fa fa-user fa-fw fa-2x"></i><strong><?php echo $this->lib->get_row('users','id',$msg->from_id,'name')?> </strong>
								<p><small><i class="fa fa-clock-o"></i> <?php echo timespan($msg->sent_at,time(),2);?> ago</small>	</p>
								</li>
								<?php
								}
							}
						}
					?>
					  
					</ul>
				<?php 
				else:
				?>
				<h1 align="center"><i class="fa fa-inbox"></i></h1>
				<h2 align="center">Please select a friend to message</h2>
				<?php
				endif;
				;	
				?>
				</div>
				<div class="col-lg-12 bg-info" style="padding:20px;">
					<form class="form" method="post" action="">
						<input type="hidden" name="to_id" value="<?php echo $user_id;?>">
						<div class="col-lg-12">
							<input type="text" autofocus class="form-control" name="message" placeholder="Type a message to send" <?php if(!$user_id){ echo "disabled";}?>>
						</div>
					</form>
				</div>
		
			</div>
		</div>
		<?php 
		if($user_id):	
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
	$(function() {
  var wtf    = $('#messages');
  var height = wtf[0].scrollHeight;
  wtf.scrollTop(height);
});

setInterval(function(){$('#messages').load('<?php echo base_url('message/ajax_message/'.$user_id)?>');
	var wtf    = $('#messages');
  var height = wtf[0].scrollHeight;
  wtf.scrollTop(height); }, 2000);
	</script>
	<?php 
		endif;
		?>
	</body>

<!doctype!>