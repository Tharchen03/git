<?php
    $db =mysqli_connect('localhost','root','','registration');

if(isset($_POST{'update'})){
    $userid = $_GET['id'];
    $name = $_POST['name'];
    $cid = $_POST['cid'];
    $dob= $_POST['dob'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $querys = "update users set name = '".$name."' ,cid = '".$cid."',dob = '".$dob."' ,course = '".$course."' 
    ,contact_no = '".$contact."' ,email = '".$email."' where id ='$userid'";
    
   // echo $querys;exit;
    if($db->query($querys) === TRUE){
        header('location:index.php');
        
    }
    else{
        echo "Error:  ".$querys."<br>" .$db->error;
    }
    $db->close();

}

?>