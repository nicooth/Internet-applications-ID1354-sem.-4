<?php

namespace classes\Model;
use classes\Controller\Controller;
use classes\Integration\DatabaseHandler;

require_once 'resources/fragments/init.php';

class RegisterNewUser {
    private $DBhandler;
    
    public function __construct() {
        $this->DBhandler = new DatabaseHandler();
    }
    
    public function regNewUser($uname, $psw) {
        $unameValidator = ctype_print($uname);
        $pswValidator = ctype_print($psw);
        $psw = password_hash($psw, PASSWORD_DEFAULT);
        
        if(($unameValidator && pswValidator) === TRUE) {
            $this->DBhandler->insertNewUser($uname, $psw);
            //$handle = fopen("classes/Database/users.txt", "a");
            //fwrite($handle,"\n".$uname.','.$psw);
            //fclose($handle); 
        }
    }  
}
    
