<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace classes\Integration;

class DatabaseHandler {
    public function getMBComments() {
        $commentData = file('classes/Database/container.html');
        
        return $commentData;
    }
    
    public function deleteAllMBComments () {
        file_put_contents('classes/Database/container.html','');
    }
    
    public function deleteMBComment ($line) {
        $handle = fopen("classes/Database/container.html", "a");
        fwrite($handle, $line);
        fclose($handle);
    }
    
    public function addMBComment($name, $comment) {
        $handle = fopen("classes/Database/container.html", "a");
        $t=time();
        fwrite($handle, "<b>". $name ." ".gmdate("Y-m-d",$t)."</b>:<br>".$comment."<p hidden>".time().",". $name ."</p><br><br>"."\n");
        fclose($handle);
    }
    
    public function getPCComments() {
        $commentData = file('classes/Database/containerPancakes.html');
        
        return $commentData;
    }
    
    public function deleteAllPCComments() {
        file_put_contents('classes/Database/containerPancakes.html','');
    }
    
    public function deletePCComment ($line) {
        $handle = fopen("classes/Database/containerPancakes.html", "a");
        fwrite($handle, $line);
        fclose($handle);
    }
    
    public function addPCComment($name, $comment) {
        $handle = fopen("classes/Database/containerPancakes.html", "a");
        $t=time();
        fwrite($handle, "<b>". $name ." ".gmdate("Y-m-d",$t)."</b>:<br>".$comment."<p hidden>".time().",". $name ."</p><br><br>"."\n");
        fclose($handle);
    }

    public function getUserContainer() {
        $loginData = file('classes/Database/users.txt');
        
        return $loginData;
    }
    
    public function insertNewUser($uname, $psw) {
        $handle = fopen("classes/Database/users.txt", "a");
        fwrite($handle,"\n".$uname.','.$psw);
        fclose($handle); 
    }
}
