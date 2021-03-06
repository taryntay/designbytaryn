	<!--  Navigation  -->
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
<div id="content_wrapper">
	
	<!--  Signup form  -->
	<div id="signupform">
		<div id="errors">
			<?php echo validation_errors('<p class="signuperror">Error: ');?>
		</div>

		<h2>Your Name</h2>
		<?php
			echo form_open('login/create_user');
		?>

			<p><input type="text" name="first_name" id="first_name" placeholder="full name" class="largeinput" /></p>

			<h2>Your Email</h2>
			<p><input type="text" name="email" id="email" class="largeinput" /></p>

			<h2>Newsletter</h2>
			<p><input type="checkbox" name="newsletter" value="newsletter" checked="checked" class="largecheckbox" />Sign up to receive email updates.</p>

			<h2>Login Info</h2>

			<p><input type="text" name="username" id="username" placeholder="username" class="largeinput" /></p>
			<p><input type="text" name="password" id="password" placeholder="password" class="largeinput" /></p>
			<p><input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="confirm password" class="largeinput" /></p>
			<p><input type="submit" value="Submit" class="contactbutton"></p>
		
		<?php
			echo form_close();
		?>
	</div>
</div>