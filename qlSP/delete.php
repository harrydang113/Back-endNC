<?php
//lấy các ID
$product_id = $_GET['product_id'];
$category_id = $_GET['category_id'];
//xóa sản phẩm từ CSDL
require_once('database.php');
$query = "DELETE FROM products
WHERE productID = '$product_id'";
$db->exec($query);
//hiển thị lại trang danh mục sản phẩm
header('location:index.php?category_id='.$category_id);
?>