<?php
session_start();
$ROOT_URL = "/xshop";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$SL_PER_PAGE = 10;
$UPLOAD_URL = "../../upload/";

// định nghĩa đường dẫn chứa ảnh sửa dụng trong upload
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/images";
function exist_params($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

// biến toàn cục
$VIEW_NAME = "index.php";
$MESSAGE = "";

/***
 * kiểm tra sự tồn tại của một tham số trong request 
 * @param string $fieldname là tên tham số cần kiểm tra s
 * return boolean true tồn tại
 */

function save_file($filename, $target_dir)
{
    $file_upload = $_FILES[$filename];
    $file_name =uniqid() . basename($file_upload['name']);
    $target_path = $target_dir .  $file_name;
    move_uploaded_file($file_upload['tmp_name'], $target_path);
    return $file_name;
}
/***
 * lưu file upload vào thư mục 
 * @param string $filename là tên trường file  
 * $param string $target_dir thư mục lưu file 
 * @return  tên file upload
 */
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/***
 * Tạo cookie
 * $param $name là tên cookie
 * $param $value là giá trị cookíe
 */

function delete_cookie($name)
{
    add_cookie($name, "", -1);
}

/**
 * đọc giá trị cookie 
 *$name là tên cookie
 */

function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}

/***
 * kiêmt tra đăng nhập và vai trò  sử dụng trong
 * các php trong admin hoặc php yêu cầu phải đc đăng nhập mới đc phép dử dụng trong
 */
function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
        if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
            return;
        }
    }
    $_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
    header("Location: $SITE_URL/tai_khoan/dang-nhap.php");
}
