<?php
  include_once('database/data/dbsetting.php');
  class publicmarketservice{

    # description: retrieve the record
    
    function getapi($params){


      echo "Using PUT Method";

      $d->connection;
      $sql = "SELECT FROM WHERE";

      #when the success code is 200, response as:

      if(state == "200"){
        echo "You have successfully retrieve the information";
      }
      else{
        echo "Failed to retrieve";
      }

      #check whether:
      #if parameter is missed
      if()


      #if parameter is missed

      #if parameter is missed
      

    }
    # description: pass the record

    function postapi($params){
      
    #query the database

    $sql = "INSERT INTO VALUES()";

    while($){

    }
    #if the relative record has already exist, response as:

    #if some parameters are missing, response as:
    

    #when the success code is 200, response as:
    if(state == "200"){
      echo "You have successfully submit the information";
    }
    else{
      echo "Submission Failure";  
    }
    
    }

    # description: delete the record
    function deleteapi($params){

    
    $sql = "DELETE FROM table WHERE ";

      if(!is)
      
    }

    #description: update the record
    function putapi($params) {

    #query the database and insert the record
    
    #sql
    $sql = "UPDATE FROM WHERE  ";

    #when the success code is 200, response as:
      if(state == "200"){
       echo "You have successfully update the information"; }
      else {
       echo "Failed to Update";
     }

     #error code response
    }

}
?>
