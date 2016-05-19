<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send Complex Instant Message or SMS (taking LOW_COST as a message plan)
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');

#Add multiple Destinations - Start
$destination1 = new Destination('INSERT_MOBILE_HERE');
$destination2 = new Destination('INSERT_MOBILE_HERE');
$destinationArray = array($destination1,$destination2);
#Add multiple Destinations - End

$imContent = new IMContent('INSERT_IM_CONTENT');

$SMSContent = new SMSContent('INSERT_SMS_CONTENT');
$SMSContent->setSenderId('INSERT_SENDER_ID');

$return = $message->sendComplexInstantMessageOrSMS($destinationArray,$imContent,$SMSContent,true);

//Handle the Return
var_dump($return);