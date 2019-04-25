
<?php # DISPLAY COMPLETE LOGIN PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
$page_title = 'Login' ;
include ('db.php');?>

<?php
if (isset($_SESSION['user_id']))
{
    header("Location: ../index.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inverness CT Admin Panel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- LOGIN FORM -->
<div class="container">
	<h1>Admin Panel Login</h1>
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="login_action.php" method="post"> 
			
			<div class="form-group">
                <label for="post_content">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label for="post_content">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">                
            </div>

            <hr> 
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-block" name="login" type="submit role="button">
                        Submit
                    </button>
                </span> 
			<hr>
			</form>
		</div>
	</div>
</div>
	<!-- END LOGIN FORM-->

</body>

</html>