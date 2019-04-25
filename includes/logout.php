<?php session_start(); ?>

<!-- Set the session variables to null (clear the session data) -->
<?php
	
	$_SESSION[ 'user_id' ] = null;
    $_SESSION[ 'first_name' ] = null;
    $_SESSION[ 'last_name' ] = null;
    $_SESSION[ 'user_type' ] = null;

    header("Location: ../index.php");
?>