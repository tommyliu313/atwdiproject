<!DOCTYPE html>


<?php
#database
    $servername = 'localhost';
	$databaseuser = 'root';
	$datapassword = '';
	$databasename = 'testing';

	$connection = new mysqli($servername, $databaseuser, $datapassword, $databasename);	
#引入xml資源
	$data = file_get_contents('https://www.fehd.gov.hk/english/pleasant_environment/tidy_market/marketInfo.xml');
#轉化為object
	$dataobject = simplexml_load_file($data);

#$utf8data = utf8_decode($data);
#echo $utf8data;
#json序列化

	$jsonencodeddata = json_encode($dataobject);


#另存json檔案
	$json = file_put_contents("data.json",$jsonencodeddata);

	$decodejson = json_decode($jsonencodeddata,TRUE);
	
	$listitem = $decodejson['map'];

#載入json資訊到空序列

	foreach($listitem as $things){

		print_r($things);

		$Region_e = $things['Region_e'];
		$Region_c = $things['Region_c'];
		$District_e  = $things['District_e'];
		$District_c  = $things['District_c'];
		$Market_e  = $things['Market_e'];
		$Market_c  = $things['Market_c'];
		$Address_e  = $things['Address_e'];
		$Address_c  = $things['Address_c'];
		$Business_Hours_e  = $things['Business_Hours_e'];
		$Business_Hours_c  = $things['Business_Hours_c'];
		$Tenancy_Commodity_e  = $things['Tenancy_Commodity_e'];
		$Tenancy_Commodity_c = $things['Tenancy_Commodity_c'];
		$nos_stall  = $things['nos_stall'];

	}
	
	
	


#載入序列到數據庫

#資料庫

#SQL查詢語句

#插入命令


	#for (){
	#}

	
?>