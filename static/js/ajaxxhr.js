function action(){

    var XHR = createXMLHttpRequest();
    XHR.open("GET","../../../restfulapi/apimethodservice.php");
    XHR.onreadystatechange = function(){

    };
}

function modify(){

    var XHR = createXMLHttpRequest();
    XHR.open("PUT","../../../restfulapi/apimethodservice.php");
    XHR.onreadystatechange = function(){

    };


}

function remove(){

    var XHR = createXMLHttpRequest();
    XHR.open("DELETE","../../../restfulapi/apimethodservice.php");
    XHR.onreadystatechange = function(){

    };
}


function insert(){
    var 
    var XHR = createXMLHttpRequest();
    XHR.open("POST","../../../restfulapi/apimethodservice.php");
    XHR.onreadystatechange = function(){

    };
    
}

var deletebutton = document.getElementById("delete");
var updatebutton = document.getElementById("update");

deletebutton.addEventListener("click",remove);
updatebutton.addEventListener("click",modify);
