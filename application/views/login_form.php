		<div id="content_wrapper">
		<div id="login">
		<h2>You must be logged in to continue.</h2>
			<?php
				
					echo form_open('login/validate_credentials'); ?>
					<p><input type="text" label="username" name="username" id="username" placeholder="username" /></p>
					<p><input type="password" label="password" name="password" id="password" placeholder="password" /></p>
					<p><input class="loginbutton" label="login" type="submit" name="login" value="Login"></p>
					<?php echo anchor('login/signup', 'create an account'); ?>
					<?php echo form_close();?>

		</div>
		</div>