<?php

require_once 'dbLogin.php';

$productInfo = $_REQUEST['prodInfo'];
$productMade = $_REQUEST['prodMade'];
$productModel = $_REQUEST['prodModel'];

if (empty($productInfo)) {
    header('location:addProduct.php?result=fail');
} else if (empty($productMade)) {
    header('location:addProduct.php?result=fail');
} else if (empty($productModel)) {
    header('location:addProduct.php?result=fail');
} else {
    $query = "Insert into products (productInfo, productMade, productModel) values ('$productInfo', '$productMade', '$productModel')";
    $result = mysqli_query($conn, $query);

    if ($result == 1) {
        //echo "New product inserted";
        header('location:addProduct.php?result=success');
    } else {
        //echo "New product not inserted";
        header('location:addProduct.php?result=fail');
    }
}
?>

