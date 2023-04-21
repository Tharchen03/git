<?php
session_start();

$NAME="";
$email="";
$password="";
$errors=array();

$db =mysqli_connect('localhost','root','','formpractice');


if (isset($_POST['reg_user'])){

    $NAME= mysqli_real_escape_string($db,$_POST['NAME']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password= mysqli_real_escape_string($db,$_POST['password']);

    if(empty($NAME)) {array_push($errors,"user name is required");}
    if(empty($email)) {array_push($errors,"email is required");}
    if(empty($password)) {array_push($errors,"password is required");}

    $user_check_query = "SELECT * from users WHERE NAME='$NAME' or email='$email' LIMIT 1";
    $result =mysqli_query($db, $user_check_query);
    $user =mysqli_fetch_assoc($result);

    if($user){
        if($user['NAME']===$NAME){
            array_push($errors,"username alerady exists");
        }
        if($user['email']===$email){
            array_push($errors,"email alerady exists");
        }
    }

    if(count($errors)==0){
        $query="INSERT INTO users(NAME,email,password) VALUES('$NAME','$email','$password')";
        mysqli_query($db,$query);
        $_SESSION['NAME']=$NAME;
        $_SESSION['success']="successfully registered la.......  ";
        header('location: index1.php');

    }
}