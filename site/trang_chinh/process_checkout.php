<?php
require_once "../../global.php";
require_once "../../dao/orders_product.php";

$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];



$cart = $_SESSION['cart'];

$total_price = 0;

foreach ($cart as $each) {
    $total_price += $each['price'] * $each['quantity'];
}

$customer_id = $_SESSION['user']['id'];
// var_dump($customer_id);
// die;
$status = 0; // mới đặt 


orders_insert($customer_id,$name_receiver,$phone_receiver,$address_receiver,$status,$total_price);

$order_id=order_select_maxId($customer_id);
extract($order_id);


foreach ($cart as $each) {
    extract($each);
    order_product_($order_id[0]['id_product'],$id,$quantity);

}


unset($_SESSION['cart']);
header("Location:index.php");
