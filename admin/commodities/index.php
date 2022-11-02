<?php
require "../../global.php";
require_once "../check_admin.php";

require_once "../../dao/pdo.php";
require_once "../../dao/commodities.php";
require_once "../../dao/categories.php";
extract($_REQUEST);


if (exist_params("btn_list")) {

    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_insert")) {
    // lấy dữ liệu từ form
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sell = $_POST["sell"];
    $view = $_POST["view"];
    $description = $_POST["description"];
    $category_id = $_POST["category_id"];
    $date_add = $_POST["date_add"];
    $special = $_POST["special"];
    $image_add= $_FILES["image"];
    $forder_img = save_file("image","$IMAGE_DIR/products/");

require "../../content/validate_server_add_hh.php";

if(!empty($nameerr) || !empty($sellerr) || !empty($imagerr) || !empty($priceerr) || !empty($category_iderr) || !empty($detailerr)){
    $VIEW_NAME = "add.php";
    header("location: ?nameerr=$nameerr&sellerr=$sellerr&imageerr=$imageerr&priceerr=$priceerr&descriptionerr=$descriptionerr&category_iderr=$category_iderr&date_adderr=$date_adderr");
}
    // insert db
    commodities_insert($name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);
    // show dữ liệu
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_edit")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    $category_all=loai_selecAll(); 
    $commodity_info = commodities_select_by_id($id);
    extract($commodity_info);

   
    // show dữ liệu
    $VIEW_NAME = "edit.php";
}
 else if (exist_params("btn_delete")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
   
    commodities_delete($id);


    // show dữ liệu
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_update")) {
    // lấy dữ liệu từ form
    $id = $_POST['id'];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sell = $_POST["sell"];
    $view = $_POST["view"];
    $description = $_POST["description"];
    $category_id = $_POST["category_id"];
    $date_add = $_POST["date_add"];
    $special = $_POST["special"];
    
    $file_upload = $_FILES["image_new"];
    if ($file_upload['size'] > 0) {
       
        $forder_img = uniqid()  . basename($file_upload['name']);
        $target_path = "$IMAGE_DIR/products/" .  $forder_img;

        move_uploaded_file($file_upload['tmp_name'], $target_path);
    } else {
        $forder_img = $_POST['image'];
    }
   
    commodities_update($id, $name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);


    // show dữ liệu
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else {
    require_once "../../dao/categories.php";
   
    $category_all=loai_selecAll();   
     $VIEW_NAME = "add.php";
}
require "../index.php";
