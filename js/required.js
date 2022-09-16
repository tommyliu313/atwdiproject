//Password

const usernamevalue = document.getElementById("username");
const passwordvalue = document.getElementById("password");

//Validation

function passwordvalidation(){
    var x = document.getElementById("passwordfirst").value;
    var y = document.getElementById("passwordsecond").value;
}
//Password Format

//VisiblePassword
function turnpasswordvisible(){
    if(passwordvalue.type === "password"){
        this.type === "text";
    }else{
        this.type === "password";
    }
}