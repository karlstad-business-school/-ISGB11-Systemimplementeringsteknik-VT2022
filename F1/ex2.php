<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 2</title>
	</head>
	<body>
		<div>
			<?php
		
				/*
					Exempel på selektion i PHP.
					1. if
					2. switch
					
					gettype()
					settype()
					
					=
					==
					===
				*/
				
				//&&, ||, !
				
				$value = 11;
				if( $value === 11 ) { //===
					echo( "<p>Variabeln innhåller en " . gettype($value) . " variabel med värdet " . $value . "!</p>" );
				}
				
				//$value = "0";
				//$value =(string) 0;
				settype( $value, "string" );
				if( $value == 11 ) { //==
					echo( "<p>Variabeln innhåller en " . gettype($value) . " variabel med värdet " . $value . "!</p>" );
				}
			
			
				$value = 10;
				if( ( $value >= 1)  && ($value <= 10 ) ) {
					echo( "Variabelnvärdet är större eller lika med 1 och mindre eller lika med tio!" );
				} else {
					echo( "Variabelvärdet är ogiltigt!" );
				}
				
				
				$courceCode= "ISGB11";
				switch( $courceCode ) {
					
					case "ISGB11":
						echo( "<p>Systemimplementeringsteknik</p>" );
						break;
					case "ISGB15":
						echo( "<p>JavaScript</p>" );
						break;
					default:
						echo( "<p>Ingen kurs vecka 10-17!</p>" );
						
				}
				
			?>
		</div>
	</body>
</html>