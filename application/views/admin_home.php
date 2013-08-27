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
		<!--  Homepage CTA  -->
		<div id="CTA">
			<p><a href="<?php echo site_url(); ?>/events"><img src="<?php echo base_url(); ?>assets/images/CTAjuly4th.png" alt="4th of July Event"/></a></p>
			<p class="ctabutton"><a href="<?php echo site_url(); ?>/shop">BUY TICKETS NOW!</a></p>
		</div>
		
		<!--  Homepage 3 Column  -->
		<div class="events_container">
			<div class="left">
				<p><img src="<?php echo base_url(); ?>assets/images/homeimg1.png" id="column1img" alt="Man on ATV" /></p>
				<h2>What we offer</h2>
				<p>Located on 3000 acres of land in Butler, Georgia, we have plenty of fun to offer!</p>
					<ul>
						<li>ATV/UTV Trails (70 miles to explore!)</li>
						<li>Campgrounds</li>
						<li>Racing and Drag Track</li>
						<li>ATV Park</li>
						<li>Mud Pits</li>
						<li>Outdoor stage for concerts</li>
					</ul>
				<p><a href="<?php echo site_url(); ?>/info">learn more about our park</a></p>
			</div>
		
			<div class="right">
			<p><img src="<?php echo base_url(); ?>assets/images/homeimg3.png" id="column3img" alt="Kids on ATV" /></p>
				<h2>Come prepared!</h2>
				<p>To ensure a fun time at the Boondocks, please review our rules and regulations before arriving at an event.</p>
				<h4>Please remember:</h4>
					<ul>
						<li>ATVs must have flags minimum 6 feet tall.</li>
						<li>Waiver forms must be signed.</li>
						<li>Minors need special waivers.</li>
					</ul>
				<p><a href="<?php echo site_url(); ?>/rules">review our rules</a></p>
			</div>
			
			<div class="middle">
				<p><img src="<?php echo base_url(); ?>assets/images/homeimg2.png" id="column2img" alt="People on a truck" /></p>
				<?php  echo form_open('content/updateEventsHome');?>
				<p><textarea rows="20" cols="38" id="home_events" name="home_events">
				<?php 
					foreach($results as $row){
				
						echo $row->home_events;
					}
				?>
				</textarea></p>				
				<p><input type="submit" value="Update" class="loginbutton"></p>
				<?php echo form_close();?>
				
				<p><a href="<?php echo site_url(); ?>/events">view all of our events</a></p>	
	
				
			</div>
		</div>
</div>