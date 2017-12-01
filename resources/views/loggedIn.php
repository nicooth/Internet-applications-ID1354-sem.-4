<!DOCTYPE html>
<html>
<head>
    <title>Tasty Recipes</title>  
    <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css"> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>   
    <?php include 'doNavigationBar.php';?>
    <h1>Tasty Recipes</h1>
    <div class = "loggedintransbox">
        <h2><br>Welcome 
        <?php 
            use classes\Controller\Controller;
            $contr = Controller::getController();
            echo $contr->getNickname();
        ?>!
        </h2> 
    </div>     
</body>
</html>