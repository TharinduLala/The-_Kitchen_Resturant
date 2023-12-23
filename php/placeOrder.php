<?php
include 'global.php';


if (isset($_POST)) {
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $data = file_get_contents("php://input");
    $orderValue = json_decode($data);
    $details = json_decode($orderValue->orderDetails);

    $oId = 1;
    $cusName = $orderValue->customerName;
    $tot = $orderValue->totalValue;
    $date = $orderValue->orderDate;
    $cTel = $orderValue->customerTel;
    $address = $orderValue->deliveryAddress;


    $sql1 = "INSERT INTO orders (orderId,customerName,totalValue,oderDate,customerTel,deliveryAddress) VALUES ('{$oId}','{$cusName}','{$tot}','{$date}','{$cTel}','{$address}')";
    $stmt1 = mysqli_query($conn, $sql1);
    foreach ($details as $i) {
        $productId = $i->productId;
        $productName = $i->productName;
        $productPrice = $i->productPrice;
        $productQty = $i->productQty;
        $productTotal = $i->productId;
        $sql = "INSERT INTO orderdetails (orderId,productId,unitPrice,qty,total) VALUES ('{$oId}','{$productId}','{$productPrice}','{$productQty}','{$productTotal}')";
        $stmt = mysqli_query($conn, $sql);

        echo "Order Added Successfully";
    }
}
