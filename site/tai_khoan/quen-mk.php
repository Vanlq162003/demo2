<?php
require_once '../../global.php';
require_once '../../dao/customer.php';
extract($_REQUEST);

global $email;
if (exist_params("btn_check_email")) {

    $user = customer_check_email($email);

    if ($user) {
        extract($user);
        header("location: ../tai_khoan/quen-mk-form.php?dung=".$email);

        
        global $id, $password, $email;
    } else {
        header("location: ../tai_khoan/quen-mk-form.php?check=email không tồn tại");
        $MESSAGE = "Sai email, email không tồn tai !";
        die;
    }
}

if (exist_params("btn_forgot")) {
   
       
        $user = customer_check_email($email);
        customer_update($user['id'], $password, $user['name'], $user['kich_hoat'], $user['avatar'], $email, $user['vai_tro']);
        $MESSAGE = "Cập nhập mật khẩu thành công";
        header("location: ../tai_khoan/dang-nhap-form.php");
        die;
    
   
}

require '../layout.php';
