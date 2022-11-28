<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST['district'])){
        $district_error = "You haven't input this value";
    }
    if(empty($_POST['region'])){
        $_error = "";
    }
    if(empty($_POST['marketname'])){
        $_error = "";
    }
    if(empty($_POST['address'])){
        $_error = "";
    }
    if(empty($_POST['tel1'])){
        $_error = "";
    }
    if(empty($_POST['tel2'])){
        $_error = "";
    }
    if(empty($_POST['maploc'])){
        $_error = "";
    }
    if(empty($_POST['tenancytype'])){
        $_error = "";
    }
    if(empty($_POST['openinghours'])){
        $_error = "";
    }
    if(empty($_POST['stallno'])){
        $_error = "";
    }

    if(is_null($district)){
        
    }
    }
?>