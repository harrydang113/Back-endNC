<?php
$sql="select * from tbl_nhomtin";
$sql_nhomtins=$db->query($sql);
?>

<div class="content-right col-md-4"><!--content right-->
          <div class="content-header">
            <p class="text-content-header">Danh mục tin tức</p>
          </div>
          <div class="content-body">
            <h5 class="text-content-body"></h5>
            <ul class="text-content-body">
              <?php $rows_nhomtins=$sql_nhomtins->num_rows;
                for ($i=0; $i <$rows_nhomtins ; $i++) {
                  $row_nhomtin=$sql_nhomtins->fetch_assoc();
              ?>
              <li>
              <a href="tin.php?idn=<?php echo $row_nhomtin['idNhom'] ?>"><?php echo $row_nhomtin['TenNhom'];?></a>
              </li>
            <?php
                }
            ?>
            </ul>
          </div>
        </div><!--end: content right-->