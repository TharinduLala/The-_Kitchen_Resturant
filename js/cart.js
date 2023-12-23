var cart = [];

function addToCart(productId, productPrice) {
  var name = $(`#titleProduct${productId}`).text();
  var qty = parseInt($(`#inputProduct${productId}`).val());
  var tot = productPrice * qty;

  var i = {
    "productId": productId,
    "productName": name,
    "productPrice": productPrice,
    "productQty": qty,
    "productTotal": tot
  }
  cart.push(i);
  loadCartItems();
  updateCartTotal();
  console.log(cart);
}

function updateCartTotal(val) {
  var total = 0;
  var totalItems = 0;
  cart.forEach(e => {
    totalItems += parseInt(e.productQty);
    total += e.productTotal;
  });
  $("#lblTotalItems").text(totalItems);
  $("#lblSubTotal").text(total);
  var tax = $("#lblTax").text();
  var netTot = Math.trunc(total + (total * (parseInt(tax) / 100)));
  $("#lblNetTotal").text(netTot);
}

function removeCartItem(productId) {
  cart.forEach((i) => {
    if (i.productId == productId) {
      var index = cart.indexOf(i)
      cart.splice(index, 1);
    }
  });
  console.log(cart);
  loadCartItems();
  updateCartTotal();
}

function loadCartItems() {
  $("#cartList").empty();
  cart.forEach((i) => {
    var cartItem = `<li class="list-group-item d-flex justify-content-between align-items-center">
    ${i.productName} ${i.productQty} ${i.productTotal}
      <span id="removeCartItem${i.productId}" class="badge"><button type="button" class="btn btn-outline-danger rounded-pill"  onclick="removeCartItem(${i.productId});"><i class="bi bi-trash"></i></button></span>
        </li>`;
    $("#cartList").prepend(cartItem);
  });

}