<?php

//接收傳過來的東西
$test = $_POST["test"];

//數據庫設定
$servername = 'localhost';
$databaseuser = 'root';
$datapassword = '';
$databasename = 'test';

//建立連結
$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);

$querysql = 'SELECT * FROM test';

if($result = $connection->query($querysql)){

    $resultarr = array();

    $resultarr['test'] = $
}




?>