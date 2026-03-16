let cart = [];

function addToCart(name, price) {

cart.push({name:name, price:price});

alert(name + " added to cart");

localStorage.setItem("cart", JSON.stringify(cart));

}

function showCart() {

cart = JSON.parse(localStorage.getItem("cart")) || [];

let list = document.getElementById("cartItems");

let total = 0;

cart.forEach(item => {

let li = document.createElement("li");

li.textContent = item.name + " - ₹" + item.price;

list.appendChild(li);

total += item.price;

});

document.getElementById("total").innerText = "Total: ₹" + total;

}

function placeOrder(){

alert("Order Placed Successfully!");

localStorage.clear();

location.reload();

}