<?php include "db.php"; ?>
<?php session_start(); ?>

<?php
if(isset($_POST['login']))
{

	$email = $_POST['email'];
	$password = $_POST['password'];

	// Functions to escape all data from the fields to prevent SQL injection
	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	// Create a query: go to users table and retrieve data from email = $email
	$query = "SELECT * FROM users WHERE email = '{$email}' ";
	$select_user_query = mysqli_query($connection, $query);

	if(!$select_user_query)
	{
		die("QUERY FAILED". mysqli_error($connection));
	}

	// loop through the query data and assign the values to the "$db_..." variables
	while ($row = mysqli_fetch_array($select_user_query))
	{
		$db_user_type = $row['user_type'];
		$db_password = $row['pass'];
	    $db_user_id = $row['user_id'];
	    $db_fname = $row['first_name'];
	    $db_lname = $row['last_name'];
	    $db_email = $row['email'];
	    $db_registered = $row['reg_date'];
	}

	if($email === $db_email && $db_user_type === 'Admin')
	{
	    $_SESSION[ 'user_id' ] = $db_user_id;
	    $_SESSION[ 'first_name' ] = $db_fname;
	    $_SESSION[ 'last_name' ] =  $db_lname;

	    header("Location: ../index.php");
	    exit;
	}
	else
	{
		header("Location: ./login.php");
		exit;
	}

}
?>