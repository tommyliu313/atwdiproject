<?php

//接收傳過來的東西
$value1 = $_POST["marketid"];
$value2 = $_POST["telone"];
$value3 = $_POST["teltwo"];
$value4 = $_POST["marketname"];
$value5 = $_POST["test"];
$value6 = $_POST["test"];



//數據庫設定
$servername = 'localhost';
$databaseuser = 'root';
$datapassword = '';
$databasename = 'marketpublic';

//建立連結
$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);

$querysql = "INSERT INTO `marketinfodetail`(`marketid`, `timemod`, `telone`, `teltwo`, `marketname`, `districtid`) VALUES ('$value1','$value2','$value3','$value4','$value5','$value6')";

if($result = $connection->query($querysql)){

    $resultarr = array();

   while ($row = $dbresult->fetch_object()){
    $insrecord = array();


   }
}




?>

<!--https://stackoverflow.com/questions/9761239/parse-json-to-create-sql-insert-statements-in-php-->