<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <?php
    session_start(); 
    
    include("pages/head.php");
    include("pages/left.php");
    include("pages/center.php");
    include("pages/footer.php");
    //ssession_destroy();
    ?>
</body>
</html>