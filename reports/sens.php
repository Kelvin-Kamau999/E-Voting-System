<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/style.css">
    <title>SENATORIAL ELECTION REPORTS</title>
</head>
<body class="profile">

     <center><p>THE NATIONAL ELECTION COMMISSION <br>SENATORIAL ELECTION REPORT</p></center>
     <div>
     <p>After the general elections conducted on the <input type="text"> day of <input type="text">, <input type="text"> this is the final results tallied for the senatorial election.</p>
      
     <?php
			include "../voter/database.php";


			$member = mysqli_query($con, 'SELECT * FROM sen WHERE candidate_id NOT IN (6)' );
			if (mysqli_num_rows($member)== 0 ) {
				echo '<font color="red">No results found</font>';
			}
			else {
				echo '<center><table><tr bgcolor="grey">
			<td width="30px">ID</td>		
			<td width="100px">SENATOR</td>

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
</div>
<div><p style="color: blue; font-size:x-large">SIGNED:</p></div>
<div>AGENT1: NAME: <input type="text"> SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<div>AGENT2: NAME:<input type="text">  SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<div>AGENT3: NAME:<input type="text">  SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<div>AGENT4: NAME:<input type="text">  SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<div>AGENT5: NAME:<input type="text">  SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<br>
<div>Commission Chairperson: NAME:<input type="text">  SIGNATURE:<input type="text">  DATE:<input type="date"></div>
<br><br>

<div style="margin-top: 15px;">
<?php include "../voter/footer.php" ?>
</div>
</body>
</html>
