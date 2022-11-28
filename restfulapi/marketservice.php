<?php

class marketservice{

    function errorResponse($status,$code,$message){
        header("application/json");
        http_response_code($status);
        $error = array();
        $error['status'] = 'error';
        $error['code'] =  $code;
        $error['message'] = $message;
        echo json_encode($error);
    }

    function successResponse(){
        http_response_code(200);
        $success = array();
        $success['status'] = 'success';
        $success['code'] = 2000;
        $success['message'] = "Your action has been successfully accomplished.";
        echo json_encode($success);
    }
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

        //Tackle the empty value or number value        
        if(is_null($genre) || is_numeric($genre)){
            $this->errorResponse("404","1990", "Invalid Input");
        }
        //Search the market by marketname
        if($genre ==='marketname'){
 
            $marketname = array_shift($param);
            if(!isset($marketname) || is_numeric($marketname)){
                $this-> errorResponse("404","1991","Missing Parameter");
            }
            else{
                $sql = "SELECT * FROM market WHERE marketname = '$marketname'";
           //Start the query
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
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
                    
                    $outcome[] = $content;
                
                }               
            }
            catch(exception $e){
                $this-> errorResponse("404","1993","Error Occur after querying the database.");
            }
            finally{
                $return[] = array($this->successResponse());
                echo json_encode(array_merge($return,$outcome));
            }
        }
    }   

        //Search the market by district
        if($genre === 'district'){
            $district = array_shift($param);
            if(!isset($district) ||! is_string($district)){
                $this-> errorResponse("404","1991","Missing Parameter");
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
                    $outcome[] = $content;
                   
                }
                 echo json_encode($outcome);
                    
            }
            //Error Handling
            catch(Exception $e){
                $this-> errorResponse("404","1993","Error Occur after querying the database.");
            }

        }
        if(empty($genre)){
            $this-> errorResponse("404","1990","Invalid Input");
        } 
 
}       
        //Search the market by region
        if($genre === 'region'){
            $region = array_shift($param);
            if(!isset($region)){
                $this-> errorResponse("404","1991","Missing Parameter");
            }
            else{
                $sql = "SELECT * FROM market WHERE regionname = '$region'";
           
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_assoc($result)){
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
                    $outcome[] = $content;
                    
                }   echo json_encode($outcome);
                    
                   
            }
            //Error Handling
            catch(Exception $e){
                $this-> errorResponse("404","1993","Error Occur after querying the database.");
            }

        }
        if(empty($genre)){
            $this-> errorResponse("404","1990","Invalid Input");
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
        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);

        if(is_null($genre) || is_numeric($genre)){
            $this->errorResponse("404","1990", "Invalid Input");
        }
    
        //Search the market by record
        if($genre ==='deleterecord'){

            if(!isset($record) || is_null($record)){
                $this-> errorResponse("404","1991","Missing Parameter");
            }
            else{
                
                $sql = "DELETE FROM market WHERE marketId = '$record'";
       
            try{
                $result = $connection->query($sql);
                while($row = mysqli_fetch_object($result)){
                    $this-> successResponse();
                }   
            }
            catch(Exception $e){
                http_response_code(404);
                $output['status'] = 'error';
                $output['code'] = '1993';
                $output['message'] = 'Error Occur after querying the database.';
                echo json_encode($output);
            }}
}   




    }

    // PUT:
    // JUST UPDATE A VALUE OF A COLUMN FROM A Record
    function restservicePUT($param){
        echo "restservicePUT is triggered";
        echo "<br>";
        echo "You have reached the service";

        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_push($param);
    
        if($genre ==='updaterecord'){

            $updaterecord = array_shift($param);
            
            if(!isset($marketId) && !is_numeric($marketId)){
                http_response_code(400);
                $output = array();
                $output['status'] = 'error';
                $output['code'] = '1990';
                $output['message'] ='missing parameter';
                echo json_encode($output);
            }
            else{

                $sql = "INSERT districtname, regionname,  FROM market WHERE marketId = '$marketId'";
       
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
                echo json_encode($output);
            }}
}   
}       


        
    // POST:
    // MISSION:
    // CREATE A NEW MARKET RECORDS
    // CREATE A NEW TENANCY FROM THE EXISTING/ NEW RECORDS
    function restservicePOST($param){
        //echo "restservicePOST is triggered";
        //echo "<br>";
        //echo "You have reached the service";
        
        //var_dump($_POST);
        //echo "<br>";
        //var_dump(file_get_contents("php://input"));

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);
        
        //Validate if the user has inputted the number or blank after the "market"
	    if(is_null($genre) || is_bool($genre)){
            $this->errorResponse("404","1990", "Invalid Input.");
        }
        
    
        //Search the market by MarketID
        if($genre ==='newrecord'){
            $district = $_POST['district'];
            $region = $_POST['region'];
            $marketname = $_POST['marketname'];
            $address = $_POST['address'];
            $contact1 = $_POST['tel1'];
            $contact2 = $_POST['tel2'];
            $coordinates = $_POST['maploc'];
            $tenancy = $_POST['tenancytype'];
            $openinghours = $_POST['openinghours'];
            $stallnumber = $_POST['stallno'];            

            //echo $district.'<br>';
            //echo $region.'<br>';
            //echo $marketname.'<br>';
            $sql = "INSERT INTO market (
                   districtname, regionname, marketname,marketaddress,contact1,contact2,
                   tenancycomd,openinghour,nosstall, coordinate
             )                
              VALUES('$district','$region','$marketname','$address','$contact1','$contact2',
               '$tenancy','$openinghours','$stallnumber','$coordinates')";
            $result = $connection->query($sql);
          
            if($result){
                $this->successResponse();
            }else{
            $this->errorResponse("404","1992","Not Found");
        }    }

        /* while($row = mysqli_fetch_object($result)){

        }  */     
   
    }
   
}
?>

