<?php
    $db =mysqli_connect('localhost','root','','formpractice');
    $userid=$_GET['GetId'];
    $sql ="SELECT * FROM users where id ='".$userid."'";
    $result =$db->query($sql);

    while($row = mysqli_fetch_assoc($result)){

      $userid=$row['id'];
      $NAME=$row['NAME'];
      $email=$row['email'];
      $password=$row['password'];
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
<style >
    .form-label{
        width:400px;
    }


    </style>
</head>
<body><br><br>
<form method="post" action="update.php">

  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="NAME" value="">
    <div id="emailHelp" class="form-text">Type your full name</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
  </div>

  <button type="submit" name="update" class="btn btn-primary">update</button>
</form>
    
</body>
</html>