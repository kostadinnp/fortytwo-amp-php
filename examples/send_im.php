<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);



#Send IM Message to one Phone Number
require_once('../src/fortytwo/FortytwoMessage.php');

$message = new FortytwoMessage('INSERT_TOKEN_HERE');
$return = $message->sendIM('INSERT_MOBILE_HERE','INSERT_CONTENT_HERE');

//Handle the Return
var_dump($return);