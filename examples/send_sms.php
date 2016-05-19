<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send an SMS to one mobile phone number
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');
$return = $message->sendSMS('INSERT_MOBILE_HERE','INSERT_CONTENT_HERE');

//Handle the Return
var_dump($return);