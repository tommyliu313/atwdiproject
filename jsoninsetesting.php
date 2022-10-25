<?php

        $connect = mysqli_connect("localhost","root","", "testing");

        $filename = "data/data.json";

        $data = file_get_contents($filename);

        $array = json_decode($data, true);

        foreach($array as $row){
            $sql = "INSERT INTO "
        }


?>