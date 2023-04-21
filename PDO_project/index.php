<!Doctype html>
<html>
	<head>
	<h1><center>PDO-PHP</center></h1>
		<title>PDO_PHP</title>
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<style>
			*{
				margin:0;
				padding:0;
			}
		    body{
				margin:120px;
			}
	
			.boy{
				margin:50px;
				padding:50px;
				text-align:left;
			}
			
		</style>
	</head>
	<body style="background-image:url('yeshi.jpg');background-repeat:no-repeat; background-size:cover;">
	<center>
		<form method="post" action="add.php">
			<fieldset style="background:lightblue; width:300px; border:1px solid black;">
			 <legend><h2>Fill the Form</h2></legend>
				<div class="boy">
					<label><h3>Name:</h3></label>
					<input type="text" name="name" placeholder="Enter name">
					<p>Please Fill the Name</p><br><br>
					
					<label><h3>Occupation:</h3></label>
					<select name="occupation" id="job">
					<option value="1">Choose your occupation</option>
					<option value="2">Employed</option>
					<option value="3">unemployed</option>
					<option value="4">Student</option>
					</select>
					<p> choose your occupation</p><br><br>   
					
					
					
					
					<label><h3>Organization:</h3></label>
					<input type="text" name="organization" placeholder="Name the organization">
					<p>Give your organization</p>
					<br><br>
					
					<label><h3>Counry:</h3></label>
					<select name="country" id="country">
					<option value="1">Choose your country</option>
					<option value="2">Bhutan</option>
					<option value="3">India</option>
					<option value="4">Nepal</option>
					</select>
					<p>Choose your country</p>
					<br><br>
					
					<label><h3>Comments:</h3></label>
					<input type="text" name="comments" placeholder="Give your comments">
					<p>give your comments</p>
					<br><br>
					
					
					<label><button class="btn btn-primary form-control" type="submit" name="save"><h3>SAVE</h3></button><label>
				</div>
			</fieldset>
		</form>
	</center>
					<table class="table table-bordered">
					<thead class ="alert-danger">
						<tr>
							<th>name</th>
							<th>occupation</th>
							<th>organization</th>
							<th>country</th>
							<th>comments</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody class="alert-warning">
						<?php
							require 'connection.php';
							$sql = $conn->prepare("SELECT * FROM pdo ORDER BY 'id' DESC");
							$sql->Execute();
							while($row = $sql->fetch()){
							//occupation	
							if($row['occupation'] == 1):
							$occ = 'None';
							elseif($row['occupation'] == 2):
							$occ = 'Employed';
							elseif($row['occupation'] == 3):
							$occ = 'Unemployed';
							elseif($row['occupation'] == 4):
							$occ = 'Student';
							endif;
							//country
							if ($row['country'] ==1):
							$con = 'None';
							elseif ($row['country'] ==2):
							$con = 'Bhutan';
							elseif ($row['country'] ==3):
							$con = 'India';
							elseif ($row['country'] ==4):
							$con = 'Nepal';
							endif;
							
							
						?>
						
						<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $occ;?></td>
							<td><?php echo $row['organization'];?></td>
							<td><?php echo $con ;?></td>
							<td><?php echo $row['comments'];?></td>
							<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> 
							<a href="delete.php?id=<?php echo $row['id'];?>">Delete</td>
						</tr>
						
						
						<?php	}  ?>
					</tbody>
				</table>
	</body>
</html>