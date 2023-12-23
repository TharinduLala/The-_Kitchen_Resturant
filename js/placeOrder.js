function placeOrder() {
    var car=JSON.stringify(cart)
    console.log(car);
    var va = {
        "orderId": 1,
        "customerName": "Kamal",
        "totalValue": 1000,
        "orderDate": "2023-12-23",
        "customerTel": "0715463515",
        "deliveryAddress": "Panadura",
        "orderDetails": car
    };

    fetch("../php/placeOrder.php",{
        "method":"POST",
        "headers":{
            "Content-Type":"application/json; charset=utf-8"
        },
        "body":JSON.stringify(va)
    }).then(function(res){
        // console.log(res.body);
        return res.text();
        
    }).then(function(data){
        console.log(data);
        // console.log(JSON.parse(data));
    });
}
