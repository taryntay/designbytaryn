<?php 
foreach($results as $row){}
$logo = img('assets/images/logo.png');
?>

<fieldset>
<p><?php echo anchor('site/bookworm', $logo, 'Home Page');?></p>
	<h1>Edit a Book</h1>
	<?php echo form_open('site/edit/' .$this->uri->segment(3));?>
	<p>
		<label for="title">Title</label><br />
		<input type="text" name="title" id="title" value="<?php echo $row->title; ?>"/>
	</p>
	
	<p>
		<label for="author">Author</label><br />
		<input type="text" name="author" id="author" value="<?php echo $row->author; ?>"/>
	</p>
	<p>
		<label for="quote">Favorite Quote</label><br />
		<textarea rows="3" cols="40" name="quote" id="quote"><?php echo $row->quote; ?></textarea>
	</p>
	<p>
		<label for="review">Review</label><br />
		<textarea rows="5" cols="40" name="review" id="review"><?php echo $row->review; ?></textarea>
	</p>
	<p>
		<label for="favorite">Add to Favorites?</label>
		<br /><input type="radio" name="favorite" value="Yes">Yes 
		<br /><input type="radio" name="favorite" value="No" checked="checked">No
	</p>

	<p>
		<input type="submit" value="Update">
	</p>
	<?php echo form_close();?>
	<?php echo form_open("site/bookworm");?>
		<input type="submit" value="Home">
	<?php echo form_close();?>
	<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>
</fieldset>
</body>

</html>