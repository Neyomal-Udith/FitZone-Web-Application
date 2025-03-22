function filterMenu() {
  const category = document.getElementById("cuisine_filter").value;
  const productBoxes = document.getElementsByClassName("product-box");
  for (let i = 0; i < productBoxes.length; i++) {
    const productCategory = productBoxes[i].getAttribute("data-category");
    if (category === "all" || category === productCategory) {
      productBoxes[i].style.display = "block";
    } else {
      productBoxes[i].style.display = "none";
    }
  }
}

function filterProductsBySearch() {
  const searchInput = document.getElementById("productSearch").value.toLowerCase();
  const productBoxes = document.getElementsByClassName("product-box");
  for (let i = 0; i < productBoxes.length; i++) {
    const productName = productBoxes[i].getAttribute("data-name");
    if (productName.includes(searchInput)) {
      productBoxes[i].style.display = "block";
    } else {
      productBoxes[i].style.display = "none";
    }
  }
}

document.querySelector("#cart-icon").addEventListener("click", function () {
  document.querySelector(".cart").classList.add("active");
});

document.querySelector("#close-cart").addEventListener("click", function () {
  document.querySelector(".cart").classList.remove("active");
});

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  var removeCartButtons = document.getElementsByClassName("cart-remove");
  for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
  var quantityInputs = document.getElementsByClassName("cart-quantity");
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }
  var addCart = document.getElementsByClassName("add-cart");
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updateTotal();
  updateCartCount();
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  } else if (input.value > 1) {
    input.value = 1;
  }
  updateTotal();
  updateCartCount();
}

function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
  var price = shopProducts.getElementsByClassName("price")[0].innerText;
  var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
  addProductToCart(title, price, productImg);
  updateTotal();
  updateCartCount();
}

function addProductToCart(title, price, productImg) {
  var cartShopBox = document.createElement("div");
  cartShopBox.classList.add("cart-box");
  var cartItems = document.getElementsByClassName("cart-content")[0];
  var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerText === title) {
      alert("You have already added this item to the cart");
      return;
    }
  }
  var cartBoxContent = `
                <img src="${productImg}" alt="" class="cart-img" />
                <div class="detail-box">
                  <div class="cart-product-title">${title}</div>
                  <div class="cart-price">${price}</div>
                  <input type="number" value="1" class="cart-quantity" />
                </div>
                <i class="ri-delete-bin-5-line cart-remove"></i>`;
  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);
  cartShopBox
    .getElementsByClassName("cart-remove")[0]
    .addEventListener("click", removeCartItem);
  cartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener("change", quantityChanged);
}

function updateTotal() {
  var cartContent = document.getElementsByClassName("cart-content")[0];
  var cartBoxes = cartContent.getElementsByClassName("cart-box");
  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName("cart-price")[0];
    var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
    var price = parseFloat(priceElement.innerText.replace("Rs", ""));
    var quantity = quantityElement.value;
    total = total + price * quantity;
  }
  total = Math.round(total * 100) / 100;
  document.getElementsByClassName("total-price")[0].innerText = "Rs" + total;
}

function updateCartCount() {
  var cartContent = document.getElementsByClassName("cart-content")[0];
  var cartBoxes = cartContent.getElementsByClassName("cart-box");
  var totalItems = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var quantityElement = cartBoxes[i].getElementsByClassName("cart-quantity")[0];
    totalItems += parseInt(quantityElement.value);
  }
  document.querySelector(".cart-count").innerText = totalItems;
}

document
  .getElementsByClassName("btn-buy")[0]
  .addEventListener("click", buyButtonClicked);

function buyButtonClicked() {
  var total = parseFloat(
    document
      .getElementsByClassName("total-price")[0]
      .innerText.replace("Rs", "")
  );
  if (total === 0) {
    alert("No Items in the Cart");
  } else {
    localStorage.setItem("totalPrice", total);
    var cartBoxes = document.getElementsByClassName("cart-box");
    var productTitles = [];
    for (var i = 0; i < cartBoxes.length; i++) {
      var title =
        cartBoxes[i].getElementsByClassName("cart-product-title")[0].innerText;
      productTitles.push(title);
    }
    localStorage.setItem("productTitles", JSON.stringify(productTitles));
    window.location.href = "checkout.php";
  }
}
