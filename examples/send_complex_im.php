<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send Complex IM
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');

$destination1 = new Destination('INSERT_MOBILE_NUMBER_1');
$destination2 = new Destination('INSERT_MOBILE_NUMBER_2');
$destinationArray = array($destination1,$destination2);

$imContent = new IMContent('INSERT_IM_CONTENT_HERE');

$return = $message->sendComplexIM($destinationArray,$imContent);

//Handle the Return
var_dump($return);