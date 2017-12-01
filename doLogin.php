<?php

/* 
 * Shows the login view.
 */

use classes\Controller\Controller;
require_once 'resources/fragments/init.php';

$contr = Controller::getController();

if(!empty($contr))
    session_destroy();

include 'resources/views/login.php';
