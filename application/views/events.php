	<!--  Navigation  -->
<nav>
	<ul>
		<li><a href="<?php echo site_url(); ?>/info">Park Info</a></li>
		<li><a href="<?php echo site_url(); ?>/events" id="selected">Events</a></li>
		<li><a href="<?php echo site_url(); ?>/gallery">Gallery</a></li>
		<li><a href="<?php echo site_url(); ?>/rules">Rules</a></li>
		<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		<li><a href="<?php echo site_url(); ?>/shop">Buy Tickets</a></li>
	</ul>
</nav>

<div id="content_wrapper">
		<!--  Events CTA Poster  -->
		<div id="CTA">
			<p><a href="<?php echo site_url(); ?>/events"><img src="<?php echo base_url(); ?>assets/images/CTAjuly4th.png" alt="4th of July Banner" /></a></p>
			<p class="ctabutton"><a href="<?php echo site_url(); ?>/shop">BUY TICKETS NOW!</a></p>
		</div>
		
		<!--  Events Three Column  -->
		<div class="events_container">
			<div class="left">
			
				<?php 
					foreach($results as $row){
				
						echo $row->events_music;
					}
				?>	
			</div>
		
			<div class="right">
						
				<?php 
					foreach($results as $row){
				
						echo $row->events_upcoming;
					}
				?>
					
			</div>
			
			<div class="middle">
				<p><img src="<?php echo base_url(); ?>assets/images/tobaccoroad.png" alt="Tobacco Road Band" /></p>
				<p><img src="<?php echo base_url(); ?>assets/images/racing2.png" alt="Racing" /></p>
			</div>
		</div>
</div>
