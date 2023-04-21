<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .form-label{
            font-family: Roboto Mono,monospace;
            color:red;
        }
        .bb{
            width:300px;
            color:rgb(59, 58, 58);
            font-size:15px;
        }
        h2{        
            font-family: cursive;
            color:white;
            font-size:40px;
        }
        legend{
            font-family: Roboto Mono,monospace;
            font-size:20px;
            color:white;
            
        }
        body{
            background:black;
        }
        .alert-danger{
            font-family: Roboto Mono,monospace;

        }

        td{
            font-family: Roboto Mono,monospace;
            font-size:11px;
        }
        th{
            font-family: Roboto Mono,monospace;
            font-size:11px;
        }
       
        </style>
    
</head>
<body>
    <center>
        
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <!--h2 class="text-primary">PHP-PDO CRUDE</h2-->
    <hr style="border-top:1px dotted #ccc;"/>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <?php
        if(isset($_GET['id'])){
            require_once 'connection.php';
            $id = $_GET['id'];
            $sql = $conn->prepare("SELECT * FROM user WHERE id ='$id'");
            $sql->execute();
            $rows = $sql->fetch();
        }       
        ?>
    <br>
    <div>
        <h2> PHP-PDO CRUDE</h2>
        <hr style="boder-top:1px dotted #ccc;"/>
    </div>
<form  method="post" action="update.php?id=<?php echo $id?>">
        <fieldset style="background:black; width:400px; border:2px solid white;" >
    <br>
   <legend ><b>Please fill in the details</b></legend><br>


<div class="bb">
    <label for="textinput" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $rows['name']?>" >
    <div id="emailHelp" class="form-text">Write Your Full Name</div>
  </div>

  <div class="bb">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $rows['email']?>"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Institue Name:</label>
    <input type="text" class="form-control" name="institue" value="<?php echo $rows['institue']?>" >
    <div id="emailHelp" class="form-text">Write Your Institue Name</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Age:</label>
    <input type="text" class="form-control" name="age" value="<?php echo $rows['age']?>">
    <div id="emailHelp" class="form-text">Write Your Age</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Course:</label>
    <input type="text" class="form-control" name="course" value="<?php echo $rows['course']?>">
    <div id="emailHelp" class="form-text">Write Your full Course</div>
  </div>


  <button type="submit"  name="update" class="btn btn-primary">UPDATE</button>
  <br>    
    </fieldset >
</form>
</center>
<div>
    <?php
    $conn =null;
    ?>
    </div>
    
</body>
</html>