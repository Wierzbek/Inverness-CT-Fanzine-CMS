<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Home</th>
			<th>Away</th>
			<th>Date</th>
			<th>Time</th>
			<th>Stadium</th>
		</tr>
	</thead>
		
		<tbody>
		
		<?php
		$query = "SELECT * FROM fixtures ORDER BY game_date ASC";
		$select_fixtures = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($select_fixtures))
			{
				// Read standings data from the database and assign them to the variables:
				$home_team 		= $row['home_team'];
				$away_team 		= $row['away_team'];
				$game_date 		= $row['game_date'];
				$game_time 		= $row['game_time'];
				$stadium 		= $row['stadium'];
				
				// Print the standings table
				echo "<tr>";
				echo "<td>$home_team</td>";
				echo "<td>$away_team</td>";
				echo "<td>$game_date</td>";
				echo "<td>$game_time</td>";
				echo "<td>$stadium</td>";		        
			}

			// Add team form
				echo "<tr>";
				echo "<td><a href='standings.php?source=add_fixture'>Add new fixture</a></td>";
				echo '</tr>';
		?>		
		</tbody>
</table>

<?php

if(isset($_GET['delete']))
{
	/*
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
    */
}
?>