<?php
$db =mysqli_connect('localhost','root','','task');
$userid = $_GET['GetId'];
$sql = "SELECT * FROM gg where id='".$userid."'";
$result = $db-> query($sql);

while($row = mysqli_fetch_assoc($result)){
    
    $userid=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $institue=$row['institue_name'];
    $age=$row['age'];
    $course=$row['course'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
<form method="POST" action="taskupdate.php ?id=<?php echo $userid;?>" >

    
<div class="mb-3">
    <label for="textinput" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ;?>" >
    <div id="emailHelp" class="form-text">Write Your Full Name</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $email ;?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="textinput" class="form-label">Institue Name</label>
    <input type="text" class="form-control" name="institue" value="<?php echo $institue; ?>">
    <div id="emailHelp" class="form-text">Write Your Institue Name</div>
  </div>

  <div class="mb-3">
    <label for="textinput" class="form-label">Age</label>
    <input type="text" class="form-control" name="age" value="<?php echo $age ;?>" >
    <div id="emailHelp" class="form-text">Write Your Age</div>
  </div>

  <div class="mb-3">
    <label for="textinput" class="form-label">Course</label>
    <input type="text" class="form-control" name="course"  value="<?php echo $course ;?>">
    <div id="emailHelp" class="form-text">Write Your full Course</div>
  </div>


  <button type="submit" name="update" class="btn btn-primary" >Update</button>
</form>


    


</body>
</html>
