<?php
	if(isset($_GET['id'])){ 
    require_once 'connection.php';
	$id = $_GET['id'];
	$sql = $conn->prepare("DELETE from pdo WHERE id='$id'");
	$sql->execute();
	header('location:index.php');
	}

?>