<!--  Navigation  -->
<nav>
	<ul>
		<li><a href="<?php echo site_url(); ?>/info">Park Info</a></li>
		<li><a href="<?php echo site_url(); ?>/events">Events</a></li>
		<li><a href="<?php echo site_url(); ?>/gallery" id="selected">Gallery</a></li>
		<li><a href="<?php echo site_url(); ?>/rules">Rules</a></li>
		<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		<li><a href="<?php echo site_url(); ?>/shop">Buy Tickets</a></li>
	</ul>
</nav>

<div id="content_wrapper">

	<!--  Image Thumbnail Gallery  -->

    		<ul id="admingallery">
			
			<!--  Pulls image thumbnails from DB  -->
				<?php 
					foreach($results as $row){
						$date = date('m.d.y', $row->date);
				
						echo '<li><a href="/thumbs/'. $row->file.'" data-lightbox="roadtrip"><img src="/thumbs/'. $row->file.'" alt="'. $row->file .'" title="'. $row->title.' Added by: '. $row->user.' on '. $date.'"></a><br />'. $row->title.'<br />Added by: '. $row->user.'<br />'. $date.'<br />';?>
						
		<?php echo form_open("gallery/deletePhoto/$row->id");?>
			<p><input type="submit" value="Delete" class="loginbutton"></p>
		<?php echo form_close();?>
						
						<?php echo '</li>';
					}
				?>
			</ul>



<!--		Gallery pulls from directory. Save in case of DB failure.

			<div id="thumbnails">
			<?php /*
 				$dir = 'thumbs';
				$file_display = array('jpg', 'jpeg', 'png', 'gif');
				
				if(file_exists($dir) == false) {
					echo 'Directory \'', $dir, '\' not found!';
				}else{
					
					$dir_contents = scandir($dir);

					foreach ($dir_contents as $file) {
		
						if($file !== '.' && $file !== '..'){
						echo '<a href="/'. $dir. '/'. $file.'" data-lightbox="roadtrip"><img src="/'. $dir. '/'. $file.'" width="150" height="150" alt="'. $file .'"></a>';
						}
					}
				}
			*/?>
			</div>
-->
	<p class="gallerybutton"><a href="<?php echo site_url(); ?>/upload">UPLOAD A PHOTO</a></p>
</div>