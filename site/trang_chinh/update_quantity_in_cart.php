<?php
require_once "../../global.php";
$id = $_GET['id'];
$type = $_GET['type'];


if ($type == 'decre') {
    if ($_SESSION['cart'][$id]['quantity'] > 1) {

        $_SESSION['cart'][$id]['quantity']--;
    } else {
        unset($_SESSION['cart'][$id]);
    }
} else {
    $_SESSION['cart'][$id]['quantity']++;
}
$VIEW_NAME ="detail_cart.php";
require "../layout.php";
