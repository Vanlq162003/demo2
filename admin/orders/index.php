<?php
require_once "../../global.php";
require_once "../check_admin.php";

require "../../dao/orders_product.php";
extract($_REQUEST);

if (exist_params("id")) {
   $order_id = $_REQUEST['id'];
   $result = orders_select_by_product($order_id);
   $VIEW_NAME = "detail.php";
}
else if (exist_params('id_products', 'status', $_REQUEST)) {

   $id = $_REQUEST['id_products'];
   $status = $_REQUEST['status'];
   update_order($status, $id);
   $result = orders_list();
  
   $VIEW_NAME="list_orders.php";
} else {
   $result = orders_list();
   $VIEW_NAME = "list_orders.php";
}
require "../index.php";
