"use strict";

window.onload = function(){
}

function validation(){
    event.preventDefault();
    var email=document.getElementById("email");
    var password=document.getElementById("password")

    if(email.length=="" && password.length==""){
        alert("Email Address and Password fields are empty");
        return false;
        }
    else 

    if(email.length=="") {  
        alert("Email address is empty");  
        return false;  
    }   
    if (password.length=="") {  
         alert("Password field is empty");  
        return false;  
    }  
}             
