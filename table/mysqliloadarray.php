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

    echo "<p align='center'>";

    if($page > 1)
      echo "<a href='mysqliloadarray.php?page=".($page -1) ."'>上一頁</a>";
    for($i=1; $i <= $pages_amount;$i++){
      if($i == $page)
        echo "$i";
      else
        echo "<a href='mysqliloadarray.php?page=$i'> $i </a>";
    }
    if($page < $pages_amount)
       echo "<a href='mysqliodarray.php?page=".($page + 1) ."'>下一頁</a>";
    echo "</p>";

    mysqli_free_result($result);
    mysqli_close($connection);

?>