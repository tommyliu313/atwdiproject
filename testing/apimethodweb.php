<?php
$apimethod = array("get","post","put","delete");
$url = "localhost";
echo $url . http_build_query($apimethod);
?>