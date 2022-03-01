<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title><?php echo( $_SERVER["PHP_SELF"] ); ?></title>
	</head>
	<body>
		<div>
			<?php
			
				echo( $_SERVER["PHP_SELF"] );
				
				setcookie( "kurskod1" );
				setcookie( "kurskod2", "ISGB11" );
				setcookie( "kurskod3", "ISGB11", time() + 3600 );
				setcookie( "kurskod4", "ISGB11", time() + 3600, "/" );
				setcookie( "kurskod5", "ISGB11", time() + 3600, "ISGB11/VT2020/F2", "localhost" );
				setcookie( "kurskod6", "ISGB11", time() + 3600, "ISGB11/VT2020/F2", "localhost", true );
				setcookie( "kurskod7", "ISGB11", time() + 3600, "ISGB11/VT2020/F2", "localhost", false, true );

				echo( "<pre>" );
				print_r( $_COOKIE );
				echo( "</pre>" );
				
			?>
		</div>
	</body>
</html>