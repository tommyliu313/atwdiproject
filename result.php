<?php
    if($_SERVER['REQUEST_METHOD'] ){
        var_dump($_POST);
        echo "<br>";
        var_dump(file_get_contents("php://input"));
    }
    print_r($_POST);
?>