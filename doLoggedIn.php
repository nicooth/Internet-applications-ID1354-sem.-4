<?php

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;

if (isset($_POST['uname']) && isset($_POST['psw'])) {
    $uname = htmlentities($_POST['uname'], ENT_QUOTES);
    $psw = htmlentities($_POST['psw'], ENT_QUOTES);
    $contr = Controller::createController();
    $return = $contr->login($uname, $psw);
    
    if($return === true) {
        $contr->setNickName($uname);    
        Controller::saveController($contr);
        include 'resources/views/loggedIn.php';
    }
        
    if($return === false) {
        include 'resources/views/loginFailed.html';
    }
}

if (empty($_POST['uname']) && empty($_POST['psw'])) {
    include 'resources/views/loginFailed.html';
}