<?php
$nameerr = "";
$emailerr = "";
$passworderr = "";
$avatarerr = "";
require_once "../../dao/customer.php";
if (strlen($name) == 0) {
    $nameerr = "Please enter your name";
}
if ($avatar['size'] == 0) {
    $avatarerr = "Please choose an image";
}

if (strlen($email) == 0) {
    $emailerr = "Please enter your email";
} else {
    $countData = customer_check_email_exits($email);
   
    if ($countData['total'] > 0) {
        $emailerr = "Email already exists, please choose another email";
    }
}

if (strlen($password) == 0) {
    $passworderr = "Please enter your password";
}
