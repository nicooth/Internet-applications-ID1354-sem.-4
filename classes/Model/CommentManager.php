<?php

namespace classes\Model;
require_once 'resources/fragments/init.php';
use classes\Integration\DatabaseHandler;

class CommentManager {
    private $DBhandler;
    
    public function __construct() {
        $this->DBhandler = new DatabaseHandler();
    }
    
    public function deleteComment ($timestamp, $container) {
        if($container === 'meatball') {
            $commentData = $this->DBhandler->getMBComments();
            $this->DBhandler->deleteAllMBComments();
        }
        
        if($container === 'pancake') {
            $commentData = $this->DBhandler->getPCComments();
            $this->DBhandler->deleteAllPCComments();
        }
        
        foreach($commentData as $line) {
            if(strpos($line, $timestamp) === false) {
                if($container === 'pancake') {
                    $this->DBhandler->deletePCComment($line);
                }
                
                if($container === 'meatball') {
                    $this->DBhandler->deleteMBComment($line);
                }
            }
        }
    }
    
    public function addComment($name, $comment, $container) {        
        if(($container === 'meatball') && (ctype_print($comment) === TRUE)) {
            $this->DBhandler->addMBComment($name, $comment);
        }
        
        if(($container === 'pancake') && (ctype_print($comment) === TRUE)) {
            $this->DBhandler->addPCComment($name, $comment);
        }
    }
    
    public function getAccessData($container, $uname){
        $accessData = array();
        $commentData = $this->getCommentdata($container);
        $i = 0;

        foreach ($commentData as $line) {
            if(strpos($line, $uname) !== false) {
                list($comment, $user) = explode('hidden>', $line);
                $accessData[$i++] = trim($user);
            }
        }
        
        return $accessData;   
    }
    
    public function getCommentdata ($container) {
        if($container === 'meatballs') {
            $commentData = $this->DBhandler->getMBComments();
        }
        
        if($container === 'pancakes') {
            $commentData = $this->DBhandler->getPCComments();
        }
        
        return $commentData;
    }
}
