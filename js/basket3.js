"use strict";

//Globals
window.onload = loadBasket;

//Get basket from session storage or create one if it does not exist
function getBasket() {
    let basket;
    if (sessionStorage.basket === undefined || sessionStorage.basket === "")
        basket = [];
    else
        basket = JSON.parse(sessionStorage.basket);
    return basket;
}

//Displays basket in page.
function loadBasket() {
    let basket = getBasket();//Load or create basket

    //Build string with basket HTML
    // let htmlStr = "<form action='checkout.php' method='post'>";
    let prodIDs = [];
    for (let i = 0; i < basket.length; ++i) {
        // htmlStr += "Product name: " + basket[i].name + "<br>";
        prodIDs.push({ id: basket[i].id, count: 1, name: basket[i].name });//Add to product array
    }
    //Add hidden field to form that contains stringified version of product ids.
    // htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";

    //Add checkout and empty basket buttons
    // htmlStr += "<input type='submit' value='Checkout'></form>";
    // htmlStr += "<br><button onclick='emptyBasket()'>Empty Basket</button>";

    //Display nubmer of products in basket
    // document.getElementById("basketDiv").innerHTML = htmlStr;
}


function basketPage() {
    let basket = getBasket();//Load or create basket

    //Build string with basket HTML
    let htmlStr = "<form action='checkout.php' method='post'>";
    //Add hidden field to form that contains stringified version of product ids.
    htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(basket) + "'>";

    //Add checkout and empty basket buttons
    htmlStr += "<input type='submit' value='Checkout'></form>";
    htmlStr += "<br><button onclick='emptyBasket()'>Empty Basket</button>";

    //Display nubmer of products in basket
    document.getElementById("basketDiv").innerHTML = htmlStr;
}




//Adds an item to the basket
function addToBasket(prodID, prodName) {
    let basket = getBasket();//Load or create basket
    let existing = basket.findIndex(product => product.id === prodID);

    if (existing != -1) // If found
        basket[existing].count++;
    else         //Add product to basket
        basket.push({id: prodID, count: 1});

    //Store in local storage
    sessionStorage.basket = JSON.stringify(basket);

    //Display basket in page.
    loadBasket();
}

//Deletes all products from basket
function emptyBasket() {
    sessionStorage.clear();
    loadBasket();
}