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
    <button type="button"><a href ="registration.php">Registar</a></button>
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
    
    $db =mysqli_connect('localhost','root','','registration');
    
    if($db->connect_error){
        die("connection failed:". $db->connect_error);

    }
    $sql ="SELECT * FROM users";
    $result = $db->query($sql);?>

    <table border="1" style="margin-left:auto; margin-right:auto;">
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Cid</th>
          <th>DOB</th>
          <th>Course</th>
          <th>email</th>
          <th>Mobile_no</th>
          <th colspan="2">action</th>

    </tr>

    <?php
    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){

            $id=$row['id'];
            $name=$row['name'];
            $cid=$row['cid'];
            $dob=$row['dob'];
            $course=$row['course'];
            $email=$row['email'];
            $contact=$row['contact_no'];
            ?>

            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $cid;?></td>
                <td><?php echo $dob;?></td>
                <td><?php echo $course;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $contact;?></td>
                <td><a href="edit.php?GetId=<?php echo $id?>">UPDATE</a></td>
                <td><a href="delete.php?del=<?php echo $id?>">DELETE</a></td>

            </td>
    <?php }
        }else {
            echo "0 result";
        }
        ?>
        </table>
        <?php $db->close();
        ?>
</body>
</html>