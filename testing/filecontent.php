<?php
$data = file_get_contents('https://www.fehd.gov.hk/english/pleasant_environment/tidy_market/marketInfo.xml');
$dataobject = simplexml_load_string($data);
echo json_encode($dataobject);
?>
<!---Reference:https://www.geeksforgeeks.org/how-to-convert-xml-data-into-json-using-php/->