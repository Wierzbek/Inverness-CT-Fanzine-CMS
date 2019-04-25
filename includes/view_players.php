<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Player name</th>
									<th>Number</th>
									<th>Date of birth</th>
									<th>Place of birth</th>
									<th>Age</th>
									<th>Height</th>
									<th>Citizenship</th>
									<th>Position</th>
									<th>Foot</th>
									<th>Joined</th>
									<th>Contract until</th>
								</tr>
							</thead>
								
								<tbody>
								
								<?php
								$query = "SELECT * FROM squad ORDER BY player_position DESC";
								$select_players = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($select_players))
									{
										// Read standings data from the database and assign them to the variables:
										$player_name		= $row['player_name'];
										$player_number 		= $row['player_number'];
										$player_dob 		= $row['player_dob'];
										$place_of_birth		= $row['place_of_birth'];
										$age 				= $row['age'];
										$player_height 		= $row['player_height'];
										$citizenship 		= $row['citizenship'];
										$player_position 	= $row['player_position'];
										$foot 				= $row['foot'];
										$joined 			= $row['joined'];
										$contract_until 	= $row['contract_until'];
										
										// Print the standings table
										echo "<tr>";
										echo "<td>$player_name</td>";
										echo "<td>$player_number</td>";
										echo "<td>$player_dob</td>";
										echo "<td>$place_of_birth</td>";
										echo "<td>$age</td>";
										echo "<td>$player_height</td>";
										echo "<td>$citizenship</td>";
										echo "<td>$player_position</td>";
										echo "<td>$foot</td>";
										echo "<td>$joined</td>";
										echo "<td>$contract_until</td>";
										echo "</tr>";				       
									}
								?>		
								</tbody>
						</table>
						<table>
							<tbody>
								<thead>
									<tr>
										<td>
											<button><a href="?source=add_player"><b>Add player</b></a></button>
										</td>
									</tr>
								</thead>
							</tbody>
						</table>