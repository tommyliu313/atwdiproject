<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../static/css/bootstrap-5.2.1-dist/js/boostrap.min.js"></script>
</head>
<body>
<?php
    require_once('../database/data/dbsetting.php');
    $sql = "SELECT * FROM market";
    $result = mysqli_query($connection,$sql);
    echo "<table border='1' class='table table-success table-border table-striped'>";
    echo "<tr><th>Market No</th><th>Market Name</th><th>Market Address</th><th>Market Contact</th><th>Market Opening</th><th>Option</th></tr>";
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
</body>
</html>