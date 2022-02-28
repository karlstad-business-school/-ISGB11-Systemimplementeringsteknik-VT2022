<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 3</title>
	</head>
	<body>
		<div>
			<?php
		
				/*
					Exempel på iteration i PHP.
					1. for
					2. while
					3. do while
					4. foreach

					mt_rand()
					array()
					print_r()
					PHP_EOL
				*/
				
				//for
				echo( "<ol>" . PHP_EOL );
				for( $counter = 1; $counter <=10; $counter++ ) {
					echo( "<li>" . mt_rand( 1,100 ) . "</li>" . PHP_EOL );
				}
				echo( "</ol>" . PHP_EOL );
				
				
				//while
				echo( "<ol>" . PHP_EOL );
				$counter = 1;
				while( $counter <= 10 ) {
					echo( "<li>" . mt_rand( 1,100 ) . "</li>" . PHP_EOL );
					$counter++;
				}
				echo( "</ol>" . PHP_EOL );
				
				
				//do while
				echo( "<ol>" . PHP_EOL );
				$counter = 1;
				do {
					echo( "<li>" . mt_rand( 1,100 ) . "</li>" . PHP_EOL );
					$counter++;
				} while( $counter <= 10 );
				echo( "</ol>" . PHP_EOL );

				
				//foreach
				$tiotal = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
				echo( "<ol>" . PHP_EOL );
				foreach( $tiotal as $tal ) {
					echo( "<li>" . $tal . "</li>" . PHP_EOL );
				}
				echo( "</ol>" . PHP_EOL );

				echo ("<pre>" );
				print_r( $tiotal );
				echo( "</pre>" );
				
				$tiotal = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
				echo( "<ol>" . PHP_EOL );
				foreach( $tiotal as $key => $tal ) {
					echo( "<li>" . $key . " : " . $tal . "</li>" . PHP_EOL );
				}
				echo( "</ol>" . PHP_EOL );

				echo ("<pre>" );
				print_r( $tiotal );
				echo( "</pre>" );

				$tiotal = array(10 => 10, 20 => 20, 30 => 30, 40 => 40, 50 => 50, 60 => 60, 70 => 70, 80 => 80, 90 => 90, 100 => 100);
				echo( "<ol>" . PHP_EOL );
				foreach( $tiotal as $key => $tal ) {
					echo( "<li>" . $key . " : " . $tal . "</li>" . PHP_EOL );
				}
				echo( "</ol>" . PHP_EOL );

				echo ("<pre>" );
				print_r( $tiotal );
				echo( "</pre>" );

			?>
		</div>
	</body>
</html>