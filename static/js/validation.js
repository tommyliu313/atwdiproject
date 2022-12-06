const insertform = document.getElementById('insertform');

const district  = document.getElementById("insertdistrict");
const region = document.getElementById("insertregion");
const insertmarketname = document.getElementById("insertmarketname");
const insertaddress = document.getElementById("insertaddress");
const inserttel1 = document.getElementById("inserttel1");
const inserttel2 = document.getElementById("inserttel2");
const insertmaploc = document.getElementById("insertmaploc");
const insertopeninghours = document.getElementById("insertopeninghours");
const inserttenancytype = document.getElementById("inserttenancytype");
const insertstallno = document.getElementById("insertstallno");

insertform.addEventListener('submit',(e) => {
    let error = []
    if (district.value === '' || district.value == null){
        error.push("should not be empty")
    }
    if (region.value === '' || region.value == null){
        error.push("should not be empty")
    }
    if (insertmarketname === '' || insertmarketname == null){
        error.push("market name should not be empty")
    }
    if (insertaddress === '' || insertaddress == null){
        error.push("Address should not be empty")
    }
    if (inserttel1 === '' || inserttel1 == null){
        error.push("Telephone 1 should not be empty")
    }
    if (inserttel2 === '' || inserttel2 == null){
        error.push("Telephone 2 should not be empty")
    }
    if (insertopeninghours === '' || insertopeninghours == null){
        error.push("Opening hours should not be empty")
    }
    if (inserttenancytype === '' || inserttenancytype == null){
        error.push('Tenancy type should not be empty')
    }
    if (insertstallno == '' || insertstallno == null){
        error.push("Stall Number should not be empty")
    }
    if(error.length > 0){
        e.preventDefault()
        window.alert("Error: " + error)
    }
})