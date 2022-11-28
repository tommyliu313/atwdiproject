<?php

    $servername = 'localhost';
	$databaseuser = 'root';
	$datapassword = '';
	$databasename = 'market';
	$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);	

	if($connection->connect_error){
		die("Connection Failure. Please edit the php script. \n" . $connection->connect_error);
	}
	else{
		//echo "Connection Established.";
	}
?>
