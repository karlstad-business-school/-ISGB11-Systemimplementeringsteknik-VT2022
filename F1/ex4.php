<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>F1 Exempel 4</title>
	</head>
	<body>
		<div>
			<?php
		
				//Objektorientering i PHP!
				
				include( "include/OneDice.php" );
				
				$oOneDice = new OneDice( 1 );
				echo( "<p>" . $oOneDice->getNbr() . "</p>" );
				
				$oOneDice->setNbr( 6 );
				echo( "<p>" . $oOneDice->getNbr() . "</p>" );
				
				$oOneDice->setNbr( 1000 );
				echo( "<p>" . $oOneDice->getNbr() . "</p>" );
				
			?>
		</div>
	</body>
</html>