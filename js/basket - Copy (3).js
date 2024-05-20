let basket = {};
let basketitemsnum = 0;

function contactServer(){
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


function checkBasket() { // load basket from local storage if it exists
    if (localStorage["basket"])
        basket = JSON.parse(localStorage["basket"]);
}

function addToBasket(productid) { // add new item to basket
    if (basket[productid])
        basket[productid]++;
    else
        basket[productid] = 1;
    localStorage["basket"] = JSON.stringify(basket);
    updateBasket();
}

function countBasketItems() { // count number of basket items
    basketitemsnum = 0;
    for (product in basket)
        basketitemsnum += basket[product];
}

function buyNow() {
    basket = {};
    localStorage["basket"] = JSON.stringify(basket);
    updateBasket();
    emptyBasket();
}

function updateBasket() {
    countBasketItems();
    document.getElementById("basket").innerHTML = "My Basket (" + basketitemsnum + ")";
}

function myBasket() {
    checkBasket();
    updateBasket();
}

function emptyBasket(){
    localstorage.clear();
    updateBasket();
}

