<?php


if(!isset($_SESSION['user']) || empty($_SESSION['user']) ||$_SESSION['user']['vai_tro']!==1){
    header('location: ../../site/tai_khoan/dang-nhap-form.php');
    die;
}
?>
