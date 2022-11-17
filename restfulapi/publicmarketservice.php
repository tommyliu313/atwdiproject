<?php

class publicmarketservice{

    function serviceget($param){

        require_once 'database.php';

        $split= array_shift($param);
        if($split ==='market'){
            $districtID = array_shift($parameters);
            $sql = "SELECT * FROM market WHERE districtID = '$districtID'";
            $dbResult = $conn->query($sql);

            if($dbresult){

            }else{
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '2001';
                $output['message'] = 'SQL execution failure';
            }


        }elseif($apiType ==='maptype'){

        }elseif($apiType === 'openhour'){

        }
    }


}
?>

function apiarray($)