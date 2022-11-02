<?php
require "../../global.php";
require_once "../check_admin.php";
require "../../dao/pdo.php";
require "../../dao/comments.php";
require "../../dao/thong_ke.php";
extract($_REQUEST);

if (exist_params("id")) {
    if (exist_params("btn_delete")) {
        try {
            binh_luan_delete($id);
            $MESSAGE = "Xóa bình luận thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa bình luận thất bại";
        }
    }

    $items = binh_luan_select_by_hang_hoa($id);
    if (count($items) === 0) {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "comments/list.php";
    } else {
        $VIEW_NAME = "comments/detail.php";
    }
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "comments/list.php";
}
require "../index.php";
