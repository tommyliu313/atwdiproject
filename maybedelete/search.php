<!DOCTYPE html>
<html lang="en">


    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="../static/css/own.css">
    <script src="../static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="../static/js/jquery-3.6.1.min.js"></script>
    <script src="../static/js/navbartoggle.js"></script>
    <script src="../static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../static/css/own.css"></link>
    <script src="../static/js/ajaxxhr.js"></script>
    <script src="../static/js/jqueryown.js"></script>
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
          <?php
            require_once('../database/data/dbsetting.php');
            
            echo "<select class='form-select'><option selected='selected'>Region</option><option> Please select the region</option>";
            $sql = "SELECT DISTINCT regionname FROM market";
            $result = mysqli_query($connection,$sql);

            while($row = mysqli_fetch_object($result)){
              $option = "<option value='.$row->regionname.'>$row->regionname";
              $option .= "</option>";
              echo $option;}
              ?>
            </select>
        </th>
        <th>
          <?php
            require_once('../database/data/dbsetting.php');
            
            echo "<select class='form-select'><option selected='selected'>District</option><option> Please select the District</option>";
            
            $sql = "SELECT DISTINCT districtname FROM market";
            $result = mysqli_query($connection,$sql);
      
            while($row = mysqli_fetch_object($result)){
            
              $option = "<option value='$row->districtname'>$row->districtname";
              $option .= "</option>";
              echo $option;}
            
            ?>
            </select>
        </th>
        <th>
        <button class="btn btn-success" id="search"> Submit</button>
        <button class="btn btn-info" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Insert Market</button>
      </th>
    </tr>
</table>
<!--mysqlifearray.php start-->
<?php
    require_once('../database/data/dbsetting.php');
    $sql = "SELECT * FROM market";
    $result = mysqli_query($connection,$sql);
    echo "<table border='1' class='table table-success table-border table-striped table-repsonsive'>";
    echo "<thead><tr>
    <th scope='col'>Market No</th><th scope='col'>Market Name</th>
          <th scope='col'>Region</th> <th scope='col'>Market District</th>
          <th scope='col'>Market Address</th><th scope='col' colspan='2'>Market Contact</th>
          <th scope='col'>Openinghours</th></th><th scope='col'>Tenancy Type</th></th>
          <th scope='col'>Stall Number</th>
          </tr></thead>";
    while($row = mysqli_fetch_object($result)){
        $content = "<tr>";
        $content .= "<td>$row->marketId</td>";
        $content .= "<td>$row->marketname</td>";
        $content .= "<td>$row->regionname</td>";
        $content .= "<td>$row->districtname</td>";
        $content .= "<td>$row->marketaddress</td>";
        $content .= "<td colspan='2'>$row->contact1<br>$row->contact2</td>";
        $content .= "<td>$row->openinghour</td>";
        $content .= "<td>$row->tenancycomd</td>";
        $content .= "<td>$row->nosstall</td>";
        $content .= "</tr>";

        echo $content;
    }
    echo "</table>";
?>

<a href="#"><button class="btn modal-button" aria-haspopup="true"><strong>Top</strong></button></a>


<!--popup window start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert New Market</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/" method="POST" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District</label>
          <select name="District" id="" class="form-select custom-select" required>
            <?php ?>
            <option selected="selected">Choose the following option where the market district is</option>
            <option value=""></option>
          </select>
          
          <label for="region" class="form-label">Region</label>
            <select name="region" id="" class="form-select custom-select" required>
              <option selected="selected">Choose the following option where the market region is</option>
              <option value=""></option>
            </select>
            
          <label for="marketname" class="form-label"> Market Name</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="marketname" id="marketname" required class="form-control form-control-lg" aria-label="large" placeholder="For Example: ShaTin Public Market">
            </div>
          </div>
            <br>
            <label for="address" class="form-label"> Address</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input type="text" name="address" id="address" required class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
              </div>
            </div>
              <br>

          <label for="tel1" class="form-label">Telephone 1</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group-prepend"><span class="input-group-text">+852</span>
            </div>
            <input type="tel" name="tel1" id="" pattern="[0-9]{4}-[0-9]{4}" required="required" class="form-control" placeholder="For Example: 0000-0000"><br>
          </div>
          
          <label for="tel2" class="form-label">Telephone 2</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="tel2" id="" pattern="[0-9]{4}[0-9]{4}" required="required" class="form-control" placeholder="For Example: 0000-0000">
            </div>

          <label for="Map" class="form-label">Map Location</label><br>
          <iframe src="http://maps.google.com/maps?q=&output=embed" frameborder="0" width="400" height="500"></iframe>
          <br>
      </div>
   
      </div>
      <div class="modal-footer">
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <input type="submit" value="Submit" name="Submit" class="btn btn-success">
      </div>   </form>
    </div>
  </div>
</div>
<!--popup window end-->

<!--paginationstart-->
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">
      <a href="search.php?page=" class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item">
      <a href="search.php?page=" class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<!--paginationend-->

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

<!--php script
#載入結果
#查詢結果
#得出結果
            $query = "SELECT districteng FROM district";
            $release = $
            

-->