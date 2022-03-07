<?php
	//Här kommer koden...

	function deleteSession() {

		session_unset();

		if( ini_get("session.use_cookies") ) {

			$sessionCookieData = session_get_cookie_params();

			$path = $sessionCookieData["path"];
			$domain = $sessionCookieData["domain"];
			$secure = $sessionCookieData["secure"];
			$httponly = $sessionCookieData["httponly"];

			$name = session_name();

			setcookie($name, "", time() - 3600, $path, $domain, $secure, $httponly);

		}

		session_destroy();

	}

?>
<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>Ett exempel med sessioner</title>
		<style>
			<?php
				//Här en utskrift av CSS-text!
				echo( $css );
			?>
		</style>
	</head>
	<body>
		<div>
		
			<form action="<?php echo( $_SERVER["PHP_SELF"] ); ?>" method="post">

				<input type="color" name="backgroundcolor" value="<?php if( isset( $bgColor )) { echo( $bgColor ); } ?>" />
				<input type="color" name="foregroundcolor" value="<?php if( isset( $fgColor )) { echo( $fgColor ); } ?>"/>

				<input type="submit" name="btnSend" value="Send" />
				<input type="submit" name="btnReset" value="Reset" <?php if( $disabled ) { echo("disabled"); } ?> />
			
			</form>
		
			<?php
			
				echo( "<pre>" );
				print_r( $_POST );
				print_r( $_SESSION );
				echo( "</pre>" );
				
			?>
			
		</div>
	</body>
</html>