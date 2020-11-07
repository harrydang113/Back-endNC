<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from t_sanpham order by SanPhamID Desc";
  $sql_sp=$db->query($sql);
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Nội dung</p>
          </div>
          <div class="content-body">
            <div style="margin:30px 0px 10px 70px">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="themsp.php">Thêm sản phẩm</a>
                </li>
              </ul>
            </div>
           <table width="90%" align="center">
            <th>STT</th>
            <th>Sản phẩm ID</th>
            <th>Loại ID</th>
            <th>Tên sản phẩm</th>
            <th>Xử lý</th>
              <?php
              $rows_sp=$sql_sp->num_rows;
                for ($i=0; $i <$rows_sp ; $i++) { 
                  $j=$i+1;
                  $row_sp=$sql_sp->fetch_assoc();
                  $idsp=$row_sp['SanPhamID'];
                  $idloai=$row_sp['LoaiID'];
                  $tensp=$row_sp['TenSanPham'];
                  echo "<tr>";
                       echo "<td>$j</td><td>$idsp</td><td>$idloai</td><td>$tensp</td>"; 
                       echo"<td>";
                          echo "<a href='suasp.php?id=$idsp'>Sửa</a> | ";
                          echo "<a href='xoasp.php?id=$idsp'>Xóa</a>";
                       echo"</td>";
                  echo "</tr>";
                }
              ?>
           </table>

          </div>   <!--end class: content-body-->       
        </div>
<?php
  include('foot.php');
?>
     