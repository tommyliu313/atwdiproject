<?php
$apimethod = array("get","post","put","delete");
echo "Give an API method:";
$requestapimethod = trim(fgets(STDIN,1024));
$url = "localhost";
if($requestapimethod == $apimethod[0]){
    $obj = (object)$apimethod[0];
    echo $url . http_build_query($obj);
}elseif($requestapimethod == $apimethod[1]){
    $obj = (object)$apimethod[1];
    echo $url . http_build_query($obj);
}elseif($requestapimethod == $apimethod[2]){
    $obj = (object)$apimethod[2];
    echo $url . http_build_query($obj);
}elseif($requestapimethod == $apimethod[3]){
    $obj = (object)$apimethod[3];
    echo $url . http_build_query($obj);
}

?>