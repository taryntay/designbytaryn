<div id="content_wrapper">

		<!--  Form that displays when a user must be logged in to access.  -->
		<div id="mustlogin">
		<h2>You must be logged in to continue.</h2>
			<?php
				
					echo form_open('login/validate_credentials'); ?>
					<p><input type="text" label="username" name="username" id="username" placeholder="username" class="largeinput" /></p>
					<p><input type="password" label="password" name="password" id="password" placeholder="password" class="largeinput" /></p>
					<p><input class="contactbutton" label="login" type="submit" name="login" value="Login"></p>
					<?php echo anchor('login/signup', 'create an account'); ?>
			<?php echo form_close();?>
		</div>
</div>