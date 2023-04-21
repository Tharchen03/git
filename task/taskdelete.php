<?php
$db =mysqli_connect('localhost','root','','task');
if(isset($_GET['del']))

    {
        $userid= $_GET['del'];
        //echo $userid;exit;
        $querys = "delete from gg where id ='".$userid."'";
        $result = $db->query($querys);
        if($result){
            echo 'successfully deleted';
           header("location:taskindex.php");
        }
        else{
            echo'error';
        }
   
   }
   ?>
