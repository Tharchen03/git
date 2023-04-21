<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" 
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
            color:white;

        }
        td{
            font-family: Roboto Mono,monospace;
            font-size:11px;
            color:red;
        }
        th{
            font-family: Roboto Mono,monospace;
            font-size:11px;
        }   
        </style>
  
</head>
<body>
    <center>
    <br>
    <div>
        <h2> PHP-PDO</h2>
        <hr style="boder-top:1px dotted #ccc;"/>
    </div>
<form  method="post" action="add.php" >
        <fieldset style="background:black; width:400px; border:2px solid white;" >
    <br>
   <legend ><b>Please fill in the details</b></legend><br>


<div class="bb">
    <label for="textinput" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" >
    <div id="emailHelp" class="form-text">Write Your Full Name</div>
  </div>

  <div class="bb">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Institue Name:</label>
    <input type="text" class="form-control" name="institue" >
    <div id="emailHelp" class="form-text">Write Your Institue Name</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Age:</label>
    <input type="text" class="form-control" name="age" >
    <div id="emailHelp" class="form-text">Write Your Age</div>
  </div>

  <div class="bb">
    <label for="textinput" class="form-label">Course:</label>
    <input type="text" class="form-control" name="course" >
    <div id="emailHelp" class="form-text">Write Your full Course</div>
  </div>


  <button type="submit"  name="save" class="btn btn-primary">SAVE</button>
  <br>
  <br>         
    </fieldset >
</form>

<br><div class="table">
    <table class="table table-dark table-hover">
        <thead class ="alert-danger">
            <tr> 
                <th>Name:</th>
                <th>Email address:</th>
                <th>Institue Name:</th>
                <th>Age:</th>
                <th>Course:</th>
                <th>Action:</th>
            </tr>
    </thead>
    <tbody class ="alert-warning">
        <?php
        require 'connection.php';
        $sql = $conn->prepare("SELECT * FROM user ORDER BY id DESC");
        $sql->execute();
        while($row =$sql->fetch()){
        ?>
        <tr>
            <td> <?php echo $row['name']?></td>
            <td> <?php echo $row['email']?></td>
            <td> <?php echo $row['institue']?></td>
            <td> <?php echo $row['age']?></td>
            <td> <?php echo $row['course']?></td>
            <td> <a href ="edit.php?id=<?php echo $row['id']?>">Edit</a>|<a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
        </tbody>
</table>
</div>
</center>
</body>
</html>