<!DOCTYPE html>


<?php
	include_once("dbsetting.php");
	header('Content-Type: text/plain; charset=utf-8');
#引入xml資源
	$data = file_get_contents('https://www.fehd.gov.hk/english/pleasant_environment/tidy_market/marketInfo.xml');
#轉化為object
	$dataobject = simplexml_load_string($data);

#$utf8data = utf8_decode($data);
#echo $utf8data;
#json序列化
	$jsonencodeddata = json_encode($dataobject);

#另存json檔案
#$json = file_put_contents("data.json",$jsonencodeddata);

#載入json資訊到空序列
	$array = array();
	function assignvalue(){
		$array['Region_e'] = $
		$array['Region_c'] = $
		$array['District_e'] = $
		$array['District_c'] = $
		$array['Market_e'] = $
		$array['Market_c'] = $
		$array['Address_e'] = $
		$array['Address_c'] = $
		$array['Business_Hours_e'] = $
		$array['Business_Hours_c'] = $
		$array['Tenancy_Commodity_e'] = $
		$array['Tenancy_Commodity_c'] = $
	}



	print_r(array_map('assignvalue', $json))

#載入序列到數據庫

#資料庫
#SQL查詢語句


	#for (){
	#}

?>
<!---Reference:https://www.geeksforgeeks.org/how-to-convert-xml-data-into-json-using-php/
https://blog.csdn.net/m0_38099607/article/details/70306034?spm=1001.2101.3001.6650.4&utm_medium=distribute.pc_relevant.none-task-blog-2%7Edefault%7EOPENSEARCH%7ERate-4-70306034-blog-105249838.pc_relevant_default&depth_1-utm_source=distribute.pc_relevant.none-task-blog-2%7Edefault%7EOPENSEARCH%7ERate-4-70306034-blog-105249838.pc_relevant_default&utm_relevant_index=5
-->
