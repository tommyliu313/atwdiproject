const url = "http://localhost/atwdiproject/index.php";

function action(){

    var XHR = createXMLHttpRequest();
    var actionurl= url + '/';
    XHR.open("GET",actionurl,true);
    XHR.onreadystatechange = function(){

    };
    XHR.send();
}

function modify(){

    var XHR = createXMLHttpRequest();
    var modifyurl= url + '/';
    XHR.open("PUT",modifyurl,true);
    XHR.onreadystatechange = function(){

    };
    XHR.send();
}

function remove(){

    var XHR = createXMLHttpRequest();
    var removeurl= url + '/';
    XHR.open("DELETE",removeurl,true);
    XHR.onreadystatechange = function(){

    };
    XHR.send();
}


function insert(){
    var XHR = createXMLHttpRequest();
    var inserturl= url + '/insert';
    XHR.open("POST",inserturl,true);
    XHR.onreadystatechange = function(){

    };
    XHR.send();
}

function search(){
    var 
}

const search = document.getElementById('search');
search.addEventListener('click',search());