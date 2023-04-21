<!Doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
				if(isset($_GET['id'])){
					require_once 'connection.php';
					$id = $_GET['id'];
					$sql = $conn->prepare("SELECT * FROM pdo WHERE id = '$id'");
					$sql->execute();
					$row = $sql->fetch();
				    }
				?>
				<form method="post" action="update.php?id=<?php echo $id?>">
			<fieldset style="background:lightblue; width:300px; border:1px solid black;">
			 <legend><h2>Fill the Form</h2></legend>
				<div class="boy">
					<label><h3>Name:</h3></label>
					<input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Enter name">
					<p>Please Fill the Name</p><br><br>
					
					<label><h3>Occupation:</h3></label>
					<select name="occupation" id="job">
					<option value="1">Choose your occupation</option>
					<option value="2">Employed</option>
					<option value="3">unemployed</option>
					<option value="4">Student</option>
					<input type="text" name="name" value="<?php echo $row['occupation'];?>">
					</select>
					<p> choose your occupation</p><br><br>   
					
					
					
					
					<label><h3>Organization:</h3></label>
					<input type="text" name="organization" value="<?php echo $row['organization'];?>" placeholder="Name the organization">
					<p>Give your organization</p>
					<br><br>
					
					<label><h3>Counry:</h3></label>
					<select name="country" id="country">
					<option value="1">Choose your country</option>
					<option value="2">Bhutan</option>
					<option value="3">India</option>
					<option value="4">Nepal</option>
					<input type="text" name="country" value="<?php echo $row['country'];?>">
					</select>
					<p>Choose your country</p>
					<br><br>
					
					<label><h3>Comments:</h3></label>
					<input type="text" name="comments" value="<?php echo $row['comments'];?>" placeholder="Give your comments">
					<p>give your comments</p>
					<br><br>
					
					<label><button class="btn btn-primary form-control" type="submit" name="update">update</button></label>
				
				</div>
		
			</fieldset>
		</form>
		<?php
			$conn=null;
						?>
	</body>
</html>