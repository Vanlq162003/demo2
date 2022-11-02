<?php

require "../../global.php";
require "../../dao/pdo.php";

require "../../dao/categories.php";
require "../../dao/commodities.php";

extract($_REQUEST);
if(exist_params('id')){
    $items =commodities_select_by_loai($id);

}
else if(exist_params('keywords')){
    $items =commodities_select_keyword($keywords);
}
else{
    $items= commodities_select_all();
}
$VIEW_NAME="liet-ke-ui.php";
$list_category=loai_selecAll();
require "../layout.php";