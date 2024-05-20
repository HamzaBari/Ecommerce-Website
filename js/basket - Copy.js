let basket = {};
let basketitemsnum = 0;


function loadContent(){
    //Create request object 
    let request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        //Check HTTP status code
        if(request.status === 200){
            //Get data from server
            let responseData = request.responseText;

            //Add data to page
            basket = responseData;
            console.log(basket);
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("POST", "basketfunc.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //Send request
    request.send("user=5e1bbc916228b877fa394948");
    console.log("sent");
}


function checkBasket() { // load basket from local storage if it exists
   // if (localStorage["basket"])
    //    basket = JSON.parse(localStorage["basket"]);
    loadContent();
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
    updateBasket()
    // todo confirmation here
}


function updateBasket() {
    countBasketItems();
    document.getElementById("basket").innerHTML = "My Basket (" + basketitemsnum + ")";
}

function myBasket() {
    console.log("hello");
    checkBasket();
    updateBasket();
}


