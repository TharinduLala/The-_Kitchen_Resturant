
<?php
include 'global.php';

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
$result = mysqli_query($con, "SELECT * FROM `products`");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        "productId" => $row['productId'],
        "productName" => $row['productName'], "productType" => $row['productType'],
        "productDesc" => $row['productDesc'], "productPrice" => $row['productPrice'],
        "productImg" => base64_encode($row['productImg'])
    );
}

echo json_encode($data);
