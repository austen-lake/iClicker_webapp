<?php
	function createHeader($title, $includeLogout = true, $extra = "") {
		echo "
			<html>
			<head>
				<link rel='stylesheet' type='text/css' href='css/stylesheet.css' />
				<link rel='stylesheet' type='text/css' href='css/lightbox.css' />
				<script src='js/jquery-1.10.2.min.js'></script>
				<script src='js/lightbox-2.6.min.js'></script>
				<title>" . $title . "</title>
				" . $extra . "
			</head>
			<header>
		";
		
		if ($includeLogout) {
			echo "
				<a href='logout.php'>Logout</a>
			";
		}
		
		echo "
			</header>
			<body>
				<div class='main'>
		";
	}
	
	function createFooter($goBack = false, $goBackLink = "#") {
		echo "
				</div>
			</body>
			<footer class='main'>
		";
		
		if ($goBack) {
			echo "
				<a href='" . $goBackLink . "'>Go Back</a>
			";
		}
		
		echo "
				<a href='home.php'>Back to Home</a>
			</footer>
			</html>
		";
	}
?>