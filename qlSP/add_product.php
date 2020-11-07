<?php
// Lấy dữ liệu sản phẩm sẽ thêm
$category_id = $_POST['category_id'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];
if (empty($code)|| empty($name)|| empty($price)) {
$error = "Thông tin sản phẩm không đầy đủ, vui lòng kiểm tra lại";  
include ('error.php');
} else{ 
    require_once('database.php'); 
    $query = "INSERT INTO products
(categoryID, productCode, productName, listPrice)
VALUES
('$category_id', '$code', '$name', '$price')";
$db->exec($query);
header('location:add_product_form.php');

}
?>