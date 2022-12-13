<!DOCTYPE html>
<html lang="en">


    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="static/css/own.css">
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/navbartoggle.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="static/css/own.css"></link>
    <script src="static/js/ajaxxhr.js"></script>
    <script src="static/js/jqueryown.js"></script>
    <title>Public Market - Search Page</title>
</head>

<style></style>
<body>
<!--message-->
    <!--navbarstart-->
    <?php include('component/navbar.php'); ?>
    <!--navbarend-->


<div class="mt-4 p-5 bg-warning text-black rounded">
  <h1>Reference</h1></div>
  <?php
    require_once('database/data/dbsetting.php');
    $sql = "SELECT * FROM reference";
    $result = mysqli_query($connection,$sql);
    
    echo "<table border='1' class='table table-success table-border table-striped table-repsonsive'>";
    echo "<thead><tr class='active'>
          <th scope='col'>Region</th> <th scope='col'>District</th>
          </tr></thead>";
    while($row = mysqli_fetch_object($result)){
        $content = "<tr>";
        $content .= "<td>$row->regionname</td>";
        $content .= "<td>$row->districtname</td>";
        $content .= "</tr>";

        echo $content;
    }
    echo "</table>";
?>
  


<!--redirect-->

    <!--footerstart-->
    <?php include('component/footer.php'); ?>
    <!--footerstart-->
    <!--footerend-->
</body>
</html>