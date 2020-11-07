<?php
 require_once('database.php');
//Lấy categoryID
if(isset($_GET['category_id'])){
   
   $category_id=$_GET['category_id'];
}else {
    $category_id=1;
}
// lấy tên loại sản phẩm hiện hành-categoryName
$query = "SELECT * FROM categories 
        WHERE categoryID = $category_id";
$category = $db->query($query);
$category = $category->fetch();
$category_name = $category['categoryName'];
// lây danh muc Loai sån phâm
$query = 'SELECT * FROM categories
            ORDER BY categoryID';
$categories = $db->query($query);
// Lấy các sacnr phẩm theo mã loại được chọn
$query = "SELECT * FROM products
        WHERE categoryID = $category_id
        ORDER BY productID";
$products = $db->query($query);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Sản phẩm Điện máy</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div id="page">

        <div id="header">
            <h1>Điện máy</h1>
        </div>

        <div id="main">

            <h1>Danh sách Sản Phẩm</h1>

            <div id="sidebar">
                <!-- hiển thị danh sách các loại sản phẩm -->
                <h2>Loại Sản phẩm</h2>
                <ul class="nav">
                <?php
                    while ($category = $categories->fetch()) {
                        
                ?>
                    <li><a href="?category_id=<?php echo $category['categoryID']; ?>"> <?php echo $category['categoryName'];?> </a></li>
                    <?php } ?>
                    <!--<li><a href="#"> loại 2 </a></li>
                    <li><a href="#"> loại ... </a></li>-->
                </ul>
            </div>

            <div id="content">
                <!-- hiển thị bản sản phẩm -->
                <h2><?php echo $category_name;?></h2>
                <table>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th class="right">Giá</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php
                        foreach ($products as $product ): 
                           
                    ?>
                    <tr>
                        <td><?php echo $product['productCode'];?></td>
                        <td><?php echo $product['productName'];?></td>
                        <td class="right"><?php echo $product['listPrice'];?></td>
                        <td><a href="delete.php?product_id=<?php echo $product['productID']; ?>
                                &category_id=<?php echo $product['categoryID']; ?>">Xóa</a></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                  <!--  <tr>
                        <td>code 2</td>
                        <td>sản phẩm 2</td>
                        <td class="right">xxx</td>
                        <td><a href="#">Xóa</a></td>
                    </tr>
                    <tr>
                        <td>code ...</td>
                        <td>sản phẩm ..</td>
                        <td class="right">xxx</td>
                        <td><a href="#">Xóa</a></td>
                    </tr>-->
                </table>
                <p><a href="add_product_form.php">THÊM SẢN PHẨM</a></p>
            </div>
        </div>

        <div id="footer">
            <p>&copy; <?php echo date("Y"); ?></p>
        </div>

    </div><!-- end page -->
</body>
</html>