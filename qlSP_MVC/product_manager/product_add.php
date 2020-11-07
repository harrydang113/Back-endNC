<?php include '../view/header.php'; ?>

<div id="main">

<h1>Thêm 1 sản phẩm</h1>
<form action="index.php" method="post" id="add_product_form">
<input type="hidden" name="action" value="add_product" />

<label>List loại sản phẩm: </label>
<select name="category_id">
<?php foreach ( $categories as $category ): ?>
 
<option value="<?php echo $category['categoryID']; ?>">
<?php echo $category['categoryName']; ?>
</options>
<?php endforeach; ?>
</select>
<br/>

<label>Mã code: </label>
<input type="input" name="code" />
<br/>


<label>Tên sản phẩm: </label>
<input type="input" name= "name" />
<br/>


<label>Giá: </label>
<input type="input" name="price" />
<br/>


<label>&nbsp;</label>
<input type="submit" vaIue="Thêm Sản Phẩm" />
<br/> <br/>
</form>
<p><a href="index.php?action=list_products">Xem danh sách sản phẩm</a></p>

</div>
<?php include '../view/footer.php'; ?>
