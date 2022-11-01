<?php
  class apimethodservice{

    # description: retrieve the record

    function getapi(){

      if(state == "200"){
        echo "You have successfully retrieve the information";
      }
      else{
        echo "Failed to retrieve";
      }

    }
    # description: pass the record

    function postapi(){

    #query the database

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
    function deleteapi(){
      if(state == "200"){
        echo "You have successfully delete the information";
      }
      else{
        echo "Failed to Delete";
      }
    }

    #description: update the record
    function putapi(){

    #query the database and insert the record


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
