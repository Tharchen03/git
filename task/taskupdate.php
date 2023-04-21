

<?php
$db =mysqli_connect('localhost','root','','task');
if(isset($_POST{'update'})){
    $userid = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institue= $_POST['institue'];
    $age = $_POST['age'];
    $course = $_POST['course'];


    $querys = "update gg set name = '".$name."' , email = '".$email."', institue_name = '".$institue."' , age = '".$age."' 
    ,course = '".$course."'  where id ='$userid'";
    
     // echo $querys;exit;
     if($db->query($querys) === TRUE){
        header('location:taskindex.php'); 

     }
     else{
        echo "Error:  ".$querys."<br>" .$db->error;
     }
     $db->close();

}

?>