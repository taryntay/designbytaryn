<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

	<h2>Name Your Photo</h2>
	<p><input type="text" name="photo_name" id="photo_name" placeholder="max: 30 characters" class="largeinput" maxlength="30" required/></p>

	<h2>Select an image file</h2>
	<p>.jpg, .jpeg, .png, .gif accepted</p>		
	<p><input type="file" name="userfile" size="20" /></p>
	<p><input class="uploadbutton" type="submit" value="upload" /></p>

</form>