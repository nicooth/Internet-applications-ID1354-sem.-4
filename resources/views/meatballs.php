<?php include 'doNavigationBar.php';?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Tasty Recipes - meatballs</title>  
    <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css"> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/test.js"></script>
</head>
<body>
    <h1>Meatballs</h1> 
    <div class="transbox">
        <img src="resources/images/meatballs.jpg" alt="Meatballs">
        <h3>Prep: 15 min | Total: 40 min | Servings: 4</h3>
        <h3>Ingredients</h3>
        <p>1 lb lean (at least 80%) ground beef<br>
        1/2 cup Progresso™ Italian-style bread crumbs<br>
        1/4 cup milk<br>
        1/2 teaspoon salt<br>
        1/2 teaspoon Worcestershire sauce<br>
        1/4 teaspoon pepper<br>
        1 small onion, finely chopped (1/4 cup)<br>
        1 egg</p>
        <h3>Steps</h3>
        <p>1 Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.<br>
        2 In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch)<br>
        meatballs. Place 1 inch apart in pan.<br>
        3 Bake uncovered 18 to 22 minutes or until no longer pink in center.</p>
            
        <?php
            include 'doCommentHeaderMB.php';
        ?>
        <h4>What others are saying...</h4>
        <hr>
        <button id ="loadcommentsMB" class="loadComments">Update entries</button>
        <div id = "commentbox">
            <p hidden id="nickNameLabel"><?php echo $contr->getNickname();?></p>
            <div id="newCommentbox"></div>
        </div>
    </div>
</body>
</html>
