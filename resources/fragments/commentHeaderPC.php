<?php
use classes\Controller\Controller;
$contr = Controller::getController();
$nickname = $contr->getNickname();

if(!empty($contr) && $nickname != '') {
    echo'
        <h3>Add a public comment</h3>
        <div class="comments">
            <form id ="operands">
                <label>Comment</label>
                <input type="text" name="comment" placeholder="Type your comment here..">
                <input type="hidden" value = "pancake" name = "containerType">
            </form>
            <button id="submit">Post comment</button>
        </div>';
}
        
else {
    echo '<h4>Log in to add a public comment</h4><br>';
}