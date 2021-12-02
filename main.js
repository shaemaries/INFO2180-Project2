"use strict";

window.onload = function(){
    var button = document.querySelector(".btn");
    button.addEventListener('click', validation);
}

function validation(){

    var email=document.getElementById("email").value.trim();
    var password=document.getElementById("password").value.trim();
    var error= false;

    var emailexpression = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var passwordexpression = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (emailexpression.test(email)){
        console.log("Valid email");
        if (passwordexpression.test(password) && password.length >=8){
            console.log("Valid password");
            return true;
        }
        else{
            alert("Invalid password");
            return false;
        }        
    }

    if (error){
        alert("Invalid email");
        return false;
    }
}

