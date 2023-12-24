var cart = [];

function addToCart(productId, productPrice) {

  var qty = parseInt($(`#inputProduct${productId}`).val());
  if (qty === 0 || isNaN(qty) || qty < 0) {
    alert("You need to add valid product quantity!!!");
    $(`#inputProduct${productId}`).val('');
  }

  var name = $(`#titleProduct${productId}`).text();
  var tot = productPrice * qty;
  var i = {
    "productId": productId,
    "productName": name,
    "productPrice": productPrice,
    "productQty": qty,
    "productTotal": tot
  }
  cart.push(i);
  $(`#inputProduct${productId}`).val('');
  loadCartItems();
  updateCartTotal();
  console.log(cart);

}


function updateCartTotal() {
  var t = calculateCartTotal();
  $("#floatBtnBadge").text(t.totalItems);
  $("#lblTotalItems").text(t.totalItems);
  $("#lblSubTotal").text(t.total);

  $("#lblNetTotal").text(t.netTotal);
}

function calculateCartTotal() {
  var tax = $("#lblTax").text();

  var total = 0;
  var totalItems = 0;
  cart.forEach(e => {
    totalItems += parseInt(e.productQty);
    total += e.productTotal;
  });
  var netTot = Math.trunc(total + (total * (parseInt(tax) / 100)));
  return { "total": total, "totalItems": totalItems, "netTotal": netTot };
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
    var item = `
    <a  class="list-group-item list-group-item-action  aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">${i.productName}</h5>
        <span id="removeCartItem${i.productId}" class="badge"><button type="button" class="btn btn-outline-danger rounded-pill"  onclick="removeCartItem(${i.productId});"><i class="bi bi-trash"></i></button></span>
      </div>
    <p  class="mb-1">  <small>Rs.${i.productPrice}.00.</small><span class="fs-5"> x  ${i.productQty}</span></p>
      <small>Rs.${i.productTotal}.00</small>
    </a>`;
    $("#cartList").prepend(item);
  });
}


function itemIsExists(pId) {

}