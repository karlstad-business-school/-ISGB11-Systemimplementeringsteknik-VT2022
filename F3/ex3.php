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
				
				$_SESSION["courseName"] = "Systeminmplementeringsteknik";
				$_SESSION["courseCode"] = "ISGB11";
				
				echo( "<p>" . $_SESSION["courseName"] . "</p>" );
				echo( "<p>" . $_SESSION["courseCode"] . "</p>" );
				
				echo( "<p>session_id() ger " . session_id() . "</p>" ); 
				echo( "<p>session_name() ger " . session_name() . "</p>" ); 
				
				session_unset();
				session_destroy(); //Sessionskakan finns dock kvar! :-(
			?>
		</div>
	</body>
</html>