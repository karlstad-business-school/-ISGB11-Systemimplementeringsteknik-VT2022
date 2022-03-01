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

				if( isset( $_POST["btnCreate"] ) ) {
					setcookie( "CookieCourseCode", "ISGB11", time() + 3600 );
					$disabled = false;
				}

				if( isset( $_COOKIE["CookieCourseCode"] ) ) {
					$disabled = false;
				
				}
				if( isset( $_POST["btnDestroy"] ) ) {
					setcookie( "CookieCourseCode", "", time() - 3600 );
					$disabled = true;
				}

				if( !isset( $_POST["btnCreate"] ) && !isset( $_POST["btnDestroy"] ) && !isset( $_COOKIE["CookieCourseCode"] ) ) {
					$disabled = true;
				}

				echo( "<pre>" );
				print_r( $_COOKIE );
				echo( "</pre>" );
				
			?>
			
			<form action="<?php echo( $_SERVER["PHP_SELF"] ); ?>" method="post">
			
				<input type="submit" name="btnCreate" value="Create" />
				<input type="submit" name="btnDestroy" value="Destroy" <?php if( $disabled ) { echo( "disabled='disabled'" ); }?>/>
				<input type="submit" name="btnReload" value="Reload" />
			
			</form>
			
		</div>
	</body>
</html>