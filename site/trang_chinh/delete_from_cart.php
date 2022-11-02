<?php
require "../../global.php";

$id=$_GET['id'];
unset($_SESSION['cart'][$id]);

$VIEW_NAME ="detail_cart.php";
require "../layout.php";