<?php

header('Content-Type: application/json');

$message = array();

$recText = $_GET['text'];

if(is_numeric($recText)){
    $recText = $_GET['text'];
    if($recText % 2 == 0 && $_SERVER['REQUEST_METHOD'] == 'GET' && http_response_code(200)){
        $message["message"] ="It is an even number";
        echo json_encode($message);
        
    }
    elseif(!$recText % 2 == 0){
        $message["message"] ="It is an odd number";
        echo json_encode($message);
    }
}
else{
    var_dump(http_response_code(404));
    $message["errorstatus"] = "400";
    echo json_encode($message);
}
?>