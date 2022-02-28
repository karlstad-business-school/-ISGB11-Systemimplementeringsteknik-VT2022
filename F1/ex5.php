<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 5</title>
	</head>
	<body>
		<div>
			<?php
		
				//Objektorientering i PHP!
				
				include( "include/OneDice.php" );
				include( "include/SixDices.php" );
				
				$oSixDices = new SixDices();
				$oSixDices->dumpDices();
				
				$oSixDices->rollDices();
				$oSixDices->dumpDices();
				
				echo( "<p>Summan är " . $oSixDices->sumDices() . "!</p>" );
				
				echo( $oSixDices->svgDices() );
				
			?>
		</div>
	</body>
</html>