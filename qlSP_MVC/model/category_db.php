<?php
//lấy tất cả loại sản phẩm
function get_categories(){
    global $db;
    $query='SELECT * FROM categories
            ORDER BY categoryID';
    $result=$db->query($query);
    return $result;
}

//lấy tên loại theo 1 mã loại được cung cấp
function get_category_name($category_id){
    global $db;
    $query="SELECT * FROM categories
            WHERE categoryID='$category_id'";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
}
?>