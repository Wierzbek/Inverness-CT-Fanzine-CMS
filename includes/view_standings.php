<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>P</th>
			<th>Team</th>
			<th>GP</th>
			<th>W</th>
			<th>D</th>
			<th>L</th>
			<th>F</th>
			<th>A</th>
			<th>GD</th>
			<th>Pts</th>
		</tr>
	</thead>
		
		<tbody>
		
		<?php
		$query = "SELECT * FROM championship ORDER BY points DESC";
		$select_teams = mysqli_query($connection,$query);
		$position = 0;
		while($row = mysqli_fetch_assoc($select_teams))
			{
				// Read standings data from the database and assign them to the variables:
				$position 		= $position + 1;
				$team_name 		= $row['club_name'];
				$played 		= $row['games_played'];
				$wins 			= $row['wins'];
				$lost 			= $row['lost'];
				$drawn 			= $row['drawn'];
				$goals_for 		= $row['goals_for'];
				$goals_against 	= $row['goals_against'];
				$goals_diff 	= $row['goal_difference'];
				$points 		= $row['points'];
				
				// Print the standings table
				echo "<tr>";
				echo "<td>$position</td>";
				echo "<td>$team_name</td>";
				echo "<td>$played</td>";
				echo "<td>$wins </td>";
				echo "<td>$lost</td>";
				echo "<td>$drawn</td>";
				echo "<td>$goals_for</td>";
				echo "<td>$goals_against</td>";
				echo "<td>$goals_diff</td>";
				echo "<td>$points</td>";

				// Edit team
		        echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
		        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
		        echo "</tr>";
		        
			}

			// Add team form
				echo "<tr>";
				echo "<td><a href='standings.php?source=add_team'>Add new team</a></td>";
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