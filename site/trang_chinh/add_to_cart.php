<?php  

require_once "../../global.php";
require_once "../../dao/commodities.php";

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

// nhận id của sản phẩm
$id = $_GET['product_id'];
// lấy ra thông tin của sản phẩm dựa vào id
$product = commodities_select_by_id($id);
// echo "dòn 1  <pre>";
// echo json_encode($product);


$cart = $_SESSION['cart'];
// echo json_encode($_SESSION['cart']);
$flag = -1;


// echo "fòng 2 d<br>";
// var_dump($cart);


echo "<br>";

foreach($cart as $key => $item) {
    // var_dump($key);
    // die;
    if($id == $item['id']){
        $flag = $key;
        break;
    }
}

// kiểm tra xem id của sản phẩm có xuất hiện trong giỏ hàng hay chưa
// nếu chưa 
if($flag == -1){
    // bổ sung thêm thuộc tính quantity = 1 vào mảng thông tin của sản phẩm
    $product['quantity'] = 1;
    // add sản phẩm vào mảng giỏ hàng
    $cart[] = $product;
}else{
    // nếu id của sp đã có trong giỏ hàng rồi
    // lấy ra số index của sản phẩm bị trùng
    // cập nhật số lượng quantity ++
    $cart[$flag]['quantity']++;
}
$_SESSION['cart'] = $cart;
// điều hướng trang web về trang thông tin giỏ hàng
header("location: $SITE_URL/trang_chinh/index.php");
?>