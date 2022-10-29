<?php
header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json; charset=utf-8');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

    $slackusername = "Blaze";
    $backend = "true";
    $age = "31";
    $bio = "backend developer";


settype($slackusername, "string");
settype($backend, "boolean");
settype($age, "integer");
settype($bio, "string");


$myArr = array("slackUsername" => $slackusername, "backend" => $backend, "age" => $age, "bio"=> $bio);


$myJSON = json_encode($myArr, JSON_FORCE_OBJECT);

echo $myJSON;
?>
