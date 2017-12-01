<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;
//use classes\Model\CommentManagerMB;

if(isset($_POST['Delete']))
{
    $nextView = $_POST['containerType'];
    $timestamp = $_POST['timestamp'];
    $contr = Controller::getController();
    $contr->deleteComment($timestamp, $_POST['containerType']);
    
    if ($nextView === meatball)
        include 'resources/views/meatballs.php';
    
    if ($nextView === pancake)
        include 'resources/views/pancakes.php';
}