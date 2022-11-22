<?php

class marketservice{
    // GET
    // MISSION:
    // RETRIEVE A 

    function restserviceGET($param){
        //echo "restserviceGET is triggered";
        //echo "<br>";
        //echo "You have reached the service";

       // print_r($param);
 
        require_once '../database/data/dbsetting.php';
 
        $genre = array_shift($param);
        
        //Search the market by marketname
        if($genre ==='marketname'){
 
            $marketname = array_shift($param);
            if(!isset($marketname) && !is_numeric($marketname)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "SELECT * FROM market WHERE marketname = '$marketname'";
           
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    http_response_code(200);
                    $content = array();
                    $content['marketId'] = $row->marketId;
                    $content['marketname'] = $row->marketname;    
                    $content['districtname'] = $row->districtname;
                    $content['regionname'] = $row->regionname;
                    $content['marketaddress']=$row->marketaddress;
                    $content['contact']['contact1']=$row->contact1;
                    $content['contact']['contact2']= $row->contact2;
                    $content['openinghour']=$row->openinghour;
                    $content['coordinate']=$row->coordinate;
                    $content['tenancycomd']=$row->tenancycomd;
                    $content['nosstall']=$row->nosstall;
                    $content['coordinate']=$row->coordinate;
                    echo json_encode($content);
                }
                
            }
            catch(Exception $e){
                var_dump(http_response_code(404));
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1991';
                $output['message'] = 'Not Found';
                echo json_encode($output);
            }}
    }   

        //Search the market by district
        if($genre === 'district'){
            $district = array_shift($param);
            if(!isset($district)){
                http_response_code(400);
                $error = array();
                http_response_code(404);
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "SELECT DISTINCT marketId, districtname,regionname, marketname, coordinate, marketaddress, contact1, contact2, openinghour,
                 tenancycomd, nosstall, coordinate FROM market WHERE districtname = '$district'";
           
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_assoc($result)){
                    http_response_code(200);
                    $content = array();
                    $content['marketId'] = $row['marketId'];
                    $content['marketname'] = $row['marketname'];
                    $content['regionname'] = $row['regionname'];
                    $content['districtname'] = $row['districtname'];
                    $content['marketaddress']=$row['marketaddress'];
                    $content['contact']['contact1']=$row['contact1'];
                    $content['contact']['contact2']= $row['contact2'];
                    $content['openinghour']=$row['openinghour'];
                    $content['coordinate']=$row['coordinate'];
                    $content['tenancycomd']=$row['tenancycomd'];
                    $content['nosstall']=$row['nosstall'];
                    $content['coordinate']=$row['coordinate'];
                    $output[] = $content;
                    
                }
                echo json_encode($output);
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
    // DELETE
    // MISSION:
    // DELETE A MARKET RECORD (ALL)
    // DELETE A TENANCY FROM A RECORD
    function restserviceDELETE($param){
        echo "restserviceDELETE is triggered";
        echo "<br>";
        echo "You have reached the service";
        echo $param;

        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);
    
        //Search the market by MarketID
        if($genre ==='marketname'){

            $marketname = array_shift($param);
            
            if(!isset($marketname) && !is_string($marketname)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $sql = "DELETE * FROM market WHERE marketname = '$marketname'";
       
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    http_response_code(200);
                    $content = array();
                    $content = "You have deleted";
                    $content['marketname'] = $row->marketname;
                    $content .= "record";
                }   
                echo json_encode($content);
            }
            catch(Exception $e){
                var_dump(http_response_code(404));
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1991';
                $output['message'] = 'tedt';
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

    // PUT:
    // JUST UPDATE A VALUE OF A COLUMN FROM A Record
    /*function restservicePUT($param){
        echo "restservicePUT is triggered";
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



    }*/
    
    // POST:
    // MISSION:
    // CREATE A NEW MARKET RECORDS
    // CREATE A NEW TENANCY FROM THE EXISTING/ NEW RECORDS
    /*function restservicePOST($param){
        echo "restservicePOST is triggered";
        echo "<br>";
        echo "You have reached the service";

        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);
    
        //Search the market by MarketID
        if($genre ==='marketname'){

            $marketname = array_shift($param);
            
            if(!isset($marketId) && !is_numeric($marketId)){
                http_response_code(400);
                $error = array();
                $error['code'] = '1990';
                $error['message'] ='missing parameter';
                echo json_encode($error);
            }
            else{
                $district
                }
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
            $sql = " FROM market WHERE districtname = '$district'";
       
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



    }*/

}
?>

