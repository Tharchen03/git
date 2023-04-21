<?php
	require_once 'connection.php';
	
	if (isset($_POST['update'])){
		try{
			$id = $_GET['id'];
			$name = $_POST['name'];
			$occupation = $_POST['occupation'];
			$organization = $_POST['organization'];
			$country = $_POST['country'];
			$comments = $_POST['comments'];
			$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE pdo SET name = '$name',
			occupation = '$occupation',organization = '$organization', country='$country', comments='$comments'  WHERE 
			id = '$id'";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getmessage();
		}
		$conn = null;
		header('location:index.php');
	}
?>