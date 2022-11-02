

<?php
require "../../global.php";
require_once "../check_admin.php";
require_once "../../dao/pdo.php";
require_once "../../dao/categories.php";
extract($_REQUEST);

if (exist_params("btn_list")) {
    $items = loai_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_insert")) {
    // lấy dữ liệu từ form
    $name = $_POST["name"];
    require "../../content/validate_server_add_loai.php";
    if(!empty($nameerr)){
        $VIEW_NAME = "add.php";
        header("location: ?nameerr=$nameerr");
    }
    // insert db
    loai_insert($name);
    // show dữ liệu
    $items = loai_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_edit")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    $loai_info = loai_getInfo($id);
    extract($loai_info);

    // show dữ liệu
    $items = loai_selecAll();
    $VIEW_NAME = "edit.php";
} else if (exist_params("btn_update")) {
    // lấy dữ liệu từ form
    $id = $_POST['id'];
    $name = $_POST['name'];
    loai_update($id, $name);


    // show dữ liệu
    $items = loai_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_delete")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    
    loai_delete($id);


    // show dữ liệu
    $items = loai_selecAll();
    $VIEW_NAME = "list.php";
}
 else {
    $VIEW_NAME = "add.php";
}
require "../index.php";
