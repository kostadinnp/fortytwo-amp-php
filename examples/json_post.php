<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

#Send a JSON Object to REST API Server
#Check Documentation on how to generate a JSON Object
require_once('../src/fortytwo/FortytwoMessage.php');
$messageObject = new FortytwoMessage('INSERT_TOKEN_HERE');
$return = $messageObject->postData('{
    "destinations": [
        {
            "number": "INSERT_MOBILE_NUMBER"
        }
    ],
    "sms_content": {
        "message": "INSERT_SMS_CONTENT",
        "sender_id": "INSERT_SENDER_ID"
    }
}');

//Handle the Return
var_dump($return);