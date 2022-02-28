<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 5</title>
	</head>
	<body>
		<div>
		
			
			<?php
				echo( "<pre>" );
				print_r( $_POST );
				echo( "</pre>" );
			?>	
			<?php echo( $_SERVER["PHP_SELF"] ); ?>

			<form action="ex6.php" method="post"> 
				<input type="submit" name="btnSend" value="Send" />
				<input type="submit" name="btnDemo" value="Demonstration" />
				<input type="hidden" name="hidDemo" value="Alltid med..." />
			</form>

			<?php
				//Här kommer koden...
			?>
			
		</div>
	</body>
</html>