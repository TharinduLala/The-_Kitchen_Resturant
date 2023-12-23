function placeOrder() {
    var calculate = calculateCartTotal();
    if (calculate.totalItems === 0) {
        alert("Your Cart is Empty..!");
    } else {
        var today = new Date();
        var car = JSON.stringify(cart)
        var s = today.getDate() + "" + today.getMonth() + "" + today.getFullYear() + "" + today.getHours() + "" + today.getMinutes() + "" + today.getSeconds();
        var oderId = "OD" + cart.length + "" + s;
        var total = calculate.netTotal;
        var va = {
            "orderId": oderId,
            "customerName": "Kamal",
            "totalValue": total,
            "orderDate": "2023-12-23",
            "customerTel": "0715463515",
            "deliveryAddress": "Panadura",
            "orderDetails": car
        };

        fetch("../php/placeOrder.php", {
            "method": "POST",
            "headers": {
                "Content-Type": "application/json; charset=utf-8"
            },
            "body": JSON.stringify(va)
        }).then(function (res) {
            return res.text();

        }).then(function (data) {
            alert(data);
            cart = [];
            $("#cartList").empty();
            updateCartTotal();
        });
    }
}