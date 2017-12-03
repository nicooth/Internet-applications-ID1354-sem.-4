<?php

namespace classes\Controller;
use classes\Model\HandleLogin;
use classes\Model\RegisterNewUser;
use classes\Model\AddComment;
use classes\Model\AddPancakeComment;
use classes\Model\CommentManager;
use classes\Model\CommentManagerPC;

class Controller {
    private $nickName;
    
    public static function createController() {
        return new Controller();
    }
    
    public static function getController() {
        return unserialize($_SESSION['controller']);
    }
    
    public static function saveController($controller) {
        $_SESSION['controller'] = serialize($controller);
    }
    
    public function setNickName($nickName) {
        $this->nickName = $nickName;
    }

    public function getNickName() {
        return $this->nickName;
    }
    
    public function login($uname, $psw) {
        $loginHandler = new HandleLogin();
        $return = $loginHandler->doLogin($uname, $psw);
        
        return $return;
    }
    
    public function newUser($uname, $password) {
        $regNewUserHandler = new RegisterNewUser();
        $regNewUserHandler->regNewUser($uname, $password);
    }
    
    public function addComment($name, $comment, $containerType) {
        $handleComment = new CommentManager();
        $handleComment->addComment($name, $comment, $containerType);
    }
    
    public function deleteComment($timestamp, $container) {
        $deleteComment = new CommentManager();
        $deleteComment->deleteComment($timestamp, $container);
    }
    
    public function getAccessData($container) {
        $access = new CommentManager();
        $accessdata = $access->getAccessData($container, $this->nickName);
        
        return $accessdata;
    }
    
    public function getCommentdata ($container) {
        $access = new CommentManager();
        $commentData = $access->getCommentData($container);
        
        return $commentData;
    }
}

