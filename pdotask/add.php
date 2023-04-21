<?php
    require_once 'connection.php';

    if(isset($_POST['save'])){
        try{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $institue = $_POST['institue'];
            $age = $_POST['age'];
            $course = $_POST['course'];

            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO user (name,email,institue,age,course) VALUES ('$name','$email','$institue','$age','$course')";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
        header('location:index.php');
    }
?>