<html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["district"])){
        $district_error = "You haven't input this value";
    }else{
        exit;
    }
    if(empty($_POST['region'])){
        $_error = "";
    }
    if(empty($_POST['marketname'])){
        $_error = "";
    }
    if(empty($_POST['address'])){
        $_error = "";
    }
    if(empty($_POST['tel1'])){
        $_error = "";
    }
    if(empty($_POST['tel2'])){
        $_error = "";
    }
    if(empty($_POST['maploc'])){
        $_error = "";
    }
    if(empty($_POST['tenancytype'])){
        $_error = "";
    }
    if(empty($_POST['openinghours'])){
        $_error = "";
    }
    if(empty($_POST['stallno'])){
        $_error = "";
    }
}
?>

<form action="restfulapi/index.php/market/newrecord" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();" autocomplete="off">
      <div class="form-group mb-3">
        <label for="districtcol" class="form-label"> District 
              <span><?php if(isset($district_error)) echo $district_error; ?></span>
        </label>
          <select name="district" id="district" class="form-select custom-select" required>
          <option selected="selected" disabled>Choose the following option where the market district is</option>
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
            <select name="region" id="region" class="form-select custom-select" required>
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
            <input type="tel" name="tel1" id="tel1" pattern="[0-9]{8}" required class="form-control" placeholder="For Example: 00000000"><br>
          </div>
          
          <label for="tel2" class="form-label">Telephone 2</label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="tel2" id="tel2" pattern="[0-9]{8}" required class="form-control" placeholder="For Example: 00000000">
            </div>

          <label for="Map" class="form-label">Map Location</label><br>
          <input type="text" name="maploc" id="maploc" required class="form-control" placeholder="For Example: 23.1234xx,135.123xxx">
            <br>
          
          <label for="openinghours" class="form-label">Opening Hours</label><br>
          <input type="text" name="openinghours" id="openinghours" required class="form-control" placeholder="For Example: 6:00 a.m. to 8:00 p.m.">
          <br>
          <label for="Tenancy Name" class="form-label"> Tenancy Type</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="text" name="tenancytype" id="tenancytype" required class="form-control form-control-lg" aria-label="large">
            </div>
          </div>
            <br>
         
            <label for="stallnumber" class="form-label"> Stall Number</label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input type="number" name="stallno" id="stallno" required class="form-control form-control-lg" aria-label="large" placeholder="Please Input a number">
            </div>
          </div>
            <br>
      </div>
   
      </div>
      <div class="modal-footer">
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <button type="submit" value="Submit" name="Submit" class="btn btn-success" onClick="insertrecords();">Insert</button>
      </div>   
      
</form>
</html>