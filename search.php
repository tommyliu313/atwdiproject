<!DOCTYPE html>
<html lang="en">


<style>
    nav#top a.navbar-brand {
  color: white; }

nav#top #navbarNavDropdown ul.navbar-nav li.nav-item {
  align-items: center; }
  nav#top #navbarNavDropdown ul.navbar-nav li.nav-item a.nav-link {
    color: white; }

center {
  border: 1px solid #000;
  background-color: #ff00ff;
  font-size: 30px; }
    

</style>
    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/navbartoggle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="static/css/own.css"></link>
    <title>Document</title>
</head>
<!--error handling-->
<body>
<!--message-->
    <!--navbarstart-->
    <nav class="navbar navbar-expand-lg bg-primary" id="top"><a class="navbar-brand"> Our Public Market</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="#00FF00"></span></button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="index.html"> Index</a></li>
          <li class="nav-item"><a class="nav-link" href="search.php"> Search </a></li>
          <li class="nav-item"><a class="nav-link" href=""> Your Record History</a></li>
          <li class="nav-item"><a href="webmap.html" class="nav-link">Web Map</a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Insert
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./insert/newrecord/insertrecord.html">
                New Record</a></li>
                <li><a href="#" class="dropdown-item">
                  New Tenancy</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!--navbarend-->

<!--connect to database script start-->
<?php
  include_once("dbsetting.php");
?>
<!--connect to database script end-->
<div class="mt-4 p-5 bg-warning text-black rounded">
  <h1>Searching Page</h1></div>

<!---table start-->
<form action="showresult.php" method="post" enctype="multipart/form-data">
<table class="table table-success table-border table-striped">
    <tr>
        <th>
          <select name="" id="" class="form-select">
            <option selected="selected"> District</option>
            <option> Please select the </option>
            <option value="<?php echo $district ?>"></option>
            <!--get the district item from database-->
          </select></th>
        <th>
          <select name="" id="" class="form-select">
            <option value="" selected="selected">Market Name</option>
          </select>
        </th>
        <th>
          <select name="" id="" class="form-select">
            <option selected="selected"> Please select the </option>
            <option value=""></option>
          </select></th>
        </th>
    </tr>
</table>
</form>

<table class="table table-secondary" id="targettable">
  <tr>
    <th>Market No</th>
    <th>Market Name</th>
    <th>Market Address</th>
    <th>Market Contact</th>
    <th>Market Opening</th>
    <th>Options</th>
    
  </tr>
  
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td><button class="btn btn-danger"> Delete?</button><br>
      <button class="btn btn-warning"> Modify? </button>
      <br>
      <button class="btn btn-primary" onclick="CallMapFunction()" id="CallMapFunction"> Check Map! </button>
    </td>
  </tr>

</table>

<a href="#"><button class="btn modal-button" aria-haspopup="true"><strong>Back to top</strong></button></a>

<!--table end-->
<!--popup window start-->
div
<!--popup window end-->
<!--paginationstart-->
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">
      <a href="" class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    li.page-item>a.page-link[href="#"]
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