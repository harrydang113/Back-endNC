<?php
$sql="select * from t_loaisp";
$sql_loaisp=$db->query($sql);
?>
       
       
       
        <div class="content-right col-md-4"><!--class="content-right col-md-4"-->
          <div class="content-header">
            <p class="text-content-header">Danh mục sản phầm</p>
          </div>
          <div class="content-body">
            <h5 class="text-content-body"></h5>
            <ul class="text-content-body">
            <?php $rows_loaisp=$sql_loaisp->num_rows;
                for ($i=0; $i <$rows_loaisp ; $i++) {
                  $row_loaisp=$sql_loaisp->fetch_assoc();
              ?>
              <li>
              <a href="01.php?idn=<?php echo $row_loaisp['LoaiID'] ?>"><?php echo $row_loaisp['TenLoai'];?></a>
              </li>
            <?php
                }
            ?>
            
            </ul>
          </div>
          <br />
          <div class="content-header">
            <p class="text-content-header">Sản phầm hot</p>
          </div>
          <div class="content-body">
            <h5 class="text-content-body"></h5>
            <ul class="text-content-body">
              <li>giá 1.000 - 1.999</li>
              <li>giá 2.000 - 2.999</li>
              <li>giá 3.000 - 5.999</li>
              <li>...</li>
            </ul>
          </div>

        </div><!--class="content-right col-md-4"-->