<?php

require_once 'resources/fragments/init.php';
use classes\Controller\Controller;

if (isset($_POST['uname']) && isset($_POST['psw'])) {
    //$uname = $_POST['uname'];
    //$psw = $_POST['psw'];
    
    $uname = htmlentities($_POST['uname'], ENT_QUOTES);
    $psw = htmlentities($_POST['psw'], ENT_QUOTES);
    
    //$psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);
    
    $contr = Controller::createController();
    $return = $contr->login($uname, $psw);
    
    if($return === true) {
        //$_SESSION['uname'] = $uname;
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