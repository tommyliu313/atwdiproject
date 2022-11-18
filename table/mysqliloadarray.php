<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
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

    $started_record = $records_each_page * ($page -1);

    mysqli_data_seek($result,$started_record);

    echo "<table border='1' align='center' width='800'>";
    echo "<tr align='center'>";

    for($i=0;$i<$total_fields;$i++)
      echo "<td>". mysqli_fetch_field_direct($result,$i)->name."</td>";
    echo "<tr>";
    
    $j = 1;
    while($row = mysqli_fetch_row($result) and $j <= $records_each_page){
      echo "<tr>";
      for($i=0;$i<$total_fields;$i++)
        echo "<td>$row[$i]</td>";
        $j++;
        echo "</tr>";
    }
    echo "</table>";

    echo "<nav aria-label='Page navigation example'><ul class='pagination'>";

    if($page > 1)
      echo "<a class='page-link' href='mysqliloadarray.php?page=".($page -1) ."'>Previous</a>";
    for($i=1; $i <= $pages_amount;$i++){
      if($i == $page)
        echo "$i";
      else
        echo "<li class='page-item'><a class='page-link' href='mysqliloadarray.php?page=$i'> $i </a></li>";
    }
    if($page < $pages_amount)
       echo "<li class='page-item'><a class='page-link' href='mysqliodarray.php?page=".($page + 1) ."'>Next</a></li>";
    echo "</p>";

    mysqli_free_result($result);
    mysqli_close($connection);

?>
</body>
</html>