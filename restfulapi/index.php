<?php
class urlprocess{
    private $pinfo;
    private $spliturl;

    function __construct(){
        if(!isset($_SERVER['PATH_INFO'])){
            echo 'Usage: index.php/{resource name}';
            exit;
        }
        $this->pinfo = $_SERVER['PATH_INFO'];
        $this->spliturl = explode('/', $this->pinfo);

        array_shift($this->spliturl);
        print_r($this->spliturl);

        $resourceName = array_shift($this->spliturl);
        echo '<br>'.'ResourceName: '. $resourceName . '<br>';

        $serviceName = $resourceName;
        $serviceName .= 'service';
        $serviceName = lcfirst($serviceName);
        echo '<br>'.'ServiceName: '. $serviceName . '<br>';

        $servicefile = $serviceName.".php";
        echo "servicefile: " . $servicefile;

        if(!file_exists($servicefile)){
            echo 'No such resource';
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