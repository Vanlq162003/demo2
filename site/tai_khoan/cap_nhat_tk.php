<?php
require '../../global.php';
require '../../dao/customer.php';

// extract($_REQUEST);

if (exist_params("update_tk_customer")) {
    $id = $_POST['id'];

    $name = $_POST["name"];
    $file_upload = $_FILES['image_new'];

    if ($file_upload['size'] > 0) {
      
        $file_name = uniqid(). basename($file_upload['name']);

        $target_path = "$IMAGE_DIR/users/". $file_name;
        move_uploaded_file($file_upload['tmp_name'],$target_path);
        // var_dump($path_file);
        // var_dump($upimg);
        // die;
    } else {
        $file_name = $_POST['image_old'];
    }

   

        customer_update_optimize($id,  $name,  $file_name);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = customer_select_by_id($id);
        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
   
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "tai_khoan/cap_nhat_tk_form.php";
require '../layout.php';