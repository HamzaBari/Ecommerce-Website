let basket = {};
let basketitemsnum = 0;


function checkBasket(){
    //Create request object 
    let request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        //Check HTTP status code
        if(request.status === 200){
            //Get data from server
            let responseData = request.responseText;

            //Add data to page
            basket = JSON.parse(responseData);
            updatePage();
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("POST", "checkbasket.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //Send request
    request.send("user=5e1bbc916228b877fa394948");
}



function updateBasket(){
    //Create request object 
    let request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        //Check HTTP status code
        if(request.status === 200){
            let responseData = request.responseText;

            //Add data to page
            console.log(responseData);

        } else
        alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("POST", "updatebasket.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //Send request
    console.log(JSON.stringify(basket));
    request.send("user=5e1bbc9d6228b877fa394949&basket=" + basket);
}


function addToBasket(productid) { // add new item to basket
    if (basket[productid])
        basket[productid]++;
    else
        basket[productid] = 1;
    updateBasket();
    updatePage();
}

function countBasketItems() { // count number of basket items
    basketitemsnum = 0;
    for (product in basket)
        basketitemsnum += basket[product];
}

function buyNow() {
    basket = {};
    localStorage["basket"] = JSON.stringify(basket);
    updatePage()
    // todo confirmation here
}


function updatePage() {
    countBasketItems();
    document.getElementById("basket").innerHTML = "My Basket (" + basketitemsnum + ")";
}

function myBasket() {
   // checkBasket();
    updatePage();
}


