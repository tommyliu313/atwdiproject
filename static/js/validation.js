const insertform = document.getElementById('insertform');

const district  = document.getElementById("insertdistrict").value;
const region = document.getElementById("insertregion").value;
const insertmarketname = document.getElementById("insertmarketname").value;
const insertaddress = document.getElementById("insertaddress").value;
const inserttel1 = document.getElementById("inserttel1").value;
const inserttel2 = document.getElementById("inserttel2").value;
const insertmaploc = document.getElementById("insertmaploc").value;
const insertopeninghours = document.getElementById("insertopeninghours").value;
const inserttenancytype = document.getElementById("inserttenancytype").value;
const insertstallno = document.getElementById("insertstallno").value;

function validateinputform(){
    if (district === '' || district == null){
        alert("district should not be empty")
    }
    if (region === '' || region == null){
        alert("should not be empty");
        return false;
    }
    if (insertmarketname === '' || insertmarketname == null){
        alert("market name should not be empty");
        return false;
    }
    if (insertaddress === '' || insertaddress == null){
        alert("Address should not be empty");
        return false;
    }
    if (inserttel1 === '' || inserttel1 == null){
        alert("Telephone 1 should not be empty");
        return false;
    }
    if (inserttel2 === '' || inserttel2 == null){
        alert("Telephone 2 should not be empty");
        return false;
    }
    if (insertopeninghours === '' || insertopeninghours == null){
        alert("Opening hours should not be empty");
        return false;
    }
    if (inserttenancytype === '' || inserttenancytype == null){
        alert('Tenancy type should not be empty');
        return false;
    }
    if (insertstallno == '' || insertstallno == null){
        alert("Stall Number should not be empty");
        return false;
    }
}

function redirect(){
    window.location = 'search.php';
}
