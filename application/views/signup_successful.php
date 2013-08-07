<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Worm</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body>

<?php 
foreach($results as $row){}
?>
<?php $first_name = $_POST['first_name']; ?>
<div id="body">
<?php 
$logo = img('assets/images/logo.png');
?>
<p><?php echo anchor('login', $logo, 'Home Page');?></p>
<h1>Congrats, <?php echo $first_name; ?></h1>
<p>Your account has been created. 

	<?php echo form_open("login");?>
		<input type="submit" value="Return to Login">
	<?php echo form_close();?>
<div id="footer">
<p>&copy; 2013 Taryn Taylor for Full Sail University<br /><a href="mailto:taryntay@fullsail.edu">Contact</a> | <?php echo anchor('site/terms', 'Terms of Use', 'Terms');?></p>
</div>
</body>

</body>
</html>