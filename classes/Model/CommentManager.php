<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace classes\Model;
require_once 'resources/fragments/init.php';
use classes\Integration\DatabaseHandler;
//use classes\Util\createLoopArray;
//include 'classes/Util/createLoopArray.php';

class CommentManager {
    private $DBhandler;
    
    public function __construct() {
        $this->DBhandler = new DatabaseHandler();
    }
    
    public function deleteComment ($timestamp, $container) {
        if($container === 'meatball') {
            $commentData = $this->DBhandler->getMBComments();
            //file_put_contents('classes/Database/container.html','');
            $this->DBhandler->deleteAllMBComments();
        }
        
        if($container === 'pancake') {
            $commentData = $this->DBhandler->getPCComments();
            //file_put_contents('classes/Database/container.html','');
            $this->DBhandler->deleteAllPCComments();
        }
        
        //file_put_contents('classes/Integration/container.html','');
        foreach($commentData as $line) {
            if(strpos($line, $timestamp) === false) {
                if($container === 'pancake') {
                    $this->DBhandler->deletePCComment($line);
                    //$handle = fopen("classes/Database/containerPancakes.html", "a");
                    //fwrite($handle, $line);
                    //fclose($handle);
                }
                
                if($container === 'meatball') {
                    $this->DBhandler->deleteMBComment($line);
                    //$handle = fopen("classes/Database/container.html", "a");
                    //fwrite($handle, $line);
                    //fclose($handle);
                }
            }
        }
    }
    
    public function addComment($name, $comment, $container) {
        //$textValidator = ctype_print($comment);
        
        if(($container === 'meatball') && (ctype_print($comment) === TRUE)) {
            //$handle = fopen("classes/Database/container.html", "a");
            $this->DBhandler->addMBComment($name, $comment);
        }
        
        if(($container === 'pancake') && (ctype_print($comment) === TRUE)) {
            //$handle = fopen("classes/Database/containerPancakes.html", "a");
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
            //$fetchData = new DatabaseHandler();
            $commentData = $this->DBhandler->getMBComments();
        }
        
        if($container === 'pancakes') {
            //$fetchData = new DatabaseHandler();
            $commentData = $this->DBhandler->getPCComments();
        }
        
        return $commentData;
    }
}
