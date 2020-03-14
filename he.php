<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<div class="left">
		<img class="logo" src="logo.png" alt="logo">
		
	</div>
	

	
		<div class="right">

		
 
		



		<a href="logout.php">logout</a>|


		<?php 
		session_start();

		echo "logged is as".$_SESSION["name"];
		?>



		</div>
		
	</div>
	
</div>
</body>
</html>