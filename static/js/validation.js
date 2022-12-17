function validateinputform(){

    let district  = document.insertform.insertdistrict.value;
    let region = document.insertform.insertregion.value;
    let insertmarketname = document.insertform.insertmarketname.value;
    let insertaddress = document.insertform.insertaddress.value;
    let inserttel1 = document.insertform.inserttel1.value;
    let inserttel2 = document.insertform.inserttel2.value;
    let insertmaploc = document.insertform.insertmaploc.value;
    let insertopeninghours = document.insertform.insertopeninghours.value;
    let inserttenancytype = document.insertform.inserttenancytype.value;
    let insertstallno = document.insertform.insertstallno.value;

    if (district === '' || district === null){
        alert("district should not be empty");
    }
    if (region === '' || region === null){
        alert("should not be empty");
        return false;
    }
    if (insertmarketname === '' || insertmarketname === null){
        alert("market name should not be empty");
        return false;
    }
    if(insertmaploc  === '' || insertmarketname === null){
        alert("market name should not be empty");
        return false;
    }
    if (insertaddress === '' || insertaddress === null){
        alert("Address should not be empty");
        return false;
    }
    if (inserttel1 === '' || inserttel1 === null){
        alert("Telephone 1 should not be empty");
        return false;
    }
    if (inserttel2 === '' || inserttel2 === null){
        alert("Telephone 2 should not be empty");
        return false;
    }
    if (insertopeninghours === '' || insertopeninghours === null){
        alert("Opening hours should not be empty");
        return false;
    }
    if (inserttenancytype === '' || inserttenancytype === null){
        alert('Tenancy type should not be empty');
        return false;
    }
    if (insertstallno == '' || insertstallno === null){
        alert("Stall Number should not be empty");
        return false;
    }
    return true;

}
    

function redirect(){
    window.location = 'search.php';
}
