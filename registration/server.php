<?php
session_start();
//initilizaing variables

$name="";
$cid="";
$dob="";
$course="";
$contact="";
$email="";
$errors=array();

//conect to data base
$db =mysqli_connect('localhost','root','','registration');

//registar user

if(isset($_POST['reg_user'])){

//recive imputs values from the form
$name= mysqli_real_escape_string($db,$_POST['name']);
$cid=mysqli_real_escape_string($db,$_POST['cid']);
$dob=mysqli_real_escape_string($db,$_POST['dob']);
$course=mysqli_real_escape_string($db,$_POST['course']);
$contact=mysqli_real_escape_string($db,$_POST['contact']);
$email=mysqli_real_escape_string($db,$_POST['email']);

//form validation , ensures that the form is correctly filled
//adding array_push corresponding error unto$errors array

if(empty($name)) {array_push($errors,"user name is required");}
if(empty($cid)) {array_push($errors,"cid is required");}
if(empty($dob)) {array_push($errors,"dob is required");}
if(empty($course)) {array_push($errors,"course is required");}
if(empty($contact)) {array_push($errors,"contact is required");}
if(empty($email)) {array_push($errors,"email is required");}

//check data base making sure;
//a user does not exits with the same user or email
$user_check_query = "SELECT * from users WHERE name='$name' or email='$email' LIMIT 1";
$result =mysqli_query($db, $user_check_query);
$user =mysqli_fetch_assoc($result);

if($user){//if user
    if($user['name']===$name){
        array_push($errors,"username alerady exists");
    }
    if($user['email']===$email){
        array_push($errors,"email alerady exists");
    }
}

//finally, registar user if ther is 0 errors
if(count($errors)==0){
    $query="INSERT INTO users(name,cid,dob,course,email,contact_no) VALUES('$name','$cid','$dob','$course','$email','$contact')";
    mysqli_query($db,$query);
    $_SESSION['name']=$name;
    $_SESSION['success']="successfully registered";
    header('location: index.php');


}
}