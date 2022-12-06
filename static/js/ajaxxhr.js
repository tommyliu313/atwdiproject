var baseUri = "http://localhost/atwdiproject/restfulapi/index.php/market/";

var request = new XMLHttpRequest();
var outputArray;

var editbutton = document.getElementById("editbuttonsubmit");

var deleteModal=`<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <form action="restfulapi/index.php/market/deleterecord" method="DELETE">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Delete this record</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="form-group mb-3">
              
    You are going to delete this record.<br>
    Are you sure to delete this record? The action is irreversible.
    </div>
 
    </div>
    <div class="modal-footer">`;

var updateModal = `<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
  <form  action="restfulapi/index.php/market/updaterecord" method="PUT">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update the Market Tenancy</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="form-group mb-3">
                
          <label for="marketname" class="form-label">Column</label><br>
        <div class="input-group mb-3 form-group">
          <div class="input-group">
          <select name="columnname" id="columnname" class="form-select custom-select" required>
            <option value="marketname">Market Name</option>
            <option value="districtname">Market District</option>
            <option value="regionname">Region</option>
            <option value="marketaddress">Market Address</option>
            <option value="coordinate">Coordinate</option>
            <option value="contact1">Market Contact Telephone Number 1</option>
            <option value="contact2">Market Contact Telephone Number 2</option>
            <option value="tenancycomd">Tenancy Type</option>
            <option value="openinghour">Openinghours</option>
            <option value="nosstall">Stall Number</option>
          </select>
          </div>
        </div>
          <br>

        <label for="tel1" class="form-label">Replace Value</label><br>
        <div class="input-group mb-3 form-group">
            <input type="text" name="newvalue" id="newvalue" require class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="Replace Value">
        </div>
    </div>
 
    </div>
    <div class="modal-footer">
    <input type="reset" value="Reset" name="Reset" class="btn btn-danger">`;

//Start the application
function find1(){
    var inputValue = "district/" + document.getElementById("inputvalue1").value;
    var destination = baseUri + inputValue;
    
    request.open("GET",destination, true);
    request.onreadystatechange = update;
    request.send(null);
};

function find2(){
    var inputValue = document.getElementById("inputvalue2").value;
    var destination = baseUri + "region/" +  inputValue;
    
    request.open("GET",destination, true);
    request.onreadystatechange = update;
    request.send(null);
};

function find3(){
    var inputValue = document.getElementById("inputvalue3").value;
    var destination = baseUri + "marketname/" +  inputValue;

    request.open("GET",destination, true);
    request.onreadystatechange = update;
    request.send(null);
};
/*
*/

function deleterecord($marketId){

    var inputValue = $marketId;
    
    var destination = baseUri + "deleterecord/" +  inputValue;
    request.open("DELETE",destination, true);
    request.onreadystatechange = update;
    request.send(null);
}

function editrecord($marketId){
    var inputValue = $marketId;
    var columnname = document.getElementById("columnname").value;
    var newvalue = document.getElementById("newvalue").value;
    var destination = baseUri + "updaterecord/" +  inputValue + "/" + columnname + "/" + newvalue;
    request.open("PUT",destination, true);
    request.onreadystatechange = update;
    request.send(null);
}

//Renderer Process
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
            display += "<th scope='col'>Stall Number</th><th scope='col'>Option</th></tr></thead>";
            
            outputArray.forEach(displaythese)
            display += "</table>";

            showresult.innerHTML =  display;
        }
    }
};

//Display Section
function displaythese(data){
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
    display += '<td colspan="2">';
    display += '<button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete This Record</button> ';
    display += deleteModal;
    display += `<button class="btn btn-danger" onclick="redirect()";>No</button>`;
    display += '<button type="submit" value="Submit" name="Submit" class="btn btn-success" onClick="deleterecord('+"'"+data['marketId']+"'"+');">Yes</button>';
    display += `</div></div></form></div></div>`;
    display += '<br><button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#UpdateModal">Edit This Record</button></td> ';
    display += updateModal;
    display += '<button type="submit" class="btn btn-success" id="editbuttonsubmit" onClick="editrecord('+"'"+data['marketId']+"'"+');">Submit</button>';
    display += `</div></div></form></div></div>`;

    display += '</tr>';
    
};
