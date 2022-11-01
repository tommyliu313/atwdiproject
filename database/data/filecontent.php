<!DOCTYPE html>


<?php
#數據庫
    $servername = 'localhost';
	$databaseuser = 'root';
	$datapassword = '';
	$databasename = 'testing';
#建立連結
	$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);	
#針對connection失誤建立行動
	if($connection->connect_error){
		die("Connection Failure. Please edit the php script. \n" . $connection->connect_error);
	}
	else{
		echo "Connection Established.";
	}

#引入xml資源
	$data = file_get_contents('https://www.fehd.gov.hk/english/pleasant_environment/tidy_market/marketInfo.xml');
#轉化為object
	$dataobject = simplexml_load_string($data);

#$utf8data = utf8_decode($data);
#echo $utf8data;
#json序列化

	$jsonencodeddata = json_encode($dataobject);


#另存json檔案
	$json = file_put_contents("data.json",$jsonencodeddata);

	$decodejson = json_decode($jsonencodeddata,TRUE);
	
	$array = $decodejson['Market'];

	#把$array的每一個項目逐一當成Value看待
	#$sql 
	foreach($array as $value){
		$sql = "INSERT INTO `testing` (
			`Region_e`,
			`Region_c`,
			`District_e` ,
			`District_c` ,
			`Market_e` ,
			`Market_c` ,
			`Address_e` ,
			`Address_c`,
			`Business_Hours_e`,
			`Business_Hours_c`,
			`Tenancy_Commodity_e`,
			`Tenancy_Commodity_c`,
			`nos_stall`
			) VALUES(
			'".$value['Region_e']."',
			'".$value['Region_c']."',
			'".$value['District_e' ]."',
			'".$value['District_c' ]."',
			'".$value['Market_e' ]."',
			'".$value['Market_c' ]."',
			'".$value['Address_e' ]."',
			'".$value['Address_c']."',
			'".$value['Business_Hours_e']."',
			'".$value['Business_Hours_c']."',
			'".$value['Tenancy_Commodity_e']."',
			'".$value['Tenancy_Commodity_c']."',
			'".$value['nos_stall']."'
			) ";
		
		if(mysqli_query($connection,$sql)){
			echo 'Insert Record to Database Successfully \n';
		}
		else{
			echo 'Fail to Insert Record to Database. Please modify the php script';
		}
	}

#載入json資訊到空序列


	
#for (){
	#}

	
?>