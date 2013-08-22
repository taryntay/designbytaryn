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
			<p><a href="<?php echo site_url(); ?>/events"><img src="<?php echo base_url(); ?>assets/images/CTAjuly4th.png"></a></p>
			<p class="ctabutton"><a href="<?php echo site_url(); ?>/shop">BUY TICKETS NOW!</a></p>
		</div>
		
		<!--  Events Three Column  -->
		<div class="events_container">
			<div class="left">
			
				<?php  echo form_open('content/updateEventsMusic');?>
				<textarea rows="20" cols="38" id="events_music" name="events_music">
				<?php 
					foreach($results as $row){
				
						echo $row->events_music;
					}
				?>
				</textarea>				
				<input type="submit" value="Update" class="loginbutton">
				<?php echo form_close();?>		
			</div>
		
			<div class="right">
						
				<?php  echo form_open('content/updateEventsUpcoming');?>
				<textarea rows="20" cols="38" id="events_upcoming" name="events_upcoming">
				<?php 
					foreach($results as $row){
				
						echo $row->events_upcoming;
					}
				?>
				</textarea>				
				<input type="submit" value="Update" class="loginbutton">
				<?php echo form_close();?>	
					
			</div>
			
			<div class="middle">
				<img src="<?php echo base_url(); ?>assets/images/tobaccoroad.png" alt="Tobacco Road Band" />
				<img src="<?php echo base_url(); ?>assets/images/racing2.png" alt="Racing" />
			</div>
		</div>
</div>