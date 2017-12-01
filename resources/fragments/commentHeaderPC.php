<?php

use classes\Controller\Controller;
$contr = Controller::getController();
$nickname = $contr->getNickname();

if(!empty($contr) && $nickname != '') {
    echo'
        <h3>Add a public comment</h3>
        <div class="comments">
            <form action="doAddComment.php" method = "POST">
                <label>Comment</label>
                <input type="text" id="comment" name="comment" placeholder="Type your comment here..">
                <input type="submit" value="Post comment">
                <input type="hidden" value = "pancake" name = "containerType">
            </form>
        </div>';
}
        
else {
    echo '<h4>Log in to add a public comment</h4><br>';
}