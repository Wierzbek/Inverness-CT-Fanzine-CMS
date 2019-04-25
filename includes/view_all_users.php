<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Registered</th>
		</tr>
	</thead>
		
		<tbody>
		
		<?php
		$query = "SELECT * FROM users";
		$select_users = mysqli_query($connection,$query);
		
		while($row = mysqli_fetch_assoc($select_users))
			{
				// Read user data from the database and assign them to the variables:
				$user_id 			= $row['user_id'];
				$user_fName 		= $row['first_name'];
				$user_lName 		= $row['last_name'];
				$user_email 		= $row['email'];
				$user_password 		= $row['pass'];
				$user_registered 	= $row['reg_date'];
				
				// Print the user table
				echo "<tr>";
				echo "<td>$user_id</td>";
				echo "<td>$user_fName</td>";
				echo "<td>$user_lName</td>";
				echo "<td>$user_email</td>";
				echo "<td>$user_registered</td>";

				// Edit user
				echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
		        echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
		        echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
		        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
		        echo "</tr>";
			}
		?>		
		</tbody>
</table>

<?php

if(isset($_GET['change_to_admin'])) 
{    
    $the_user_id = escape($_GET['change_to_admin']);    
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id   ";
    $change_to_admin_query = mysqli_query($connection, $query);
    header("Location: users.php");  
}

if(isset($_GET['change_to_subscriber']))
{    
    $the_user_id = escape($_GET['change_to_subscriber']);
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id   ";
    $change_to_sub_query = mysqli_query($connection, $query);
    header("Location: users.php");
}

if(isset($_GET['delete']))
{
    if(isset($_SESSION['user_role'])) 
    {

        if($_SESSION['user_role'] == 'admin') 
        {
	        $the_user_id = escape($_GET['delete']);

	        $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
	        $delete_user_query = mysqli_query($connection, $query);
	        header("Location: users.php");
        }   
    }
}
?>