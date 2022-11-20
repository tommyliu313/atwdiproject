<?php
	require_once('dbsetting.php');
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

		$Region_e = $value['Region_e'];
		$District_e = $value['District_e'];
		$Address_e = $value['Address_e'];
		$Market_e = $value['Market_e'];
		$Contact_1 = $value['Contact_1'];
		$Contact_2 = $value['Contact_2'];
		$Coordinate = $value['Coordinate'];
		$Business_Hours_e = $value['Business_Hours_e'];
		$Tenancy_Commodity_e = $value['Tenancy_Commodity_e'];
		$nos_stall = $value['nos_stall'];

		$Address_e = str_replace("'"," ",$Address_e);
		$District_e = str_replace("/"," ",$District_e);
		
		

		$sql = "INSERT INTO market (
			`regionname`,
			`districtname`,
			`address` ,
			`marketname` ,
			`contact1`,
			`contact2`,
			`coordinate`,
			`openinghour`,
			`tenancycomd`,
			`nosstall`
			) VALUES(
			'$Region_e',
			'$District_e',
			'$Address_e',
			'$Market_e',
			'$Contact_1',
			'$Contact_2',
			POINT($Coordinate),
			'$Business_Hours_e',
			'$Tenancy_Commodity_e',
			'$nos_stall'
			) ";

		
		if(mysqli_query($connection,$sql)){
			echo nl2br('Insert Record to Database Successfully \r\n');
		}
		else{
			echo 'Fail to Insert Record to Database. Please modify the php script';
		}
	}




	

	
?>