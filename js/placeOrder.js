function placeOrder() {
    var calculate = calculateCartTotal();

    var today = new Date();
    var car = JSON.stringify(cart)
    var s = today.getDate() + "" + (today.getMonth()+1) + "" + today.getFullYear() + "" + today.getHours() + "" + today.getMinutes() + "" + today.getSeconds();
    var oderId = "OD" + cart.length + "" + s;
    var total = calculate.netTotal;
    var orderDate = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + today.getDate();


    var cusName = $("#customerName").val();
    var address = $("#deliveryAddress").val();
    var contact = $("#contactNumber").val();

    if (cusName == '' || address == '' || contact == '') {
        alert("Please fill all fields");
    } else {

        var va = {
            "orderId": oderId,
            "customerName": cusName,
            "totalValue": total,
            "orderDate": orderDate,
            "customerTel": contact,
            "deliveryAddress": address,
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
            $("#customerName").val("");
            $("#deliveryAddress").val("");
            $("#contactNumber").val("");
            $("#modalCloseBtn").trigger('click');
            $("#offcanvasClose").trigger('click');
            
            updateCartTotal();
        });
    }
}