<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //php session
    session_start();
    echo session_id().'<br>';

    if (isset($_SESSION['counter'])){
        $_SESSION['counter']++;    
    }else{
        $_SESSION['counter']=1;
    }
    
    
    ?>
    <h1> you visited: <?php echo $_SESSION['counter'];  ?> times</h1>

    <?php 
    
   
    ?>
    <?php print_r($_SESSION) ?>
    
</body>
</html>
