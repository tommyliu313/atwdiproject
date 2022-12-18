function validateinputform(){

    let district = document.insertform.insertdistrict.value;
    let region = document.insertform.insertregion.value;
    let insertmarketname = document.insertform.insertmarketname.value;
    let insertaddress = document.insertform.insertaddress.value;
    let inserttel1 = document.insertform.inserttel1.value;
    let inserttel2 = document.insertform.inserttel2.value;
    let insertmaploc = document.insertform.insertmaploc.value;
    let insertopeninghours = document.insertform.insertopeninghours.value;
    let inserttenancytype = document.insertform.inserttenancytype.value;
    let insertstallno = document.insertform.insertstallno.value;

    if (district === '' || district === null || district ==='disabled' || district === disabled){
        alert("District should not be empty");
        return false;
    }
    if (region === '' || region === null || region === 'disabled' || region === disabled){
        alert("Region should not be empty");
        return false;
    }
    if (insertmarketname === '' || insertmarketname === null || typeof insertmarketname !== 'string'){
        alert("Market name should not be empty or the type should be string");
        return false;
    }
    if(insertmaploc  === '' || insertmaploc === null){
        alert("Location should not be empty or the type should be number");
        return false;
    }
    if (insertaddress === '' || insertaddress === null){
        alert("Address should not be empty");
        return false;
    }
    if (inserttel1 === '' || inserttel1 === null || typeof inserttel1 !== 'number'){
        alert("Telephone 1 should not be empty");
        return false;
    }
    if (inserttel2 === '' || inserttel2 === null || typeof inserttel2 !== 'number'){
        alert("Telephone 2 should not be empty");
        return false;
    }
    if (insertopeninghours === '' || insertopeninghours === null){
        alert("Opening hours should not be empty");
        return false;
    }
    if (inserttenancytype === '' || inserttenancytype === null || typeof inserttenancytype !=="string"){
        alert('Tenancy type should not be empty');
        return false;
    }
    if (insertstallno == '' || insertstallno === null){
        alert("Stall Number should not be empty");
        return false;
    }

    return false;

}
    

function redirect(){
    window.location = 'search.php';
}
