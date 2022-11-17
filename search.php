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
    <nav class="navbar navbar-expand-lg bg-primary" id="top"><a class="navbar-brand"> Our Public Market</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="#00FF00"></span></button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="index.html"> Index</a></li>
        <li class="nav-item"><a class="nav-link" href="search.php">  Search and Insert Page</a></li>
          <li class="nav-item"><a class="nav-link" href=""> Your Record History</a></li>
          <li class="nav-item"><a href="webmap.html" class="nav-link">Web Map</a></li>
        </ul>
      </div>
    </nav>
    <!--navbarend-->


<div class="mt-4 p-5 bg-warning text-black rounded">
  <h1>Searching Page</h1></div>

  <table class="table table-success table-border table-striped">
    <tr>
        <th>
          </th>
        <th>
          <select name="" id="" class="form-select">
          <option selected="selected"> Region</option>
            <option> Please select the region</option>
          </select>
        </th>
        <th>
        <button class="btn btn-success" > Submit</button>
        <button class="btn btn-info" id="popupinsert">Insert Market</button>
      </th>
    </tr>
</table>
<!--mysqlifearray.php start-->
<?php
    require_once('database/data/dbsetting.php');
    $sql = "SELECT * FROM market";
    $result = mysqli_query($connection,$sql);
    echo "<table border='1' class='table table-success table-border table-striped table-repsonsive'>";
    echo "<tr><th scope='col'>Market No</th><th scope='col'>Market Name</th>
          <th scope='col'>Region</th> <th scope='col'>Market District</th>
          <th scope='col'>Market Address</th><th scope='col'>Market Contact</th>
          <th scope='col'>Openinghours</th>
          <th scope='col'>211</th>
          </tr>";
    while($row = mysqli_fetch_object($result)){
        $content = "<tr>";
        $content .= "<td>$row->marketId</td>";
        $content .= "<td>$row->marketname</td>";
        $content .= "<td>$row->regionname</td>";
        $content .= "<td>$row->districtname</td>";
        $content .= "<td>$row->address</td>";
        $content .= "<td colspan='2'>$row->contact1<br>$row->contact2</td>";
        $content .= "<td colspan='3'>$row->openinghour</td>";
        $content .= "</tr>";

        echo $content;
    }
    echo "</table>";
?>

<a href="#"><button class="btn modal-button" aria-haspopup="true"><strong>Back to top</strong></button></a>


<!--popup window start-->
div.modal>div.modal-dialog>div.modal-content>div.modal-header>div.modal
<!--popup window end-->
<!--paginationstart-->
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">
      <a href="" class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item">
      <a href="" class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<!--paginationend-->

<!--modalwindowstart-->
<div class="modal fade" tabindex="-1" style="">
  <div class="modal-dialog">
    <div class="modal-content"> 123
      <div class="modal-header">
        <div class="modal-body">
          123
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--modalwindowend-->

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
              <h3><a href="search.html">Search</a></h3>
            </div>
            <div class="row">
              <h3>
              <a href="insert.html">Insert New Record</a>
              </h3>
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

<!--php script
#載入結果
#查詢結果
#得出結果
            $query = "SELECT districteng FROM district";
            $release = $
            

-->