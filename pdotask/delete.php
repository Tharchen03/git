<?php
     if(isset($_GET['id'])){
         require_once 'connection.php';
         $id =$_GET['id'];
         $sql = $conn->prepare(" DELETE from user Where id = '$id'");
         $sql->execute();
         header('location:index.php');
     }
?>
<!--?php
if(isset($_GET['id'])){
    require_once 'connection.php'
    $id =$_GET['id'];
    $sql = $conn->prepare(" DELETE from user WHERE id='$id'");
    $sql->execute();
    header('location:index.php');
    echo $sql;exit;
}

?-->
