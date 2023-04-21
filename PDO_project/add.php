<?php
	require_once 'connection.php';
	
	if (isset($_POST['save'])){
		try{
			$name = $_POST['name'];
			$occupation = $_POST['occupation'];
			$organization = $_POST['organization'];
			$country = $_POST['country'];
			$comments = $_POST['comments'];
			// echo $name;exit;
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO pdo (name,occupation,organization,country,comments) 
			values ('$name','$occupation','$organization','$country','$comments')";
			$conn->exec($sql);
		   }catch(PDOException $e){
			   echo $e->getMessage();
			  
		   }
		   
		   $conn = null;
		   header('location:index.php');
	}
?>