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
    <script src="static/js/jqueryown.js"></script>
    <title>Public Market - Search Page</title>
    <script>
    var baseUri = "http://localhost/atwdiproject/restfulapi/index.php/market/";
    var request = new XMLHttpRequest();
    var outputArray;

    function startsearch(){
        var inputvalue = document.getElementById("inputvalue").value;
        var destination = baseUri + "district/"+ inputvalue;
        
        request.open("GET",destination, true);
        request.onreadystatechange = update;
        request.send(null);
    }

    function update(){
        if(request.readyState==4){
            if(request.status==200){
                var serverData = request.responseText;
                var showresult = document.getElementById('resultrevealed');
                //showresult.innerHTML = serverData;
                outputArray = JSON.parse(serverData);
                display = "<table border='1' class='table table-success table-border table-striped table-repsonsive'>";
                display += "<thead><tr><th scope='col'>Market No</th><th scope='col'>Market Name</th>";
                display += "<th scope='col'>Region</th> <th scope='col'>Market District</th>";
                display += "<th scope='col'>Market Address</th><th scope='col' colspan='2'>Market Contact</th>";
                display += "<th scope='col'>Openinghours</th><th scope='col'>Coordinate</th><th scope='col'>Tenancy Type</th></th>";
                display += "<th scope='col'>Stall Number</th></tr></thead>";
                
                outputArray.forEach(displaythis)
                display += "</table>";

                showresult.innerHTML =  display;
            }
        }
    }

    function displaythis(data){
        display += '<tr>';
        display += '<td>' + data['marketId'] + '</td>';
        display += '<td>' + data['marketname'] + '</td>';
        display += '<td>' + data['regionname'] + '</td>';
        display += '<td>' + data['districtname']+'</td>';
        display += '<td>' + data['marketaddress'] + '</td>';
        display += '<td colspan="2">' + data['contact']['contact1'] +'<br>'+ data['contact']['contact2'] + '</td>';
        display += '<td>' + data['openinghour'] + '</td>';
        display += '<td>' + data['coordinate'] + '</td>';
        display += '<td>' + data['tenancycomd'] + '</td>';
        display += '<td>' + data['nosstall'] + '</td>';
        display += '</tr>';
    }
</script>

</head>
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

    <table class="table table-striped table">
        <tr><td>District</td><td>
        <select class='form-select' id='inputvalue'>
    <option selected='selected'>District</option><option> Please select the district</option>
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
              </td><td>Region</td><td>
              <select class='form-select' id='inputvalue'><option selected='selected'>Region</option><option> Please select the Region</option>
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
            </td></tr>
             <tr><td>Click to see Result</td><td>
<button class="btn btn-primary"onclick="startsearch(); return false;">Click</button>
            </td></tr>
</table>
    <div id="resultrevealed">
        div
    </div>
</body>
</html>