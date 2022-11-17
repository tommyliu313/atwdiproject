<?php
#數據庫
    $servername = 'localhost';
	$databaseuser = 'root';
	$datapassword = '';
	$databasename = 'market';
#建立連結
	$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);	
#針對connection失誤建立行動
	if($connection->connect_error){
		die("Connection Failure. Please edit the php script. \n" . $connection->connect_error);
	}
	else{
		echo "Connection Established.";
	}
?>
