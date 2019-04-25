<?php
	
	if(isset($_POST['add_player']))
	{
		// Create the variables that will be passed through the form to the database
		$player_name		= $_POST['player_name'];
		$player_number 		= $_POST['player_number'];
		$player_dob 		= $_POST['player_dob'];
		$place_of_birth		= $_POST['place_of_birth'];
		$age 				= $_POST['age'];
		$player_height 		= $_POST['player_height'];
		$citizenship 		= $_POST['citizenship'];
		$player_position 	= $_POST['player_position'];
		$foot 				= $_POST['foot'];
		$joined_club 		= $_POST['joined_club'];
		$contract_until 	= $_POST['contract_until'];
        
		// Functions to escape all data from the fields to prevent SQL injection
		$player_name 		= mysqli_real_escape_string($connection, $player_name);
		$player_number 		= mysqli_real_escape_string($connection, $player_number );
		$player_dob 		= mysqli_real_escape_string($connection, $player_dob);
		$place_of_birth		= mysqli_real_escape_string($connection, $place_of_birth);
		$age 				= mysqli_real_escape_string($connection, $age);
		$player_height 		= mysqli_real_escape_string($connection, $player_height);
		$citizenship 		= mysqli_real_escape_string($connection, $citizenship);
		$player_position 	= mysqli_real_escape_string($connection, $player_position);
		$foot 				= mysqli_real_escape_string($connection, $foot);
		$joined_club		= mysqli_real_escape_string($connection, $joined_club);
		$contract_until 	= mysqli_real_escape_string($connection, $contract_until);

		// CREATE TABLE squad (
		// player_name varchar(100),
		// player_number int(3),
		// player_dob varchar(30),
		// place_of_birth varchar(100),
		// age int(4),
		// player_height varchar(10),
		// citizenship varchar(50),
		// player_position varchar(100),
		// foot varchar(10),
		// joined varchar(100),
		// contract_until varchar(100)
		// );

        $query = "INSERT INTO squad (player_name, player_number, player_dob, place_of_birth, age, player_height, citizenship, player_position, foot, joined, contract_until) ";
             
        $query .= "VALUES('{$player_name}', '{$player_number}','{$player_dob}','{$place_of_birth}','{$age}','{$player_height}','{$citizenship}','{$player_position}','{$foot}','{$joined_club}','{$contract_until}') "; 

        $add_player_query = mysqli_query($connection, $query);

        confirmQuery($add_player_query);
        echo "<p class='bg-success'>Player Added. <a href='./squad.php'>Go back</a> or <a href='?source=add_player'>Add More Players</a></p>";    
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="player_name">Player name</label>
			<input type="text" class="form-control" name="player_name">
	</div>

	<div class="form-group">
		<label for="player_number">Player number</label>
			<input type="number" class="form-control" name="player_number">
	</div>

	
	<div class="form-group">
		<label for="player_dob">Date of birth</label>
			<input type="Date" class="form-control" name="player_dob">
	</div>
	
	<div class="form-group">
		<label for="place_of_birth">Place of birth</label>
			<input type="text" class="form-control" name="place_of_birth">
	</div>
	
	<div class="form-group">
		<label for="age">Age</label>
			<input type="number" class="form-control" name="age">
	</div>
	
	<div class="form-group">
		<label for="player_height">Height</label>
			<input type="text" class="form-control" name="player_height">
	</div>
	
	<div class="form-group">
		<label for="citizenship">Citizenship</label>
			<input type="text" class="form-control"  name="citizenship">
	</div>
	
	<div class="form-group">
		<label for="player_position">Position</label>
		<input type="text" class="form-control" name="player_position">
	</div>
	
	<div class="form-group">
		<label for="foot">Foot</label>
		<input type="text" class="form-control" name="foot">
	</div>
	
	<div class="form-group">
		<label for="joined_club">Joined</label>
		<input type="Date" class="form-control" name="joined_club">
	</div>
	
	<div class="form-group">
		<label for="contract_until">Contract until</label>
		<input type="Date" class="form-control" name="contract_until">
	</div>
	
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="add_player" value="Add player">
	</div>
	
</form>