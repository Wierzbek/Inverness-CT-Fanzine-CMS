<?php

// Create an array of variables
$db['db_host'] = "localhost";
$db['db_user'] = "USER";
$db['db_pass'] = "PASSWORD";
$db['db_name'] = "USER_NAME";

// Create constant values
foreach($db as $key => $value)
{ 
	define(strtoupper($key), $value);
}

// Use the constants to connect to the database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Error handling
/*
if($connection)
{
	echo 'We are connected!';
}
else
{
	echo 'Error! Could not connect to the database.';
}
*/

?>
