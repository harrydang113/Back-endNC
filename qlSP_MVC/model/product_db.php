<?php
//lay danh sách tat cå sán pham
function get_products() {
    global $db;
    $query = 'SELECT * FROM products
        ORDER BY productID';
        $products = $db->query($query); 
        return $products;
    }
//lấy danh sách tất cả sản phẩm theo mã 1 loại được yêu cầu
function get_products_by_category($category_id){
    global $db;
    $query = "SELECT * FROM products
    WHERE products.categoryID = '$category_id' 
    ORDER BY productID";
$products = $db->query($query);
return $products;
}

//Lấy ra 1 sản phẩm theo 1 mã loại được yêu cầu
function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM products
    WHERE productID = '$product_id'";
$product = $db->query($query);
$product = $product->fetch();
return $product;
}

//xóa 1 sản phẩm dựa trên mã sản phẩm được yêu cầu 
function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM products 
            WHERE productID = '$product_id'";
    $db->exec($query);
}

//thêm vào 1 sản phẩm
function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = "INSERT INTO products
        (categoryID, productCode, productName, listPrice)
    VALUES
        ('$category_id', '$code', '$name', '$price')"; 
    $db->exec($query);
}
?>
