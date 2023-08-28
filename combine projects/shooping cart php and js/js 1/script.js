// not neccessary if the js comes unicodeRange: 

if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready)
    //Need delete
}
else{
    ready()
}

function ready() {

    const removeCart = document.getElementsByClassName("removeCart")
    for(let i = 0; i < removeCart.length; i++){
    let button = removeCart[i]
    button.addEventListener("click", removeCartItems)
    }

    const quantityInput = document.getElementsByClassName("quantity")
    for (let i = 0; i < quantityInput.length; i++){
   
        let input = quantityInput[i]
        input.addEventListener("change", quantityChange)
    }

    const addCart = document.getElementsByClassName("addCart")
    for(let i = 0; i < addCart.length; i++){
    let button = addCart[i]
    button.addEventListener("click", cartAdded)
    }

    document.getElementsByClassName("purchased")[0].addEventListener("click", itemPurchased)
    
}

// main wk

function itemPurchased() {
    let receipt = document.getElementById("receipt")
    let items = document.getElementsByClassName("cartItems")[0]
    let selectItem = items.getElementsByClassName("productName1")

    for(let i = 0; i < selectItem.length; i++){
        if(selectItem[i].innerText == ""){
            alert("Empty cart")
            console.log(purchaseProduct[i].innerText)
            return
       } 
       else{
    
           receipt.innerHTML = "You purchase items"
       }

    }

    while (items.hasChildNodes()) {

        items.removeChild(items.firstChild)
        
    }

    updateTotalCart()
}

function removeCartItems(event) {
    let buttonClicked = event.target
       buttonClicked.parentElement.parentElement.remove() //double parent element is cus they are two
       updateTotalCart()
}

function quantityChange(event) {
    let input = event.target
    // isNaN = is not a number

    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateTotalCart() // called this function to update its 
}

function cartAdded(event) {
  let button = event.target
    let shopItems = button.parentElement.parentElement
    let title = shopItems.getElementsByClassName("productName")[0].innerText
    let price = shopItems.getElementsByClassName("prices")[0].innerText
    let imageSrc = shopItems.getElementsByClassName("imgSrc")[0].src
    // will create another function with the names above
    addItemsToCart(title, price, imageSrc)  
    updateTotalCart() 
}

function addItemsToCart(title, price, imageSrc) {
    let newRow = document.createElement("div")
    newRow.classList.add("items")
    let items = document.getElementsByClassName("cartItems")[0]
    let cartNamed = document.getElementsByClassName("productName1")

    for(let i=0; i < cartNamed.length; i++){
        if (cartNamed[i].innerText == title) {
            alert("Product already added")
            return
        }
    }


    let newCartAdd = `
    <div class="cartProducts cart1">
              <img src="${imageSrc}" alt="" />
              <span class="productName1">${title}</span>
            </div>
            <div class="cartProducts cart2">
              <div class="price">${price}</div>
            </div>
            <div class="cartProducts cart3">
              <input class="quantity" type="number" value="1" />
              <button class="removeCart">REMOVE</button>
            </div>
    </div>
    `

    newRow.innerHTML = newCartAdd
    items.append(newRow)
    newRow.getElementsByClassName("removeCart")[0].addEventListener("click", removeCartItems)
    newRow.getElementsByClassName("quantity")[0].addEventListener("change", quantityChange)
}

function updateTotalCart() {

let cartContainer = document.getElementsByClassName("cartItems")[0]
let cartRows = document.getElementsByClassName("items")

var Sumtotal = 0

for(let i = 0; i < cartRows.length; i++){
    let cartRow = cartRows[i]
    let priceElement = cartRow.getElementsByClassName("price")[0]
    let quantityElement = cartRow.getElementsByClassName("quantity")[0]
    let price = parseFloat(priceElement.innerText.replace("$", ""))
    let quantity = quantityElement.value

    Sumtotal = Sumtotal + (price * quantity)
}
Sumtotal = Math.round(Sumtotal * 100) / 100
document.getElementsByClassName("cartTotal")[0].innerText = "$" +Sumtotal
    
}