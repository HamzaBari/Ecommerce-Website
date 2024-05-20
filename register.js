function register(){
    //Create request object 
    let request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds
    request.onload = () => {
        //Check HTTP status code
        if(request.status === 200){
            //Get data from server
            let responseData = request.responseText;

            //Add data to page
            document.getElementById("ServerResponse").innerHTML = responseData;
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("POST", "Customer-Storage.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    //Extract registration data
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let firstname = document.getElementById("firstname").value;
    let lastname = document.getElementById("lastname").value;
    let phonenumber = document.getElementById("phonenumber").value;
    let AddressLine1 = document.getElementById("AddressLine1").value;
    let AdressLine2 = document.getElementById("AdressLine2").value;
    let City = document.getElementById("City").value;
    let Postcode = document.getElementById("Postcode").value;

    //Send request
    request.send("email=" + email + "&password=" + password + "&firstname=" + firstname + "&lastname=" + lastname + "&phonenumber=" + phonenumber + "&AddressLine1=" + AddressLine1 + "&AdressLine2=" + AdressLine2 + "&City=" + City + "&Postcode=" + Postcode);
}

