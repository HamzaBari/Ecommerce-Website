//Global variables 
let customerLoggedIn = "You are logged in <button class='btn btn-primary' onclick='userLogout()'>Logout</button>";
let customerLoginResponse = document.getElementById("loginResponse").innerHTML;
let newRequest = new XMLHttpRequest();
            
//Checking the customer login when the page is loading up.
window.onload = checkingLogin;
            
//Checking if the customer is logged in or not.
function checkingLogin(){
    //Create event handler which is going to show how the server is going to repond accrording to the situation.
    newRequest.onload = function(){
        if(newRequest.responseText === "ok"){
            document.getElementById("loginResponse").innerHTML = customerLoggedIn;
        }
        else
        {
            document.getElementById("loginResponse").innerHTML  = customerLoginResponse;
        }
    };
    //Setting up and sending a request.
    newRequest.open("GET", "check_login.php");
    newRequest.send();
}
            
//User logging in to the server
function userLogin(){
    //Create event handler which is going to show how the server is going to repond accrording to the situation.
    newRequest.onload = function(){
        //Checking the HTTP status code
        if(newRequest.status === 200){
            //Getting the data from the server in PHP
            let responseData = newRequest.responseText;

            //Inserting the data to the page.
            if(responseData === "ok"){
                document.getElementById("loginResponse").innerHTML = customerLoggedIn;
                document.getElementById("errorMessage").innerHTML = ""; //Clearing all the error messages
            }
            else 
                document.getElementById("errorMessage").innerHTML = newRequest.responseText;
            }
            else
                document.getElementById("errorMessage").innerHTML = "Error communicating with server";
    };

    //Extract the data required for the login.
    let userEmail = document.getElementById("email").value;
    let userPassword = document.getElementById("password").value;

    //Setting up and sending a request.
    newRequest.open("POST", "customer_login.php");
    newRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    newRequest.send("email=" + userEmail + "&password=" + userPassword);
}
            
//The user is logging out.
function userLogout(){
    //Create event handler which is going to show how the server is going to repond accrording to the situation.
    newRequest.onload = function(){
        checkingLogin();
    };
    //Setting up and sending a request.
    newRequest.open("GET", "logout.php");
    newRequest.send();
}