<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>

    <title>home</title>
</head>
<body>
    <div>
    <button type="button"><a href ="form.php">Registar</a></button>
</div>

<div>
   <?php if(isset($_SESSION['success']))  :?>
       
       <h3>
           <?php
           echo $_SESSION['success'];
           unset($_SESSION['success']);
           ?>
           </h3>


    <?php endif; ?>
<?php
    $db =mysqli_connect('localhost','root','','task');
    
    if($db->connect_error){
        die("connection failed:". $db->connect_error);

    }
    $sql ="SELECT * FROM gg";
    $result = $db->query($sql);?>

<table border="1" style="margin-left:auto; margin-right:auto;">
      <tr>
          <th>Id</th>
          <th>name</th>
          <th>email</th>
          <th>institue</th>
          <th>age</th>
          <th>course</th>
          <th colspan="2">action</th>

    </tr>


<?php 
   if ($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
             $id= $row['id'];
             $name= $row['name'];
             $email= $row['email'];
             $institue= $row['institue_name'];
             $age= $row['age'];
             $course= $row['course'];  
?>
            
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $institue;?></td>
                <td><?php echo $age;?></td>
                <td><?php echo $course;?></td>
                <td><a href="taskedit.php?GetId=<?php echo $id?>">UPDATE</a></td>
                <td><a href="taskdelete.php?del=<?php echo $id?>">DELETE</a></td>

        </tr>
      <?php  }
    }else{
        echo "0 result";
    }
    ?>
    </table>
    <?php $db->close();
        ?>
</div>
</body>
</html>