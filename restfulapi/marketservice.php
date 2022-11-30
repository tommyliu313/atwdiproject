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

        $errorlist = array();

        if(!is_numeric($genre) || is_null($genre)){
            array_push($errorlist,array($this->errorResponse("404","1990", "Invalid Input")));
            echo $errorlist;
        }
    
        //Search the market by record
        if($genre ==='deleterecord'){

            $number = array_shift($param);

            if(is_null($number) || !is_numeric($number)){
                $this-> errorResponse("404","1991","Missing Parameter");
            }
            else{
                
                $sql = "DELETE FROM market WHERE marketId = $number";
       
           
                $result = $connection->query($sql);
                if($result){
                    $this-> successResponse();
                }else{
                    $this-> errorResponse("404","1993","Error Occur after querying the database. Maybe You have already deleted the record");
                }
            }}
            }   

    // PUT:
    // JUST UPDATE A VALUE OF A COLUMN FROM A Record
    function restservicePUT($param){
        //echo "restservicePUT is triggered";
        //echo "<br>";
        //echo "You have reached the service";

        print_r($param);

        require_once '../database/data/dbsetting.php';

        $genre = array_shift($param);

        if(is_null($genre)){
            $this->errorResponse("404","1991", "Missing Parameter");
        }
    
        if($genre ==='updaterecord'){

            $updaterecord = array_shift($param);
            if(!isset($updaterecord) || !is_numeric($updaterecord)){
               $this->errorResponse("404","1990","Missing Parameter");
            }
            else{
                $columnname= array_shift($param);
                if(!isset($column) || !is_numeric($columnname)){
                    $this->errorResponse("404","1990","Missing Parameter");
                }
                else{
                    $newvalue= array_shift($param);
                    if(!isset($newvalue) || !is_numeric($newvalue)){
                        $this->errorResponse("404","1990","Missing Parameter");
                    }else{
                        try{
                            $sql = "UPDATE market SET $columnname  = $newvalue WHERE marketId = $marketId ";
                        }catch(Exception $e){

                        }
                    }}
                    
                }
            }
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
        
    
        //Insert the market record by 
        if($genre ==='newrecord'){
            $district = $_POST['insertdistrict'];
            $region = $_POST['insertregion'];
            $marketname = $_POST['insertmarketname'];
            $address = $_POST['insertaddress'];
            $contact1 = $_POST['inserttel1'];
            $contact2 = $_POST['inserttel2'];
            $coordinates = $_POST['insertmaploc'];
            $tenancy = $_POST['inserttenancytype'];
            $openinghours = $_POST['insertopeninghours'];
            $stallnumber = $_POST['insertstallno'];            

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

