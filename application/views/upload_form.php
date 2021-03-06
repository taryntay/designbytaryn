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

	<!--  Displays errors from previous failed upload.  -->
	<?php echo $error;?>
	
	<!--  Upload form  -->
	<div id="uploadform">

		<?php echo form_open_multipart('upload/do_upload');?>

		<h2>Name Your Photo</h2>
		<p><input type="text" name="photo_name" id="photo_name" placeholder="max: 30 characters" class="largeinput" maxlength="30" required/></p>

		<h2>Select an image file</h2>
		<p>.jpg, .jpeg, .png, .gif accepted</p>
		<p>Cannot exceed 1MB or 1300x900px</p>		
		<p><input type="file" name="userfile" size="20" /></p>
		<p><input class="uploadbutton" type="submit" value="upload" /></p>

		</form>
	</div>