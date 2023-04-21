<?php
    require_once 'connection.php';

    if(ISSET($_POST['update'])){
        try{
            $id = $_GET['id'];
            $name= $_POST['name'];
            $email  = $_POST['email'];
            $institue = $_POST['institue'];
            $age = $_POST['age'];
            $course = $_POST['course'];
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE user SET name='$name',email ='$email',institue='$institue',age ='$age',course='$course' WHERE id='$id'";
           // echo  $sql;exit;
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
        header('location:index.php');
    }
?>