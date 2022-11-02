<?php
require "../../global.php";
require "../../dao/comments.php";
require_once "../check_admin.php";

require "../../dao/thong_ke.php";

extract($_REQUEST);
//--------------------------------//
if (exist_params("chart")) {
    $items=thong_ke_hang_hoa();
    $VIEW_NAME = "chart.php";
} else {
    $items= thong_ke_hang_hoa();
    $VIEW_NAME = "list.php";
}
$items = thong_ke_hang_hoa();
require "../index.php";
