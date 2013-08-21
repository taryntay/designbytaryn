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
				<h2>Music & Entertainment</h2>
					<p>We've got some great entertainment lined up for this month's patriotic weekend.</p>
					<p>Tobacco Road will be performing their hit song, "Get a Little Loud!" You won't want to miss it!</p>
					<p><h4>Saturday Night Lineup:</h4> 
						<ul>
							<li>DJ 7:30pm</li>
							<li>Tobacco Road Band 8:00pm</li>
							<li>Fireworks 10pm.</li>
						</ul>			
			</div>
		
			<div class="right">
				<h2>More Upcoming Events</h2>
						<h4>September 13th</h4>
						<p>Labor Day Weekend spectacular at the Boondocks. We will have two great bands performing and a special truck race.</p>
						<h4>October 21st</h4>
						<p>Halloween at the Boondocks! Get ready for some crazy Octoberfest festivities and a hit band performing on Saturday night.</p>
						<h4>December 29th</h4>
						<p>Ring in the New Year with the Boondocks! We will have fireworks and the Colt Ford Band will be back by popular demand.</p>
					
			</div>
			
			<div class="middle">
				<img src="<?php echo base_url(); ?>assets/images/tobaccoroad.png" alt="Tobacco Road Band" />
				<img src="<?php echo base_url(); ?>assets/images/racing2.png" alt="Racing" />
			</div>
		</div>
</div>