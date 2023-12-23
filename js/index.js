
function gotoOrderSection() {
  window.scrollTo($("#productSection").position());
}


function loadAllProducts() {
  var req = new XMLHttpRequest();
  var method = "GET";
  var url = "../php/getProducts.php";
  req.open(method, url, true);
  req.send();

  req.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      data.forEach((record) => {
        var img = new Image();
        img.src = `data:image/jpg;base64,${record.productImg}`;
        var card = `
                <div class="col mb-1">
                    <div id="${record.productId}" class="card" style="min-height: 400px;">
                      <img style="max-height: 160px;max-width: 220px;margin: auto;" src=${`data:image/jpg;base64,${record.productImg}`} class="card-img-top mt-1" alt="burger">
                      <div class="card-body">
                        <h5 id="titleProduct${record.productId}" class="card-title">${record.productName}</h5>
                        <p class="card-text text-body-secondary">${record.productDesc}</p>
                        <p class="card-text fw-bold"><small class="text-body-secondary">from </small>Rs.${record.productPrice}.00</p>
                      </div>
                      <div class="card-footer">
                        <div class="input-group">
                          <input id="inputProduct${record.productId}" width="50%" min="0" type="number" class="form-control" placeholder="Enter Quantity"aria-describedby="button-addon2">
                          <button id="btnAddProduct${record.productId}" class="btn btn-outline-dark" type="button" onclick="addToCart(${record.productId},${record.productPrice});">ADD TO CART</button>
                        </div>
                      </div>
                    </div>
                  </div>
                `;
        if (record.productType == "Burger") {
          $('#burgerCardsContainer').append(card);
        } else if (record.productType == "Pizza") {
          $('#pizzaCardsContainer').append(card);
        } else if (record.productType == "Pasta") {
          $('#pastaCardsContainer').append(card);
        } else if (record.productType == "Sushi") {
          $('#sushiCardsContainer').append(card);
        } else if (record.productType == "Drink") {
          $('#drinksCardsContainer').append(card);
        }
      });
    }
  }
}

loadAllProducts();


