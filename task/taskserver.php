<?php
session_start();

$name="";
$email="";
$institue="";
$age="";
$course="";
$errors=array();

$db = mysqli_connect('localhost','root','','task');

if(isset($_POST['reg_user'])){
    $name= mysqli_real_escape_string($db,$_POST['name']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $institue = mysqli_real_escape_string($db,$_POST['institue']);
    $age= mysqli_real_escape_string($db,$_POST['age']);
    $course= mysqli_real_escape_string($db,$_POST['course']);
    
    if(empty($name)) {array_push($errors,"user name is required");}
    if(empty($email)) {array_push($errors,"email is required");}
    if(empty($institue)) {array_push($errors,"institue_name is required");}
    if(empty($age)) {array_push($errors,"age is required");}
    if(empty($course)) {array_push($errors,"course is required");}

    $user_check_query = "SELECT * from gg WHERE name='$name' or email='$email' LIMIT 1";
    $result =mysqli_query($db, $user_check_query);
    $user =mysqli_fetch_assoc($result);

    if($user){
        if($user['name']===$name){
            array_push($errors,"username alerady exists");
        }
        if($user['email']===$email){
            array_push($errors,"email alerady exists");
        }
    }
    if(count($errors)==0){
        $query="INSERT INTO gg(name,email,institue_name,age,course) VALUES('$name','$email','$institue','$age','$course')";
        mysqli_query($db,$query);
        $_SESSION['name']=$name;
        $_SESSION['success']="successfully registered";
        header('location:taskindex.php ');

    }

       
}