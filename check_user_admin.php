<?php

require_once "global.php";


if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header('location: site/tai_khoan/dang-nhap-form.php');
    die;
}
?>