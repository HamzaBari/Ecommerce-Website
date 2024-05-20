let basket = {};
let basketitemsnum = 0;

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

