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
    <footer class="bg-info">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <h1>Web Description</h1>
            </div>
            <div class="row">
              <h6>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, ad, sequi illum debitis, pariatur ducimus officiis assumenda aut delectus facilis incidunt dolorum. Pariatur quis, id error rerum cupiditate vitae officia.
                </h6>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row"><h1 class="font-weight-bold">Web Map</h1></div>
            <div class="row">
              <h3><a href="index.html">Index</a></h3>
            </div>
            <div class="row">
              <h3><a href="search.php">Search and Insert Page</a></h3>
            </div>
           <div class="row">
              <h3>Refernece</h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row"><h1 class="font-weight-bold">Copyright</h1></div>
            <div class="row"> ©2022 Liu Chak Tin All rights reserved</div>
        </div>
      </div>
      </div></footer>
    <!--footerend-->
<!--https://codingstatus.com/how-to-insert-select-option-value-in-database-using-php-mysql/-->
</body>
</html>