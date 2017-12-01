<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;
//use classes\Util\Container;

if($_POST && !empty($_POST['comment'])){
    $contr = Controller::getController();
    $name = $contr->getNickname();
    //$comment = $_POST['comment'];
    $comment = htmlentities($_POST['comment'], ENT_QUOTES);
    $contr->addComment($name, $comment, $_POST['containerType']);
  //  include './resources/views/meatballs.php';
}

$nextView = $_POST['containerType'];
if ($nextView === meatball)
    include 'resources/views/meatballs.php';

if ($nextView === pancake)
    include 'resources/views/pancakes.php';


