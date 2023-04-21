<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>

<title>FormPhp</title>
<meta name="viewport" content="device-width: initial-scale=1:0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" >
<link rel="stylesheet" href="bootstrap.css" type="text/css">
</head>
<body>
 <center>
    <form method="POST" action="registration.php" width="200px">
    <?php include('errors.php');?>
  <fieldset >
 <legend>Please fill in the details</legend><br><br>
    <div>
      <label for="TextInput" class="form-label">Name:</label>
      <input type="text" id="TextInput" name="name" class="form-control" placeholder="Enter your name" >
    </div><br>
	
    <div>
      <label for="Select" class="form-label">Course:</label>
      <input type="text" class="form-select" name="course" value="">
    </div><br>
	
    <div>
        <label for="TextInput" class="form-label">CID:</label>
        <input type="text" id="TextInput"  name="cid" class="form-control" placeholder="Enter CID">
        </div><br>
		
       <div>
        <label for="TextInput" class="form-label">DOB:</label>
        <input type="date" id="TextInput" name="dob" class="form-control" placeholder="Enter DOB">
        </div><br>
      
	  <div>
        <label for="TextInput" class="form-label">Email:</label>
        <input type="email" id="TextInput"  name="email" class="form-control" placeholder="Enter emial-Id">
        </div><br>
   
   <div>
        <label for="TextInput" class="form-label">Contact No:</label>
        <input type="text" id="numberInput" name="contact" class="form-control" placeholder="Enter Phone Number">
        </div><br>
    <button type="submit" name="reg_user" class="btn btn-primary">Add</button>
  </fieldset>
</form>

</body>
</html>