<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            color:rgb(177, 87, 87);
            font-size:40px;
        }
        legend{
            font-family: Roboto Mono,monospace;
            font-size:20px;
            color:rgb(177, 87, 87);
            
        }
        body{
            background:rgb(125, 187, 199);
        }
        .alert-danger{
            font-family: Roboto Mono,monospace;

        }
       
        </style>
</head>

<body>
<center>

    <div class="col-md-3"></div>
    <div class="col-md-6">
    <h3 class="text-primary">PHP-PDO CRUDE</h3>
    <hr style="border-top:1px dotted #ccc;"/>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <?php
        if(isset($_GET['id'])){
            require_once 'connection.php';
            $id = $_GET['id'];
            $sql = $conn->prepare("SELECT * FROM member WHERE id ='$id'");
            $sql->execute();
            $rows = $sql->fetch();
        }       
        ?>
       
<form method="post" action="update.php?id=<?php echo $id?>" >

<fieldset style="background:rgb(154, 231, 246); width:400px;" >
<br>
<legend ><b>Please fill in the details</b></legend><br>

<div class="bb"> 
  <label for="TextInput" class="form-label">Firstname:</label>
  <input type="text" id="TextInput" name="firstname" value="<?php echo $rows['firstname']?>" class="form-control"  >      
</div>
<br>

 <div class="bb">
  <label for="TextInput" class="form-label">Lastname:</label>
  <input type="text" id="TextInput" name="lastname" value="<?php echo $rows['lastname']?>" class="form-control"  >     
</div>
<br> 

<div class="bb"> 
  <label for="TextInput" class="form-label">Address:</label>
  <input type="text" id="TextInput" name="address" value="<?php echo $rows['address']?>" class="form-control"  >
  
</div>
<br>

<div>
<button type="submit"  class="btn btn-warning" name="update">Update</button>
</div>
<br>    
</fieldset >
</form>
</center>
           <?php
           $conn =null;
  
            ?> 
</div>
    </div>
    </body>
    </html>
