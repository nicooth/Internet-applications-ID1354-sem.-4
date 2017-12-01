<?php

/* 
 * Shows the meatballs recipe view.
 */

use classes\Controller\Controller;
require_once 'resources/fragments/init.php';

$contr = Controller::getController();

if(empty($contr)) {
    $contr = Controller::createController();
    $contr->saveController($contr);
}

include 'resources/views/meatballs.php';