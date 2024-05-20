function storeUser(){
    //Building the objects where the user information is going to be stored
    var userObject = {};
        //Create username & Password
        userObject.username = document.getElementById("Username-Textfield").value;
        userObject.password = document.getElementById("Password-Textfield").value;

        //User Information
        userObject.enterFistname = document.getElementById("Firstname-Textfield").value;
        userObject.enterLastname = document.getElementById("Lastname-Textfield").value;
        userObject.enterEmail = document.getElementById("Email-Textfield").value;
        userObject.enterPhonenumber = document.getElementById("Phonenumber-Textfield").value;

        //Address
        userObject.AddressL1 = document.getElementById("AddressL1-Textfield").value;
        userObject.AddressL2 = document.getElementById("AddressL2-Textfield").value;
        userObject.PostCode = document.getElementById("Postcode-Textfield").value;
        userObject.City = document.getElementById("City-Textfield").value;
        userObject.Country = document.getElementById("Country-Textfield").value;

        //Stroing the user to the website 
        localStorage[userObject.username] = JSON.stringify(userObject);

        //Informing the user if his registation was successfull or not
        document.getElementById("Outcome").innerHTML = "<b>Account Registred</b>";
}

function validateRegisterForm(){
    let userName = document.forms["registerForm"]["username"].value;

    
    if(userName == ""){
        alert("You must fill in your username");
        return false;
    }

}