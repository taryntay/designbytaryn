<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name=”description” content=”ATV/UTV Trails, Racing, Mud Bogs and more in Butler, GA.”/>
	<title>Taylor County Boondocks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css" />
	<link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>libraries/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url(); ?>libraries/js/lightbox-2.6.min.js"></script>
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=539717602746861";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="header">
		<h1><a href="<?php echo site_url(); ?>/login">Taylor County Boondocks Mud Park</a></h1>
		<!--<div class="logo"><a href="index.html"><img src="images/transparentlogo.png" alt="Taylor County Boondocks Mud Park"></a></div>-->
		<div id="login">
			<?php
				if ($this->session->userdata('username') == true)
				{
					echo "You are logged in as {$this->session->userdata('username')}."; 
					echo form_open('login/logout'); ?>
					<p><input class="loginbutton" id="logoutbutton" label="logout" type="submit" name="logout" value="Logout"></p>
					<?php echo form_close();
				}else{
					echo form_open('login/validate_credentials'); ?>
					<p><input type="text" label="username" name="username" id="username" placeholder="username" /></p>
					<p><input type="password" label="password" name="password" id="password" placeholder="password" /></p>
					<p><input class="loginbutton" label="login" type="submit" name="login" value="Login"></p>
					<?php echo anchor('login/signup', 'create an account'); ?>
					<?php echo form_close();?>
					<?php
				}?>
		</div>
	</div>
	
	<nav>
		<ul>
			<li><a href="<?php echo site_url(); ?>/info">Park Info</a></li>
			<li><a href="<?php echo site_url(); ?>/events">Events</a></li>
			<li><a href="<?php echo site_url(); ?>/gallery">Gallery</a></li>
			<li><a href="<?php echo site_url(); ?>/rules">Rules</a></li>
			<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
			<li><a href="<?php echo site_url(); ?>/shop">Buy Tickets</a></li>
		</ul>
	</nav>