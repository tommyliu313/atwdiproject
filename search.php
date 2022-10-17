<!DOCTYPE html>
<html lang="en">
    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="./css/own.css"></link>
    <script src="./css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<!--error handling-->
<body>
<!--message-->
<!-- navbar start -->
<nav class="navbar navbar-expand-lg bg-primary" id="top"><a class="navbar-brand"> Our Public Market</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="#00FF00"></span></button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href="index.html"> Index</a></li>
        <li class="nav-item"><a class="nav-link" href="search.php"> Search </a></li>
        <li class="nav-item"><a class="nav-link" href="/insert/newrecord/insertrecord.html"> Insert New Record</a></li>
        <li class="nav-item"><a class="nav-link" href=""> Your Record History</a></li>
        <li class="nav-item"><a href="" class="nav-link">Web Map</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="#" class="dropdown-item">
              Whole New Market Record</a></li>
              <li><a href="#" class="dropdown-item">
                Whole New Market Record</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- navbar end -->

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
          </select></th>
        <th>
          <select name="" id="" class="form-select">
            <option value="" selected="selected">Please select the</option>
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
  </tr>

</table>

<a href="#"><button class="btn modal-button" aria-haspopup="true"><strong>Back to top</strong></button></a>

<!--table end-->
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

            $query = "SELECT districteng FROM district";
            $release = $
            

-->