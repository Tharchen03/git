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
        td{
            font-family: Roboto Mono,monospace;

        }
       
        </style>
</head>

<body>
<center>
    <br>
    <div>
    <h2> PHP- PDO</h2>
    <hr style="boder-top:1px dotted #ccc;"/>
    <div> 
    
<form method="post" action="add.php" >

    <fieldset style="background:rgb(154, 231, 246); width:400px;" >
    <br>
   <legend ><b>Please fill in the details</b></legend><br>

    <div class="bb"> 
      <label for="TextInput" class="form-label">Firstname:</label>
      <input type="text" id="TextInput" name="firstname" class="form-control"  >      
    </div>
    <br>

     <div class="bb">
      <label for="TextInput" class="form-label">Lastname:</label>
      <input type="text" id="TextInput" name="lastname" class="form-control"  >     
    </div>
    <br> 

    <div class="bb"> 
      <label for="TextInput" class="form-label">Address:</label>
      <input type="text" id="TextInput" name="address" class="form-control"  >
      
    </div>
    <br>

    <div>
    <button type="submit"  class="btn btn-primary" name="save">Save</button>
    </div>
    <br>    
    </fieldset >
</form>
    </center> 
    <br>
    <table class="table table-bordered">
        <thead class ="alert-danger">
            <tr> 
                <th>firstname</th>
                <th>lastname</th>
                <th>address</th>
                <th>action</th>
            </tr>
    </thead>

    <tbody class ="alert-warning">
        <?php
        require 'connection.php';
        $sql = $conn->prepare("SELECT * FROM member ORDER BY id DESC");
        $sql->execute();
        while($row =$sql->fetch()){
        ?>
        <tr>
            <td> <?php echo $row['firstname']?></td>
            <td> <?php echo $row['lastname']?></td>
            <td> <?php echo $row['address']?></td>
            <td> <a href ="edit.php?id=<?php echo $row['id']?>">Edit</a>|<a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>

</body>
</html>