<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 1</title>
	</head>
	<body>
		<div>
			<?php
		
				/*
					PHP-koden måste återfinnas inom start-  och sluttaggarna för PHP.
					Ni kan dock i teorin slå på och av PHP-tolken hur många gånger som helst i ett skript.
				*/
				
				define( "COURSENAME", "Systemimplementeringsteknik" ); //En konstant.
				
				$coursCode = "ISGB11"; //En strängvariabel.
				$coursPoints = 5; //En heltalsvariabel.
				
				echo( "Detta är ett exempel från " . COURSENAME . " med kurskoden " . $coursCode . " med " . $coursPoints . "hp" ); //Utskrift
				
			?>
			<p>
				<?php
					echo( "<i>Utskrift av konstant text!</i>" ); //Utskrift
				?>
			</p>
		</div>
	</body>
</html>