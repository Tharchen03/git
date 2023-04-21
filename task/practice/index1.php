<?php
session_start();

?>
<!DOCTYPE html>
<html >
<head>

    <title>home</title>
</head>
<body>
    


    <?php if(isset($_SESSION['success']))  :?>
       
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
                </h3>
   

    <?php endif ?>
    <?php if(isset($_SESSION['NAME'])):?>
        <p>welcome<strong><?php   echo $_SESSION['NAME'];   ?></strong></p>
        <?php endif ?>
  

    
</body>
</html>