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
    
    //public function addCommentPC($uname, $comment) {
    //    $handleComment = new CommentManagerPC();
    //    $handleComment->addPancakeComment($uname, $comment);
    //}
    
    public function deleteComment($timestamp, $container) {
        $deleteComment = new CommentManager();
        $deleteComment->deleteComment($timestamp, $container);
    }
    
    //public function deleteCommentPC($timestamp) {
    //    $deleteComment = new CommentManagerPC();
    //    $deleteComment->deletePancakeComment($timestamp);
    //}
    
    //public function showMBComments ($name, $container) {
    //    $showComment = new CommentManagerMB();
    //    $showComment->showComments($name, $container);
    //}
    
    //public function showPCComments ($name) {
    //    $showComment = new CommentManagerPC();
    //    $showComment->showComments($name);
    //}
    
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

