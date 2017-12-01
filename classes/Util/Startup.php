<?php

namespace classes\Util;

/**
 * Responsible for initialization common to different requests.
 */
class Startup {
    public static function initRequest() {
        session_start();
        self::createClassLoader();
    }

    private static function createClassLoader() {
        require_once 'classes/Controller/Controller.php';
        require_once 'classes/Model/HandleLogin.php';
        require_once 'classes/Model/RegisterNewUser.php';
        //require_once 'classes/Model/AddComment.php';
        //require_once 'classes/Model/AddPancakeComment.php';
        require_once 'classes/Model/CommentManager.php';
        //require_once 'classes/Model/CommentManagerPC.php';
        require_once 'classes/Integration/DatabaseHandler.php';
    }
}

