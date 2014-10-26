<!DOCTYPE html>
<html lang="en">
<head>
	<title>RaptorPropelledGrenade</title>
	<!-- Google's jQuery CDN -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- jQuery UI JavaScript CDN -->
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<!-- jQuery UI South Street Theme CSS -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/south-street/jquery-ui.css">
	<!-- Compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional Bootstrap theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Local CSS stylesheets -->
	<link rel="stylesheet" href="style.css">
	<!-- Local JavaScript scripts -->
	<script src="script.js"></script>
</head>
<body>
	<?php
		$output = array();
		$return_var = array();

		$Names = array ('a' => 'Angela', 'b' => 'Bradley', 'c' => array ('Cade', 'Caleb')); 
		print_r ($Names);

		//exec("sshpass -p hackathon ssh hackathon@192.168.1.146 'cd /opt/Raptor; sudo python3 raptor.py appliance 0 all'",$output,$return_var);

		//print_r(array($output,$return_var)));

		pasthru("uptime");
	?>
</body>
</html>