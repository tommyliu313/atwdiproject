<?php

$test = $_POST["test"];

$servername = 'localhost';
$databaseuser = 'root';
$datapassword = '';
$databasename = 'test';

$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);

$querysql = 'SELECT * FROM test';

if($result = $connection->query($querysql)){

    $resultarr = array();
    
}




?>