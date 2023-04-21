<?php
    $db =mysqli_connect('localhost','root','','registration');
    $userid= $_GET['GetId'];
    $sql ="SELECT * FROM users where id ='".$userid."'";
    $result =$db->query($sql);
	

    while($row = mysqli_fetch_assoc($result)){

      $userid=$row['id'];
      $name=$row['name'];
      $cid=$row['cid'];
      $dob=$row['dob'];
      $course=$row['course'];
      $email=$row['email'];
      $contact=$row['contact_no'];
    }
    ?>


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
    <form method="POST" action="update.php ?id=<?php echo $userid ;?>" width="200px">
    
  <fieldset >

 <b><legend>Please fill in the details</legend></b><br><br>
    <div>
      <label for="TextInput" class="form-label">Name:</label>
      <input type="text" id="TextInput" name="name"  class="form-control" placeholder="Enter your name" value="<?php echo $name ;?>"  >
    </div><br>
	
    <div>
      <label for="Select" class="form-label">Course:</label>
      <input type="text" class="form-select" name="course" value="<?php echo $course ;?>">
    </div><br>
	
    <div>
        <label for="TextInput" class="form-label">CID:</label>
        <input type="text" id="TextInput"  name="cid" class="form-control" placeholder="Enter CID" value="<?php echo $cid ;?>">
        </div><br>
		
       <div>
        <label for="TextInput" class="form-label">DOB:</label>
        <input type="date" id="TextInput" name="dob" class="form-control" placeholder="Enter DOB" value="<?php echo $dob ;?>">
        </div><br>
      
	  <div>
        <label for="TextInput" class="form-label">Email:</label>
        <input type="email" id="TextInput"  name="email" class="form-control" placeholder="Enter emial-Id" value="<?php echo $email ;?>">
        </div><br>
   
   <div>
        <label for="TextInput" class="form-label">Contact No:</label>
        <input type="text" id="numberInput" name="contact" class="form-control" placeholder="Enter Phone Number" value="<?php echo $contact ;?>">
        </div><br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
  </fieldset>
</form>
</center>
</body>
</html>