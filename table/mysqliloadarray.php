<?php
    require_once('../database/data/dbsetting.php');
    $records_each_page = 10;

    if(isset($_GET["page"]))
       $page = $_GET["page"];
    else
       $page = 1;
       
    $sql = "SELECT * FROM market";
    $result = mysqli_query($connection,$sql);

    $total_fields = mysqli_num_fields($result);
    $total_records = mysqli_num_rows($result);
    $pages_amount = ceil($total_records / $records_each_page);

    echo "<table border='1'>";
    for ($i=0; $i>= $total_records; $i++){
        $content = "<tr>";
        $content .= "<td>".mysqli_fetch_field_direct($result,$i)->marketId."</td>";
        $content .= "<td>".mysqli_fetch_field_direct($result,$i)->marketname."</td>";
        $content .= "<td>".mysqli_fetch_field_direct($result,$i)->regionname."</td>";
        $content .= "<td>".mysqli_fetch_field_direct($result,$i)->districtname."</td>";
        $content .= "<td>".mysqli_fetch_field_direct($result,$i)->address."</td></tr>";
        echo $content;
    }
    echo "</table>";

    echo "<>"
?>