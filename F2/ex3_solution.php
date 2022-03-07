<?php
	//Här kommer koden...

	//Flagga för om knappen är tryck eller inte...
	$disabled = true;

	//Defaultvärde för css...
	$css = "body { color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); }";

	//Om användaren trycker på btnSend...
	if( isset( $_POST["btnSend"]) ) {

		//Hämta inkommande färgvärden...
		$bgColor = $_POST["backgroundcolor"];
		$fgColor = $_POST["foregroundcolor"];

		//Skapa eller uppdatera kakorna...
		setcookie("fgColor", $fgColor, time() + 3600);
		setcookie("bgColor", $bgColor, time() + 3600);

		//sätt om variabelvärden för disabled och css...
		$disabled = false;
		$css = "body { color: $fgColor; background-color: $bgColor; }";

	}

	//Omm användaren trycker på btnReset
	if( isset( $_POST["btnReset"] ) ) {

		//ta bort kakorna
		setcookie("fgColor", "", time() - 3600);
		setcookie("bgColor", "", time() - 3600);

	}

	//Om inte användaren har tryckt på btnSend eller btnReset och kakorna fgColor och bgColor kommer
	//från klienten till servern
	if( !isset($_POST["btnSend"]) 
		&& !isset($_POST["btnReset"]) 
		&& isset($_COOKIE["fgColor"]) 
		&& isset($_COOKIE["bgColor"])) {

		//Hämta värden i kakorna och tilldela variabelvärden
		$bgColor = $_COOKIE["bgColor"];
		$fgColor = $_COOKIE["fgColor"];

		//sätt om variabelvärden för disabled och css...
		$disabled = false;
		$css = "body { color: $fgColor; background-color: $bgColor; }";
		
	}





?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Ett exempel med kakor</title>
		<style>
			<?php
				//Skriv ut CSS-instruktionerna...
				echo($css);
			?>
		</style>
	</head>
	<body>
		<div>
			
			<form action="<?php echo( $_SERVER["PHP_SELF"] ); ?>" method="post">
		
				<input type="color" name="backgroundcolor" value="<?php if( isset( $bgColor )) { echo( $bgColor ); } ?>" />
				<input type="color" name="foregroundcolor" value="<?php if( isset( $fgColor )) { echo( $fgColor ); } ?>" />

				<input type="submit" name="btnSend" value="Send" />
				<input type="submit" name="btnReset" value="Reset" <?php if($disabled) { echo("disabled"); } ?> />
			
			</form>
		
			<?php
			
				echo("<p>\$_POST</p>") . PHP_EOL;
				echo( "<pre>" );
				print_r( $_POST );
				echo( "</pre>" );

				echo("<p> \$_COOKIE</p>") . PHP_EOL;
				echo( "<pre>" );
				print_r( $_COOKIE );
				echo( "</pre>" );
				
				
			?>
			
		</div>
	</body>
</html>