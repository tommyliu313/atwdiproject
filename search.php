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
    <script src="static/js/jqueryown.js"></script>
    <script src="static/js/validation.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
<!--message-->
    <!--navbarstart-->
    <?php include('component/navbar.php'); ?>
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
 <div class="modal fade" id="InsertModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Insert New Market</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="restfulapi/index.php/market/newrecord" method="POST" enctype="x-www-form-urlencoded" onsubmit="return validateinputform()" autocomplete="off" name="insertform" id="insertform">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District 
              <span>*</span>
        </label>
          <select name="insertdistrict" id="insertdistrict" class="form-select custom-select" required>
          <option selected="selected" disabled value="disabled">Choose the following option where the market district is</option>
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
          
          <label for="region" class="form-label">Region
          <span>*</span></label>
            <select name="insertregion" id="insertregion" class="form-select custom-select" required>
              <option selected="selected" disabled value="disabled">Choose the following option where the market region is</option>
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
            
          <label for="marketname" class="form-label"> Market Name</label>
          <span>*</span>
          <br>
          
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="insertmarketname" id="insertmarketname" class="form-control form-control-lg" aria-label="large" placeholder="For Example: ShaTin Public Market">
            </div>
          </div>
            <br>
            <label for="address" class="form-label"> Address</label>
            <span>*</span><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input type="text" name="insertaddress" id="insertaddress" class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: 160 TSAT TSZ MUI ROAD, NORTH POINT, HK">
              </div>
            </div>
              <br>

          <label for="tel1" class="form-label">Telephone 1</label>
          <span>*</span><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group-prepend"><span class="input-group-text">+852</span>
            </div>
            <input type="tel" name="inserttel1" id="inserttel1" pattern="[0-9]{8}" required class="form-control" placeholder="For Example: 00000000"><br>
          </div>
          
          <label for="tel2" class="form-label">Telephone 2</label>
          <span>*</span><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="inserttel2" id="inserttel2" pattern="[0-9]{8}" required class="form-control" placeholder="For Example: 00000000">
            </div>

          <label for="Map" class="form-label">Map Location</label>
          <span>*</span><br>
          <input type="text" name="insertmaploc" id="insertmaploc" required class="form-control" placeholder="For Example: 23.1234xx,135.123xxx">
            <br>
          
          <label for="openinghours" class="form-label">Opening Hours</label>
          <span>*</span><br>
          <input type="text" name="insertopeninghours" id="insertopeninghours" required class="form-control" placeholder="For Example: 6:00 a.m. to 8:00 p.m.">
          <br>
          <label for="Tenancy Name" class="form-label"> Tenancy Type</label>
          <span>*</span><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="inserttenancytype" id="inserttenancytype" required class="form-control form-control-lg" aria-label="large">
            </div>
          </div>
            <br>
         
            <label for="stallnumber" class="form-label"> Stall Number</label>
            <span>*</span><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="number" name="insertstallno" id="insertstallno" required class="form-control form-control-lg" aria-label="large" placeholder="Please Input a number">
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
<!--footerstart-->
<?php include('component/footer.php'); ?>
    <!--footerstart-->
</body>
</html>
