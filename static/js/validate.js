
var market
var marketname = document.getElementById("marketname").value;


if(marketname == null){
    alert('You did not fill in the value of marketname');
}

if(typeof marketname == 'number'){
    alert("You shouldn't type the number in the market column");
}