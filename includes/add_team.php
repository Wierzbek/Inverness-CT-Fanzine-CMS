<?php
	
	if(isset($_POST['add_team']))
	{
		// Create the variables that will be passed through the form to the database
		$club_name			= $_POST['club_name'];
		$games_played 		= $_POST['games_played'];
		$wins				= $_POST['wins'];
		$drawn				= $_POST['drawn'];
		$lost 				= $_POST['lost'];
		$goals_for	 		= $_POST['goals_for'];
		$goals_against 		= $_POST['goals_against'];
		$goal_difference 	= $_POST['goal_difference'];
		$points				= $_POST['points'];
        
		// Functions to escape all data from the fields to prevent SQL injection
		$club_name 			= mysqli_real_escape_string($connection, $club_name);
		$games_played 		= mysqli_real_escape_string($connection, $games_played);
		$wins 				= mysqli_real_escape_string($connection, $wins);
		$drawn				= mysqli_real_escape_string($connection, $drawn);
		$lost				= mysqli_real_escape_string($connection, $lost);
		$goals_for	 		= mysqli_real_escape_string($connection, $goals_for);
		$goals_against 		= mysqli_real_escape_string($connection, $goals_against);
		$goals_difference 	= mysqli_real_escape_string($connection, $goals_difference);
		$points				= mysqli_real_escape_string($connection, $points);

        $query = "INSERT INTO championship (club_name, games_played, wins, drawn, lost, goals_for, goals_against, goal_difference, points) ";
             
        $query .= "VALUES('{$club_name}', '{$games_played}','{$wins}','{$drawn}','{$lost}','{$goals_for}','{$goals_against}','{$goal_difference}','{$points}') "; 

        $add_team_query = mysqli_query($connection, $query);

        confirmQuery($add_team_query);
        echo "<p class='bg-success'>Team Added. <a href='./standings.php'>Go back</a> or <a href='?source=add_team'>Add More Teams</a></p>";    
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="club_name">Team name</label>
			<input type="text" class="form-control" name="club_name">
	</div>

	<div class="form-group">
		<label for="games_played">Games played</label>
			<input type="number" class="form-control" name="games_played">
	</div>
	
	<div class="form-group">
		<label for="wins">Wins</label>
			<input type="number" class="form-control" name="wins">
	</div>
	
	<div class="form-group">
		<label for="drawn">Drawn</label>
			<input type="number" class="form-control" name="drawn">
	</div>
	
	<div class="form-group">
		<label for="lost">Lost</label>
			<input type="number" class="form-control" name="lost">
	</div>
	
	<div class="form-group">
		<label for="goals_for">Goals for</label>
			<input type="number" class="form-control"  name="goals_for">
	</div>
	
	<div class="form-group">
		<label for="goals_against">Goals agains</label>
		<input type="number" class="form-control" name="goals_against">
	</div>
	
	<div class="form-group">
		<label for="goal_difference">Goal difference</label>
		<input type="number" class="form-control" name="goal_difference">
	</div>
	
	<div class="form-group">
		<label for="points">Points</label>
		<input type="number" class="form-control" name="points">
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="add_team" value="Add team">
	</div>

</form>