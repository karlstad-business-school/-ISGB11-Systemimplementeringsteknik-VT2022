<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>PHP</title>
		<style>
			img { width: 10%; height: 10%; }
		</style>
		
	</head>
	<body>
		<div>

			<?php
				echo ("<pre>" );
				print_r( $_GET );
				echo( "</pre>" );
			?>
			
			<?php echo( $_SERVER["PHP_SELF"] ); ?>
			<a href="ex7.php?linkSend=true&linkTest=Alltid med...">Send</a>
			<a href="ex7.php?linkDemo=true&linkTest=alltid med...">Demonstraion</a>
		
			<?php
				//Här kommer koden...
			?>
			
		</div>
	</body>
</html>