var baseUri = "http://localhost/atwdiproject/restfulapi/index.php/market/";

var request = new XMLHttpRequest();
var outputArray;

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
    display += '<td colspan="2"><button class="btn btn-danger" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete This Record</button>';
    display += '<br><button class="btn btn-success" id="popupinsert" type="button" data-bs-toggle="modal" data-bs-target="#UpdateModal">Edit This Record</button></td>';
    display += '</tr>';
};

