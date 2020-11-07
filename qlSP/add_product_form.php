<?php
require ('database.php');
$query = 'SELECT *
FROM categories
ORDER BY categoryID';
$categories = $db->query($query);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Sản phẩm Điện máy</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>Quản lý Sản phẩm</h1>
        </div>

        <div id="main">
            <h1>Thêm sản phẩm</h1>
            <form action="add_product.php" method="post"
                  id="add_product_form">

                <label>Loại sp:</label>
                <select name="category_id">
                <?php foreach ($categories as $category):?>
                    <option value="<?php echo $category['categoryID'];?>"><?php echo $category['categoryName'];?></option>
                <?php endforeach;?>
                   <!-- <option value="2">loại 2</option>
                    <option value="3">loại 3</option>-->
                </select>
                <br />

                <label>Mã SP:</label>
                <input type="input" name="code" />
                <br />

                <label>Tên SP:</label>
                <input type="input" name="name" />
                <br />

                <label>Giá:</label>
                <input type="input" name="price" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="Thêm" />
                <br />
            </form>
            <p><a href="index.php">Xem Danh mục Sản phẩm</a></p>
        </div><!-- end main -->

        <div id="footer">
            <p>
                &copy; <?php echo date("Y"); ?>
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>