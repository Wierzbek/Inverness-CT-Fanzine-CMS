<?php
	
	if(isset($_POST['add_fixture']))
	{
		// Create the variables that will be passed through the form to the database
		$home_team	= $_POST['home_team'];
		$away_team 	= $_POST['away_team'];
		$game_date	= $_POST['game_date'];
		$game_time	= $_POST['game_time'];
		$stadium	= $_POST['stadium'];
        
		// Functions to escape all data from the fields to prevent SQL injection
		$home_team	= mysqli_real_escape_string($connection, $home_team);
		$away_team	= mysqli_real_escape_string($connection, $away_team);
		$game_date	= mysqli_real_escape_string($connection, $game_date);
		$game_time	= mysqli_real_escape_string($connection, $game_time);
		$stadium	= mysqli_real_escape_string($connection, $stadium);
		
        $query = "INSERT INTO fixtures (home_team, away_team, game_date, game_time, stadium) ";
             
        $query .= "VALUES('{$home_team}', '{$away_team}','{$game_date}','{$game_time}','{$stadium}') "; 

        $add_fixture_query = mysqli_query($connection, $query);

        confirmQuery($add_fixture_query);
        echo "<p class='bg-success'>Fixture Added. <a href='./standings.php?source=fixtures'>Go back</a></p>";    
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="home_team">Home team</label>
			<input type="text" class="form-control" name="home_team">
	</div>

	<div class="form-group">
		<label for="away_team">Away team</label>
			<input type="text" class="form-control" name="away_team">
	</div>
	
	<div class="form-group">
		<label for="game_date">Date</label>
			<input type="Date" class="form-control" name="game_date">
	</div>
	
	<div class="form-group">
		<label for="game_time">Time</label>
			<input type="Time" class="form-control" name="game_time">
	</div>
	
	<div class="form-group">
		<label for="stadium">Stadium</label>
			<input type="text" class="form-control" name="stadium">
	</div>
	
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="add_fixture" value="Add fixture">
	</div>

</form>