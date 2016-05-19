<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send an Instant Message or SMS to multiple destinations
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');
$arrayNumbers = array('INSERT_MOBILE_HERE','INSERT_MOBILE_HERE');
$return = $message->sendMultipleInstantMessageOrSMS($arrayNumbers,'INSERT_IM_CONTENT_HERE','INSERT_SMS_CONTENT_HERE');

//Handle the Return
var_dump($return);