<?php

class marketservice{
    
    function restserviceGET($param){
        echo "restGET function is called";
        echo "<br>";
        echo "You have reached the service";

        print_r($param);
 
        require_once '../database/data/dbsetting.php';
 
        $genre = array_shift($param);
        
        //Search the market by MarketID
        if($genre ==='marketId'){
 
            $marketId = array_shift($param);
            if(!isset($marketId) && !is_numeric($marketId)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "SELECT * FROM market WHERE marketId = '$marketId'";
           
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    http_response_code(200);
                    $content = array();
                    $content['marketId'] = $row->marketId;
                    $content['marketname'] = $row->marketname;
                    $content['regionname'] = $row->regionname;
                    $content['districtname'] = $row->districtname;
                    $content['marketaddress']=$row->marketaddress;
                    $content['contact']['contact1']=$row->contact1;
                    $content['contact']['contact2']= $row->contact2;
                    $content['openinghour']=$row->openinghour;
                    $content['coordinate']=$row->coordinate;
                    $content['tenancycomd']=$row->tenancycomd;
                    $content['nosstall']=$row->nosstall;
                    $content['coordinate']=$row->coordinate;
                }
                echo json_encode($content);
            }
            catch(Exception $e){
                var_dump(http_response_code(404));
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1991';
                $output['message'] = 'SQL execution failure';
            }}
    }   

        //Search the market by district
        if($genre === 'district'){
            $district = array_shift($param);
            if(!isset($district)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "SELECT DISTINCT districtname, marketname, coordinate, marketaddress FROM market WHERE districtname = '$district'";
           
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    http_response_code(200);
                    $content = array();
                    $content['districtname'] = $row->districtname;
                    $content['coordinate']=$row->coordinate;
                    $content['marketname'] = $row->marketname;
                    $content['marketaddress']=$row->marketaddress;
                    echo json_encode($content);
                }
                
            }
            //Error Handling
            catch(Exception $e){
                var_dump(http_response_code(404));
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1991';
                $output['message'] = 'SQL execution failure';
            }

        }
        if(empty($genre)){
            http_response_code(424);
            $error = array();
            $error['code'] = "1990";
            $error["message"] = "Invalid Input";
            echo json_encode($error);
        }
 
 
}       
    if($genre === 'district'){

        $district = array_shift($param);

        if(!isset($district)){
            http_response_code(400);
            $error = array();
            $error['code'] = '1990';
            $error['message'] ='missing parameter';
            echo json_encode($error);
        }
        else{
            $sql = "SELECT DISTINCT districtname, marketname FROM market WHERE districtname = '$district'";
        
        try{
            $result = $connection->query($sql);

            while($row = mysqli_fetch_object($result)){
                http_response_code(200);
                $content = array();
                $content['districtname'] = $row->districtname;
                $content['marketname'] = $row->marketname;
                echo json_encode($content);
            }

        }
        //Error Handling
        catch(Exception $e){

            var_dump(http_response_code(404));
            $output = array();
            $output['status'] = 'error';
            $output['code'] = '1991';
            $output['message'] = 'SQL execution failure';
        }

    }
    if(empty($genre)){

        http_response_code(424);
        $error = array();
        $error['code'] = "1990";
        $error["message"] = "Invalid Input";
        echo json_encode($error);
    }


}



}
    function restserviceDELETE($param){
        echo "restGET function is called";
        echo "<br>";
        echo "You have reached the service";

        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);
    
        //Search the market by MarketID
        if($genre ==='marketId'){

            $marketId = array_shift($param);
            
            if(!isset($marketId) && !is_numeric($marketId)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "SELECT * FROM market WHERE marketId = '$marketId'";
       
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    http_response_code(200);
                    $content = array();
                    $content['marketId'] = $row->marketId;
                    $content['marketname'] = $row->marketname;
                    $content['regionname'] = $row->regionname;
                    $content['districtname'] = $row->districtname;
                    $content['address']=$row->address;
                    $content['contact']['contact1']= $row->contact1;
                    $content['contact']['contact2']= $row->contact2;
                    $content['openinghour']=$row->openinghour;
                    $content['tenancycomd']=$row->tenancycomd;
                    $content['nosstall']=$row->nosstall;
                }   
                echo json_encode($content);
            }
            catch(Exception $e){
                var_dump(http_response_code(404));
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1991';
                $output['message'] = 'SQL execution failure';
            }}
}   

    //Search the market by district
    if($genre === 'district'){

        $district = array_shift($param);

        if(!isset($district)){
            http_response_code(400);
            $error = array();
            $error['code'] = '1990';
            $error['message'] ='missing parameter';
            echo json_encode($error);
        }
        else{
            $sql = "SELECT DISTINCT districtname, marketname FROM market WHERE districtname = '$district'";
       
        try{
            $result = $connection->query($sql);
            while($row = mysqli_fetch_object($result)){
                http_response_code(200);
                $content = array();
                $content['districtname'] = $row->districtname;
                $content['marketname'] = $row->marketname;
                echo json_encode($content);
            }
            
        }
        //Error Handling
        catch(Exception $e){
            var_dump(http_response_code(404));
            $output = array();
            $output['status'] = 'error';
            $output['code'] = '1991';
            $output['message'] = 'SQL execution failure';
        }

    }
    if(empty($genre)){
        http_response_code(424);
        $error = array();
        $error['code'] = "1990";
        $error["message"] = "Invalid Input";
        echo json_encode($error);
    }


}       
    if($genre === 'district'){
        $district = array_shift($param);

    if(!isset($district)){
        http_response_code(400);
        $error = array();
        $error['code'] = '1990';
        $error['message'] ='missing parameter';
        echo json_encode($error);
    }
    else{
        $sql = "SELECT DISTINCT districtname, marketname FROM market WHERE districtname = '$district'";

    try{
        $result = $connection->query($sql);
        while($row = mysqli_fetch_object($result)){
            http_response_code(200);
            $content = array();
            $content['districtname'] = $row->districtname;
            $content['marketname'] = $row->marketname;
            echo json_encode($content);
        }

    }
    //Error Handling
    catch(Exception $e){
        var_dump(http_response_code(404));
        $output = array();
        $output['status'] = 'error';
        $output['code'] = '1991';
        $output['message'] = 'SQL execution failure';
    }

    }
    if(empty($genre)){
        http_response_code(424);
        $error = array();
        $error['code'] = "1990";
        $error["message"] = "Invalid Input";
        echo json_encode($error);
    }


}



    }

}
?>

