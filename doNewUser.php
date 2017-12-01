<?php

/* 
 * Shows the view for a registering a new user.
 */

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;

if (count($_POST) && !empty($_POST['uname']) && !empty($_POST['psw']))
{
    $uname = htmlentities($_POST['uname'], ENT_QUOTES);
    //$password = $_POST['psw'];
    
    $password = htmlentities($_POST['psw'], ENT_QUOTES);
    $contr = Controller::createController();
    $contr->newUser($uname, $password);
    include 'doLogin.php';
}

include 'resources/views/newUser.php';

//htmlentities($_POST['uname'], ENT_QUOTES);
//htmlentities($_POST['uname'], ENT_QUOTES);
