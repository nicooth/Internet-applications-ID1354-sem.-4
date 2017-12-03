<?php

/* 
 * This code must be executed before a HTTP request can be handled.
 */

use classes\Util\Startup;

require_once 'classes/Util/Startup.php';
Startup::initRequest();