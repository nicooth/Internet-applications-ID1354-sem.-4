<?php

namespace classes\Model;

use classes\Integration\DatabaseHandler;

class HandleLogin {
    private $DBhandler;
    
    public function __construct() {
        $this->DBhandler = new DatabaseHandler();
    }
    
    public function doLogin($uname, $psw) {
        $hashedPassword = password_verify($psw, $hash);
        //$loginData = file('classes/Database/users.txt');
        $loginData = $this->DBhandler->getUserContainer();
        $accessData = array();
        $unameValidator = ctype_print($uname);
        $pswValidator = ctype_print($psw);
        
        if(($unameValidator && pswValidator) === TRUE) {   
            foreach ($loginData as $line) {
                list($username, $password) = explode(',', $line);
                $accessData[trim($username)] = trim($password);
            }

            if (array_key_exists($uname, $accessData) && password_verify($psw, $accessData[$uname])) {
                return TRUE;
            } 

            else {
                return FALSE;
            }
        }
    }
}