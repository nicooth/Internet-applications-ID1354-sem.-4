<?php

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;

if($_POST && !empty($_POST['comment'])){
    $contr = Controller::getController();
    $name = $contr->getNickname();
    $comment = htmlentities($_POST['comment'], ENT_QUOTES);
    $contr->addComment($name, $comment, $_POST['containerType']);
}

$nextView = $_POST['containerType'];
//if ($nextView === meatball)
//    include 'resources/views/meatballs.php';

//if ($nextView === pancake)
//    include 'resources/views/pancakes.php';


