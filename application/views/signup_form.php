<div id="content_wrapper">
<div id="contactform">
<div id="errors"><?php echo validation_errors('<p class="error">Error: ');?></div>
<h6>Your Name</h6>
<?php
	echo form_open('login/create_user');
?>

<p><input type="text" name="first_name" id="first_name" placeholder="full name" /></p>

<h6>Your Email</h6>
<p><input type="text" name="email" id="email" /></p>

<h6>Newsletter</h6>
<p><input type="checkbox" name="newsletter" value="newsletter" checked="checked">Sign up to receive email updates.</p>

<h6>Login Info</h6>

<p><input type="text" name="username" id="username" placeholder="username" /></p>
<p><input type="text" name="password" id="password" placeholder="password" /></p>
<p><input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="confirm password" /></p>
<p><input type="submit" value="Create Account"></p>
</div>
</div>