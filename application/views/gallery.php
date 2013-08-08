<div id="content_wrapper">
		<div id="photogallery">
			<?php
 				$dir = 'thumbs';
				$file_display = array('jpg', 'jpeg', 'png', 'gif');
				
				if(file_exists($dir) == false) {
					echo 'Directory \'', $dir, '\' not found!';
				}else{
					
					$dir_contents = scandir($dir);

					foreach ($dir_contents as $file) {
		
						if($file !== '.' && $file !== '..'){
						echo '<a href="/'. $dir. '/'. $file.'"><img src="/'. $dir. '/'. $file.'" width="150" height="150" alt="'. $file .'"></a>';
						}
					}
				}
			?>

		<p class="gallerybutton"><a href="<?php echo site_url(); ?>/upload">UPLOAD A PHOTO</a></p>
		</div>
	
		<div class="gallery_container">
			<h2>View all videos on our Youtube account</h2>
			<div class="left">
				<iframe width="300" height="215" src="http://www.youtube.com/embed/z2Dh4rWnoAU" frameborder="0" allowfullscreen></iframe>
			</div>
		
			<div class="right">
				<iframe width="300" height="215" src="http://www.youtube.com/embed/z2Dh4rWnoAU" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<div class="middle">
				<iframe width="300" height="215" src="http://www.youtube.com/embed/z2Dh4rWnoAU" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
</div>