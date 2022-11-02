<?php
// global $name_err, $email_error, $avatar_error;
// if (isset($_REQUEST['btn_validate'])) {
//     extract($_REQUEST);
//     if (isset($_REQUEST['name']) && strlen($name) == 0) {
//         $name_err = "Không để trống họ và tên!";
//     } else if (strlen($ho_ten) > 20) {
//         $name_err = "Họ và tên không vượt quá 20 ký tự!";
//     }
//     if (strlen($email) == 0) {
//         $email_error = "Không để trống email!";
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $email_error = "Không đúng định dạng email!";
//     }
//     if (strlen($diem) > 0 && ($diem < 0 || $diem > 10)) {
//         $avatar_error = "Điểm phải từ 0 đến 10!";
//     }
// }


// Code PHP xử lý validate
//kiểm tra dữ liệu
$nameerr = "";
$sellerr = "";
$imageerr = "";
$priceerr = "";
$descriptionerr = "";
$category_iderr = "";
$date_adderr = "";


if (strlen($name) == 0) {
    $nameerr = "Please enter product's name";
}
if (strlen($sell) == 0) {
    $sellerr = "Please enter product's sell";
}
if ($image_add['size'] == 0) {
    $imageerr = "Please choose an image";
}
if (strlen($price) == 0) {
    $priceerr = "Please enter product's price";
}
if (strlen($description) == 0) {
    $descriptionerr = "Please enter product's description";
}
if (strlen($category_id) == 0) {
    $category_iderr = "Please choose product's category";
}
if (strlen($date_add) == 0) {
    $date_adderr = "Please choose product's date add";
}
