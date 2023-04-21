<?php

$db =mysqli_connect('localhost','root','','registration');
if(isset($_GET['del']))
{
     $userid= $_GET['del'];
     //echo $userid;exit;
     $querys = "delete from users where id ='".$userid."'";
     $result = $db->query($querys);
     if($result){
         echo 'successfully deleted';
        // header("location:index.php");
     }
     else{
         echo'error';
     }

}

?>