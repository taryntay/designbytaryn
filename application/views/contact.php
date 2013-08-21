	<!--  Navigation  -->
<nav>
	<ul>
		<li><a href="<?php echo site_url(); ?>/info">Park Info</a></li>
		<li><a href="<?php echo site_url(); ?>/events">Events</a></li>
		<li><a href="<?php echo site_url(); ?>/gallery">Gallery</a></li>
		<li><a href="<?php echo site_url(); ?>/rules">Rules</a></li>
		<li><a href="<?php echo site_url(); ?>/contact" id="selected">Contact</a></li>
		<li><a href="<?php echo site_url(); ?>/shop">Buy Tickets</a></li>
	</ul>
</nav>
	
<div id="content_wrapper">
		<!--  Contact form  -->
		<div id="contactform">
			<?php echo form_open('contact/contact_form'); ?>
				<h6>Your Name</h6><p><input type="text" label="name" name="name" class="largeinput" /></p>
				<h6>Your Email</h6><p><input type="text" label="email" name="email" class="largeinput"/></p>
				<h6>Message</h6><p><textarea label="message" name="message" rows="10" cols="40"></textarea></p>
				<div id="contacterrors"><?php echo validation_errors('<p class="error">Error: ');?></div>
				<p><input class="contactbutton" label="submit" type="submit" name="submit" value="Submit" /></p>
			<?php echo form_close(); ?>
		</div>
		
		<!--  Google Map, Address, Email/Phone Number -->
		<div class="contact_container">
			<div class="left">
				<h2>Map and Directions</h2>
					<p><iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=32.582303,-84.330797&amp;aq=0&amp;oq=96+culverhouse+rd+butler&amp;sll=32.582331,-84.330808&amp;sspn=0.009438,0.011952&amp;ie=UTF8&amp;t=m&amp;ll=32.582331,-84.330797&amp;spn=0.018081,0.021544&amp;z=14&amp;output=embed"></iframe></p><p><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=32.582303,-84.330797&amp;aq=0&amp;oq=96+culverhouse+rd+butler&amp;sll=32.582331,-84.330808&amp;sspn=0.009438,0.011952&amp;ie=UTF8&amp;t=m&amp;ll=32.582331,-84.330797&amp;spn=0.018081,0.021544&amp;z=14" style="text-align:left">View Larger Map</a></p>
			</div>
		
			<div class="right">
				<h2>Phone and Email</h2>
				<h3>(478) 394-5298</h3>
				<h3>tcboondocks@gmail.com</h3>
			</div>
			
			<div class="middleAddress">
					<p>
						1209 West Fall Line Freeway 
						<br /> Butler, GA
						<br />31006
					</p>
					<p>From GA 96: Located at Culverhouse Rd</p></div>
			</div>
		</div>
</div>
