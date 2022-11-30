<?php
class urlprocess{
    private $pinfo;
    private $spliturl;

    function errorResponse($status,$code,$message){
        header("application/json");
        http_response_code($status);
        $error = array();
        $error['status'] = 'error';
        $error['code'] =  $code;
        $error['message'] = $message;
        echo json_encode($error);
    }

    function __construct(){
        if(!isset($_SERVER['PATH_INFO'])){
            echo 'Usage: index.php/{resource name}';
            exit;
        }
        $this->pinfo = $_SERVER['PATH_INFO'];
        $this->spliturl = explode('/', $this->pinfo);

        array_shift($this->spliturl);
        //print_r($this->spliturl);

        $resourceName = array_shift($this->spliturl);
        //echo '<br>'.'ResourceName: '. $resourceName . '<br>';

        $serviceName = $resourceName;
        $serviceName .= 'service';
        $serviceName = lcfirst($serviceName);
        //echo '<br>'.'ServiceName: '. $serviceName . '<br>';

        $servicefile = $serviceName.".php";
        //echo "servicefile: " . $servicefile;

        if(!file_exists($servicefile)){
            $this->errorResponse("404","1990", "Invalid Input");

            exit;
        }else{
            require_once $servicefile;
            $provider = new $serviceName;

            $method = "restservice".$_SERVER['REQUEST_METHOD'];
            $provider->$method($this->spliturl);
        }

    }

}

$urlprocess = new urlprocess();

?>