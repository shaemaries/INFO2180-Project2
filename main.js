'use strict'


window.onload = function() {
	main();
}

function main() {
}

function validation(event){

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


function getPageData(event, pagename, paramspage) {
	var prefix = "./";
	var suffix = ".php";
	var pagelink = prefix + pagename + suffix;

	if (paramspage != "") {
		pagelink = pagelink + paramspage;
	}
	getData(event, pagelink, findelementbyid("content"));
}


function findelementbyid(id) {
	return document.getElementById(id);
}


/*
	Passes form data to redirected_path for processing
*/
function passData(event, to, formdata, setto) {
	event.preventDefault();
	fetch(to, { method: 'POST', body: formdata })
	  .then(function(response) {
      if (response.status !== 200) {
        console.error(`Something went wrong. Status Code: ${response.status}`);
        // todo : write code to show user an error message, like a popup
        return;
      }

      // Get data and update ui
      response.text().then(function(promise) {
          updateUI(setto, promise);
      });
	  })
	  .catch(function(error) {
      console.error(`Fetching error: ${error}`);
	  });
}


function getData(event, from, setto) {
	event.preventDefault();
	fetch(from)
	  .then(function(response) {
      if (response.status !== 200) {
        console.error(`Something went wrong. Status Code: ${response.status}`);
        // todo : write code to show user an error message, like a popup
        return;
      }

      // Get data and update ui
      response.text().then(function(promise) {
        setto.innerHTML = promise;
      });
	  })
	  .catch(function(error) {
      console.error(`Fetching error: ${error}`);
	  });
}


function logOut() {
	if (confirm("Are you sure?")) {
		getPageData(event, "logout", "");
		findelementbyid("side_bar").remove();
	}
}


function new_user_link() {
	getPageData(event, "new_user", "");
}

function new_issue_link() {
	getPageData(event, "new_issue", "");	
}

function validateNewUserForm(event) {
	event.preventDefault();
	var firstname = findelementbyid("firstname").value;
	var lastname = findelementbyid("lastname").value;
	var password = findelementbyid("password").value;
	var email = findelementbyid("email").value;

	var form_data = new FormData();
	form_data.append("firstname", firstname);
	form_data.append("lastname", lastname);
	form_data.append("password", password);
	form_data.append("email", email);

	passData(event, "./new_user.php", form_data, findelementbyid("content"));
}
