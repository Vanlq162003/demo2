<?php
require '../../global.php';
require '../../dao/pdo.php';
require '../../dao/commodities.php';
//-------------------------------//
// extract($_REQUEST);
// // Truy vấn mặt hàng theo mã
// $hang_hoa = commodities_select_by_id($id);
// extract($hang_hoa);
// // Tăng số lượt xem lên 1
// commodities_tang_so_luot_xem($id);
// $VIEW_NAME = "hang_hoa/chi-tiet-ui.php";
// require '../layout.php';
?>
<?php
require "../../dao/comments.php";

extract($_REQUEST);

$hang_hoa = commodities_select_by_id($id);
extract($hang_hoa);
// tăng số lượt xem 

commodities_tang_so_luot_xem($id);

// hàng hóa cùng Loại
$hh_cung_loai = commodities_select_by_loai($id);

// bình luận 


$VIEW_NAME = "hang_hoa/chi-tiet-ui.php";
require "../layout.php";
