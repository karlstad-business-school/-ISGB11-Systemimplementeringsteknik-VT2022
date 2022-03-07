<?php
	session_start();
?>
<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title><?php echo( $_SERVER["PHP_SELF"] ); ?></title>
	</head>
	<body>
		<div>
			<?php
			
				session_regenerate_id( true );
				
				echo( $_SERVER["PHP_SELF"] );
				
				echo( "<pre>" );
				print_r( $_SESSION );
				echo( "</pre>" );
				
				//När blir det fel och när ser vi rätt utskrift?
				echo( "<p>" . $_SESSION["courseName"] . "</p>" );
				echo( "<p>" . $_SESSION["courseCode"] . "</p>" );
				
				$_SESSION["courseName"] = "Systeminmplementeringsteknik";
				$_SESSION["courseCode"] = "ISGB11";
				
				echo( "<p>" . $_SESSION["courseName"] . "</p>" );
				echo( "<p>" . $_SESSION["courseCode"] . "</p>" );
				
				echo( "<pre>" );
				print_r( $_SESSION );
				echo( "</pre>" );
				
			?>
			
			
		</div>
	</body>
</html>