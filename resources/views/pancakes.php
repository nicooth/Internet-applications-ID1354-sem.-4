<?php include 'doNavigationBar.php';?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Tasty Recipes - pancakes</title>  
    <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css"> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/test.js"></script>
</head>
<body>   
    
    <h1>Pancakes</h1> 
    
    <div class="transbox">
        <img src="resources/images/pancakes1.png" alt="Pancakes">
        <h3>Prep: 10 min | Total: 30 min | Servings: 4</h3>
        <h3>Ingredients</h3>
        <p>1 1/2 cups all-purpose flour<br>2 tablespoons sugar<br>1 tablespoon baking powder<br>3/4 teaspoon salt<br>1 1/4 cups milk<br>1 large egg<br>4 tablespoons butter, melted<br>1 teaspoon vanilla extract</p>
        <h3>Steps</h3>
        <p>1 In large bowl, whisk flour, sugar, baking powder and salt. Add milk,<br>butter and egg; stir until flour is moistened.<br>2 Heat 12-inch nonstick skillet or griddle over medium heat until drop of water sizzles; brush lightly with oil.<br>In batches, scoop batter by scant 1/4-cupfuls into skillet, spreading to 3 1/2 inches each.<br>Cook 2 to 3 minutes or until bubbly and edges are dry.<br>With wide spatula, turn; cook 2 minutes more or until golden. <br>Transfer to platter or keep warm on a cookie sheet in 225°F oven.<br>3 Repeat with remaining batter, brushing griddle with more oil if necessary.</p>
        <?php
            include 'doCommentHeaderPC.php';
        ?>
        <h4>What others are saying...</h4>
        <hr>
        <button id ="loadcommentsPC" class="loadComments">Update entries</button>
        <div id = "commentbox">
            <p hidden id="nickNameLabelPC"><?php echo $contr->getNickname();?></p>
            <div id="newCommentboxPC"></div>
        </div>  
    </div>
</body>
</html>