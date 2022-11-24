<!DOCTYPE html>
<html lang="en">


    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="static/css/own.css"></link>
    <script src="static/js/jqueryown.js"></script>

    
    <title>Public Market - Search Page</title>
    
</head>
<body>
    <script type="text/javascript" src="static/js/ajaxxhr.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/navbartoggle.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
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
<!--Select Column-->

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Select Filter
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapsing" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table table-striped table">
        <tr><td>District</td><td>
        <select class='form-select' id='inputvalue1'>
        <option selected='selected' disabled>District</option>
          <option disabled> Please select the district</option>
        <?php
            require_once('database/data/dbsetting.php');
            
            $sql = "SELECT DISTINCT districtname FROM market";
            $result = mysqli_query($connection,$sql);

            while($row = mysqli_fetch_object($result)){
              $option = "<option value='$row->districtname'>$row->districtname";
              $option .= "</option>";
              echo $option;}
              ?>
              </select>
              </td>
              <td>
              <td><button class="btn btn-primary" onclick="find1(); return false;">Click to see Result</button></td>
              </td>
              
              <tr><td>Region</td><td>
              <select class='form-select' id='inputvalue2'>
              <option selected='selected' disabled>Region</option>
              <option disabled> Please select the Region</option>
        <?php
            require_once('database/data/dbsetting.php');
            
            $sql = "SELECT DISTINCT regionname FROM market";
            $result = mysqli_query($connection,$sql);

            while($row = mysqli_fetch_object($result)){
              $option = "<option value='$row->regionname'>$row->regionname";
              $option .= "</option>";
              echo $option;}
              ?>
              </select>
            </td>
          <td> <td><button class="btn btn-primary"onclick="find2(); return false;">Click to see Result</button></td></td>
          </tr>
          <tr>
            <td>Market Name</td>
            <td>
            <select class='form-select' id='inputvalue3'>
              <option selected='selected' disabled>Market Name</option>
              <option disabled> Please select the market name</option>
        <?php
            require_once('database/data/dbsetting.php');
            
            $sql = "SELECT DISTINCT marketname FROM market";
            $result = mysqli_query($connection,$sql);

            while($row = mysqli_fetch_object($result)){
              $option = "<option value='$row->marketname'>$row->marketname";
              $option .= "</option>";
              echo $option;}
              ?>
              </select>
            </td>
            <td> <td><button class="btn btn-primary" onclick="find3(); return false;">Click to see Result</button></td></td>
          </tr>
          <tr><td>Option</td>
          <td width="20%"><button class="btn btn-info" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#InsertModal">Insert New Market</button></td>
          <td width="20%"><button class="btn btn-danger" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete A Tenancy</button></td>
          <td width="20%"><button class="btn btn-success" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#UpdateModal">Update A Tenancy </button></td>
          </tr>
</table>
          
      </div>
    </div>
  </div></div>

<!--Selection Column-->
<!--Demonstrate the result Start-->
    <div id="resultrevealed">
      <div class="container-fluid">
        <figure class="figure">
          <img src="static/pics/lookingforsomething.png" alt="" class="figure-img img-fluid rounded" width="200">
          <figcaption class="figure-caption">
            <h1>Hmm.....</h1>
            It seems that you haven't start searching.
          </figcaption>
            </div>
        </figure>
        
    </div>
<!--Demonstrate the result End-->
 <!--Popup Modal Insert Start-->
 <div class="modal fade" id="InsertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert New Market</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
          $district = htmlspecialchars($_POST["district"] ?? "", ENT_QUOTES);
          $region = htmlspecialchars($_POST["region"] ?? "", ENT_QUOTES);
          $marketname = htmlspecialchars($_POST["marketname"] ?? "", ENT_QUOTES);
          $address = htmlspecialchars($_POST["address"] ?? "", ENT_QUOTES);
          $tel1 = htmlspecialchars($_POST["tel1"] ?? "", ENT_QUOTES);
          $tel2 = htmlspecialchars($_POST["tel2"] ?? "", ENT_QUOTES);
          $maploc = htmlspecialchars($_POST["maploc"] ?? "", ENT_QUOTES);
          $tenancytype = htmlspecialchars($_POST["tenancytype"] ?? "", ENT_QUOTES);
          $stallno = htmlspecialchars($_POST["stallno"] ?? "", ENT_QUOTES);
          
          echo "<div class='mb-3'>
          district: $district <br>
          region: $region <br>
          marketname: $marketname <br>
          address: $address <br>
          telephone1: $tel1 <br>
          telephone2: $tel2 <br>
          maplocation: $maploc <br>
          tenancytype: $tenancytype<br>
          stallno: $stallno <br>
          
          </div>";
          
        ?>
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District</label>
          <select name="district" id="district" class="form-select custom-select" no>
          <option selected="selected" disabled>Choose the following option where the market district is</option>
            <?php

              require_once('database/data/dbsetting.php');
              //require_once('Validate.php');
              
              $sql = "SELECT DISTINCT districtname FROM market";
              $result = mysqli_query($connection,$sql);
              while($row = mysqli_fetch_object($result)){
                $option = "<option value='$row->districtname'>$row->districtname";
                $option .= "</option>";
                echo $option;}
              
              ?>
          </select>
          
          <label for="region" class="form-label">Region</label>
            <select name="region" id="region" class="form-select custom-select" no>
              <option selected="selected" disabled>Choose the following option where the market region is</option>
              <?php
                require_once('database/data/dbsetting.php');
            
                $sql = "SELECT DISTINCT regionname FROM market";
                $result = mysqli_query($connection,$sql);

                while($row = mysqli_fetch_object($result)){
                  $option = "<option value='$row->regionname'>$row->regionname";
                  $option .= "</option>";
                  echo $option;}
              ?>
            </select>
            
          <label for="marketname" class="form-label"> Market Name</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="marketname" id="marketname" no class="form-control form-control-lg" aria-label="large" placeholder="For Example: ShaTin Public Market">
            </div>
          </div>
            <br>
            <label for="address" class="form-label"> Address</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input type="text" name="address" id="address" no class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
              </div>
            </div>
              <br>

          <label for="tel1" class="form-label">Telephone 1</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group-prepend"><span class="input-group-text">+852</span>
            </div>
            <input type="tel" name="tel1" id="tel1" pattern="[0-9]{8}" no="no" class="form-control" placeholder="For Example: 00000000"><br>
          </div>
          
          <label for="tel2" class="form-label">Telephone 2</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="tel2" id="tel2" pattern="[0-9]{8}" no="no" class="form-control" placeholder="For Example: 00000000">
            </div>

          <label for="Map" class="form-label">Map Location</label><br>
          <input type="maploc" name="maploc" id="maploc" no="no" class="form-control" placeholder="For Example: 23.1234xx,135.123xxx">
          <br>
          <label for="Tenancy Name" class="form-label"> Tenancy Type</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="tenancytype" id="tenancytype" no class="form-control form-control-lg" aria-label="large">
            </div>
          </div>
            <br>
            <label for="stallnumber" class="form-label"> Stall Number</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="number" name="stallno" id="stallno" no class="form-control form-control-lg" aria-label="large" placeholder="Please Input a number">
            </div>
          </div>
            <br>
      </div>
   
      </div>
      <div class="modal-footer">
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <button type="submit" value="Submit" name="Submit" class="btn btn-success" onClick="insertrecords();">Insert</button>
      </div>   </form>
    </div>
  </div>
</div>
 <!--Popup Modal Insert End-->
 <!--Popup Modal Delete Start-->
 <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete a Market</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/" method="POST" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District</label>
          <select name="District" id="" class="form-select custom-select" no>
          <option selected="selected">Choose the following option where the market district is</option>
            <?php
              require_once('database/data/dbsetting.php');
              
              $sql = "SELECT DISTINCT districtname FROM market";
              $result = mysqli_query($connection,$sql);
              while($row = mysqli_fetch_object($result)){
                $option = "<option value='$row->districtname'>$row->districtname";
                $option .= "</option>";
                echo $option;}
              
              ?>
          </select>
          
          <label for="region" class="form-label">Region</label>
            <select name="region" id="" class="form-select custom-select" no>
              <option selected="selected">Choose the following option where the market region is</option>
              <?php
                require_once('database/data/dbsetting.php');
            
                $sql = "SELECT DISTINCT regionname FROM market";
                $result = mysqli_query($connection,$sql);

                while($row = mysqli_fetch_object($result)){
                  $option = "<option value='$row->regionname'>$row->regionname";
                  $option .= "</option>";
                  echo $option;}
              ?>
            </select>
            
          <label for="marketname" class="form-label"> Market Name</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="marketname" id="marketname" no class="form-control form-control-lg" aria-label="large" placeholder="For Example: ShaTin Public Market">
            </div>
          </div>
            <br>
            <label for="address" class="form-label"> Address</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input type="text" name="address" id="address" no class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
              </div>
            </div>
              <br>

          <label for="tel1" class="form-label">Telephone 1</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group-prepend"><span class="input-group-text">+852</span>
            </div>
            <input type="tel" name="tel1" id="" pattern="[0-9]{4}-[0-9]{4}" no="no" class="form-control" placeholder="For Example: 0000-0000"><br>
          </div>
          
          <label for="tel2" class="form-label">Telephone 2</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="tel2" id="" pattern="[0-9]{4}[0-9]{4}" no="no" class="form-control" placeholder="For Example: 0000-0000">
            </div>

          <label for="Map" class="form-label">Map Location</label><br>
          <iframe src="http://maps.google.com/maps?q=&output=embed" frameborder="0" width="400" height="500"></iframe>
          <br>
          <label for="Tenancy Name" class="form-label"> Tenancy Name</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="marketname" id="marketname" no class="form-control form-control-lg" aria-label="large">
            </div>
          </div>
            <br>
            <label for="stallnumber" class="form-label"> Stall Number</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="number" name="" id="marketname" no class="form-control form-control-lg" aria-label="large" placeholder="Please Input a number">
            </div>
          </div>
            <br>
      </div>
   
      </div>
      <div class="modal-footer">
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <button type="submit" value="Submit" name="Submit" class="btn btn-success" >Insert</button>
      </div>   </form>
    </div>
  </div>
</div>
<!--Popup Modal Delete End-->
<!--Popup Modal Update Start-->
<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update the Market Tenancy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/" method="POST" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District</label>
          <select name="District" id="" class="form-select custom-select" no>
          <option selected="selected">Choose the following option where the market district is</option>
            <?php
              require_once('database/data/dbsetting.php');
              
              $sql = "SELECT DISTINCT districtname FROM market";
              $result = mysqli_query($connection,$sql);
              while($row = mysqli_fetch_object($result)){
                $option = "<option value='$row->districtname'>$row->districtname";
                $option .= "</option>";
                echo $option;}
              
              ?>
          </select>
          
          <label for="region" class="form-label">Region</label>
            <select name="region" id="" class="form-select custom-select" no>
              <option selected="selected">Choose the following option where the market region is</option>
              <?php
                require_once('database/data/dbsetting.php');
            
                $sql = "SELECT DISTINCT regionname FROM market";
                $result = mysqli_query($connection,$sql);

                while($row = mysqli_fetch_object($result)){
                  $option = "<option value='$row->regionname'>$row->regionname";
                  $option .= "</option>";
                  echo $option;}
              ?>
            </select>
            
          <label for="marketname" class="form-label">Target Market Name</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="marketname" id="marketname" no class="form-control form-control-lg" aria-label="large" placeholder="For Example: ShaTin Public Market">
            </div>
          </div>
            <br>
            <label for="address" class="form-label"> Original Value</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input type="text" name="address" id="address" no class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
              </div>
            </div>
              <br>

          <label for="tel1" class="form-label">Replace Value</label><br>
          <div class="input-group mb-3 form-group">
              <input type="text" name="address" id="address" no class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
          </div>
        
      </div>
   
      </div>
      <div class="modal-footer">
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <button type="submit" value="Submit" name="Submit" class="btn btn-success" >Insert</button>
      </div>   </form>
    </div>
  </div>
</div>
<!--Popup Modal Update End-->
</body>
</html>

/restfulapi/index.php/newrecord