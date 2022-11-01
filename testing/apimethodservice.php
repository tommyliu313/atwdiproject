<?php
  class apimethodservice{

    function getapi(){
    $ = html_entries
      if(state="200"){
        echo "You have successfully retrieve the information";
      }
      else{
        echo "Failed to retrieve";
      }

  }

    function postapi(){
      if(state="200"){
        echo "You have successfully submit the information";
      }
      else{
        echo "Submission Failure";  
    }
    
    }
    function deleteapi(){
      if(state="200"){
        echo "You have successfully delete the information";
      }
      else{
        echo "Failed to Delete";
      }
    }
    function putapi(){
     if(state="200"){
       echo "You have successfully update the information"; }
     else {
       echo "Failed to Update";
     }
    }
?>
