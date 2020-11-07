<?php 
require('../model/database.php'); 
require('../model/product_db.php'); 
require('../model/category_db.php');

if (isset($_POST['action'])) {

$action	= $_POST['action'];
} else if (isset($_GET ['action'])){
    $action	= $_GET['action'];
} else {
$action= 'list_products';
}

if ($action == 'list_products'){
// lấy id của loại sản phẩm hiện thời
$category_id = $_GET['category_id']; 
if (!isset($category_id)){
    $category_id=1;
}

// Lấy sản phẩm và loại sản phẩm theo mã loại hiện thời
$category_name = get_category_name($category_id); 
$categories = get_categories();
$products = get_products_by_category($category_id);

// Hiển thị danh sách các sản phẩm
include('product_list.php');
} else if ($action == 'delete_product') {

// Lấy ID đươc GET lên từ trình duyệt
$product_id = $_POST['product_id'];
$category_id = $_POST['category_id'];

// gọi hàn xóa sản phẩm theo mã sản phẩm được GET
delete_product($product_id);
 
// hiển thị trang danh sách sản phẩm theo mã loại hiện thời
header("Location:.?category_id=$category_id");
} else if ($action == 'show_add_form'){
    $categories=get_categories(); 
    include('product_add.php');
} else if ($action=='add_product') { 
    $category_id =$_POST['category_id']; 
    $code=$_POST['code'];
    $name = $_POST['name'];
    $price=$_POST['price'];


// Kiểm tra các dữ liệu được nhập vào từ form
if (empty($code) || empty($name) || empty($price)) {
$error = "Dữ liệu không hợp lệ. Vui lòng kiểm tra lại";
include('../errors/error.php');
} else {
add_product($category_id, $code, $name, $price);

// Hiển thị trang danh sách sản phẩm theo mã loại hiện thời
header("location:.?category_id=$category_id");
}
}
?>