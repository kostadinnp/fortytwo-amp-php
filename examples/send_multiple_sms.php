<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send SMS to Multiple Phone Numbers
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');
$arrayNumbers = array('INSERT_MOBILE_HERE','INSERT_MOBILE_HERE');
$return = $message->sendMultipleSMS($arrayNumbers,'INSERT_CONTENT_HERE');

//Handle the Return
var_dump($return);