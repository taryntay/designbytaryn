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

	<!--  If photo uploads successfully, display this message.  -->
	<h2>Your photo was successfully uploaded</h2>

	<!--  Load rest of gallery  -->
	<!--  Image Thumbnail Gallery  -->
	<div id="imagegallery">
		<div id="gallery-controls">
			<p><a href="#" id="gallery-prev"><img src="<?php echo base_url(); ?>assets/images/previous.png" alt="" /></a></p>
   		 </div>
	
		<div id="gallery-wrap">
    		<ul id="gallery">
			
			<!--  Pulls image thumbnails from DB  -->
				<?php 
					foreach($results as $row){
						$date = date('m.d.y', $row->date);
				
						echo '<li><a href="/thumbs/'. $row->file.'" data-lightbox="roadtrip"><img src="/thumbs/'. $row->file.'" alt="'. $row->file .'" title="'. $row->title.' Added by: '. $row->user.' on '. $date.'"></a><br />'. $row->title.'<br />Added by: '. $row->user.'<br />'. $date.'<br /></li>';
					}
				?>

			</ul>
    	</div>
    
    	<div id="gallery-controls">
    		<a href="#" id="gallery-next"><img src="<?php echo base_url(); ?>assets/images/next.png" alt="" /></a>
		</div>

		<!--  Facebook like integration  -->
		<div id="facebook">
			<p class="gallerybutton"><a href="<?php echo site_url(); ?>/upload">UPLOAD A PHOTO</a></p>
			<div class="fb-like" data-href="http://www.designbytaryn.com/index.php/gallery" data-width="450" data-layout="box_count" data-show-faces="false" data-send="true"></div>
			<h2><a href="http://www.villagephotography.com/boondocks.html">Order Past Event Photos</a></h2>
		</div>
</div>	

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

		<!--  Video Gallery  -->
		<div class="gallery_container">
			<h2><a href="http://www.youtube.com/user/BohicaTrucksInc/videos">View all videos on our Youtube account</a></h2>
			
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