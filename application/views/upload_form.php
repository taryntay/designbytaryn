<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<p><input type="file" name="userfile" size="20" /></p>
<p><input class="uploadbutton" type="submit" value="upload" /></p>

</form>