<?php

class publicmarketservice{

    function serviceget($param){

        require_once 'database.php';

        $split = array_shift($param);
        if($split ==='marketid'){
            $districtID = array_shift($parameters);
            $sql = "SELECT * FROM market WHERE marketID = '$marketID'";
            $dbResult = $conn->query($sql);

            if($dbresult){

            }else{
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '2001';
                $output['message'] = 'SQL execution failure';
            }
        if($split === ''){
        }
    }


}
?>

function apiarray($)