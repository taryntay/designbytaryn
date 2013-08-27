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

	<!--  Displays user's name when signed up successfully  -->
	<?php 
		foreach($results as $row){}
	?>

	<?php $first_name = $_POST['first_name']; ?>

	<h1>Congrats, <?php echo $first_name; ?></h1>
	<p>Your account has been created.</p>
		
</div>