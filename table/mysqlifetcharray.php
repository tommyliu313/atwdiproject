<?php
require_once('../database/data/dbsetting.php');
$sql = "SELECT * FROM market";
$result = mysqli_query($connection,$sql);
echo "<table border='1' >";
while($row = mysqli_fetch_object($result)){
    $content = "<tr>";
    $content .= "<td>$row->marketId</td>";
    $content .= "<td>$row->marketname</td>";
    $content .= "<td>$row->regionname</td>";
    $content .= "<td>$row->districtname</td>";
    $content .= "<td>$row->address</td></tr>";
    echo $content;
}
echo "</table>";
?>