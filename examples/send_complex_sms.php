<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send Complex SMS
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');
$message->setTTL(500);

$destination1 = new Destination('INSERT_MOBILE_NUMBER_1');
$destination2 = new Destination('INSERT_MOBILE_NUMBER_2');
$destinationArray = array($destination1,$destination2);

$SMSContent = new SMSContent('INSERT_CONTENT_HERE');
$SMSContent->setSenderId('INSERT_SENDER_ID');

$return = $message->sendComplexSMS($destinationArray,$SMSContent);

//Handle the Return
var_dump($return);