<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESULTS</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="resultsss">
	
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "../voter/authen.php";
include "home.php";

?>
<center><b><h3> ELECTION RESULTS  </h3></b></center>

<section class="result1">
<div class="resultgrid">
	<div class="results">
			<?php
			include "../voter/database.php";


			$member = mysqli_query($con, 'SELECT * FROM president WHERE candidate_id NOT IN (6)' );
			if (mysqli_num_rows($member)== 0 ) {
				echo '<font color="red">No results found</font>';
			}
			else {
				echo '<center><table><tr bgcolor="white">
			<td width="30px">ID</td>		
			<td width="300px">PRESIDENT</td>

			<td width="30px">VOTES TALLY</td>
			</tr>';
			while($mb=mysqli_fetch_object($member))
					{	
						$id=$mb->candidate_id;
						$name=$mb->firstname;
						$vote=$mb->votecount;
						echo '<tr bgcolor="white">';
				echo '<td>'.$id.'</td>';		
				echo '<td>'.$name.'</td>';
				echo '<td>'.$vote.'</td>';
				echo "</tr>";
					}
					echo'</table></center>';
				}
			?>
	</div>	
</div>

<div class="resultgrid">
	<div class="results">
				<?php
					$member = mysqli_query($con, 'SELECT * FROM gvn WHERE candidate_id NOT IN (6)' );
				if (mysqli_num_rows($member)== 0 ) {
					echo '<font color="red">No results found</font>';
				}
				else {
					echo '<center><table><tr bgcolor="white">
				<td width="30px">ID</td>		
				<td width="300px">GOVERNOR</td>
				
				<td width="30px">VOTES TALLY</td>
				</tr>';
				while($mb=mysqli_fetch_object($member))
						{	
							$id=$mb->candidate_id;
							$name=$mb->firstname;
							$vote=$mb->votecount;
							echo '<tr bgcolor="white">';
					echo '<td>'.$id.'</td>';		
					echo '<td>'.$name.'</td>';
					echo '<td>'.$vote.'</td>';
					echo "</tr>";
						}
						echo'</table></center>';
					}
				?>
	  </div>
 </div>

<div class="resultgrid">
	<div class="results">
			<?php
				$member = mysqli_query($con, 'SELECT * FROM sen WHERE candidate_id NOT IN (6)' );
				if (mysqli_num_rows($member)== 0 ) {
					echo '<font color="red">No results found</font>';
				}
				else {
					echo '<center><table><tr bgcolor="white">
				<td width="30px">ID</td>		
				<td width="300px">SENATOR</td>
				
				<td width="30px">VOTES TALLY</td>
				</tr>';
				while($mb=mysqli_fetch_object($member))
						{	
							$id=$mb->candidate_id;
							$name=$mb->firstname;
							$vote=$mb->votecount;
							echo '<tr bgcolor="white">';
					echo '<td>'.$id.'</td>';		
					echo '<td>'.$name.'</td>';
					echo '<td>'.$vote.'</td>';
					echo "</tr>";
						}
						echo'</table></center>';
					}
			?>
	</div>
</div>


<div class="resultgrid">
	<div class="results">
			<?php
					$member = mysqli_query($con, 'SELECT * FROM woman WHERE candidate_id NOT IN (6)' );
					if (mysqli_num_rows($member)== 0 ) {
						echo '<font color="red">No results found</font>';
					}
					else {
						echo '<center><table><tr bgcolor="white">
					<td width="30px">ID</td>		
					<td width="300px">WOMAN REP</td>
					
					<td width="30px">VOTES TALLY</td>
					</tr>';
					while($mb=mysqli_fetch_object($member))
							{	
								$id=$mb->candidate_id;
								$name=$mb->firstname;
								$vote=$mb->votecount;
								echo '<tr bgcolor="white">';
						echo '<td>'.$id.'</td>';		
						echo '<td>'.$name.'</td>';
						echo '<td>'.$vote.'</td>';
						echo "</tr>";
							}
							echo'</table></center>';
						}
			?>
	</div>
</div>


<div class="resultgrid">
	<div class="results">
			<?php
						$member = mysqli_query($con, 'SELECT * FROM mp WHERE candidate_id NOT IN (6)' );
						if (mysqli_num_rows($member)== 0 ) {
							echo '<font color="red">No results found</font>';
						}
						else {
							echo '<center><table><tr bgcolor="white">
						<td width="30px">ID</td>		
						<td width="300px">MPS</td>
						
						<td width="30px">VOTES TALLY</td>
						</tr>';
						while($mb=mysqli_fetch_object($member))
								{	
									$id=$mb->candidate_id;
									$name=$mb->firstname;
									$vote=$mb->votecount;
									echo '<tr bgcolor="white">';
							echo '<td>'.$id.'</td>';		
							echo '<td>'.$name.'</td>';
							echo '<td>'.$vote.'</td>';
							echo "</tr>";
								}
								echo'</table></center>';
							}
			?>
	</div>
</div>


<div class="resultgrid">
	<div class="results">
			<?php
							$member = mysqli_query($con, 'SELECT * FROM mca WHERE candidate_id NOT IN (6)' );
							if (mysqli_num_rows($member)== 0 ) {
								echo '<font color="red">No results found</font>';
							}
							else {
								echo '<center><table><tr bgcolor="white">
							<td width="30px">ID</td>		
							<td width="300px">MCA</td>
							
							<td width="30px">VOTES TALLY</td>
							</tr>';
							while($mb=mysqli_fetch_object($member))
									{	
										$id=$mb->candidate_id;
										$name=$mb->firstname;
										$vote=$mb->votecount;
										echo '<tr bgcolor="white">';
								echo '<td>'.$id.'</td>';		
								echo '<td>'.$name.'</td>';
								echo '<td>'.$vote.'</td>';
								echo "</tr>";
									}
									echo'</table></center>';
								}
			?>
	</div>
</div>
</section>
<div>
	<?php include "../voter/footer.php" ?>
</div>
</body>
</html>