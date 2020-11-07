<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from t_loaisp order by LoaiID Desc";
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
                  <a class="nav-link active" href="themloai.php">Thêm Loại mới</a>
                </li>
              </ul>
            </div>
           <table width="90%" align="center">
            <th>STT</th>
            <th>Loại sản phẩm</th>
            <th>Tên loại</th>
            <th>ID xác thực</th>
            <th>Xử lý</th>
              <?php
              $rows_sp=$sql_sp->num_rows;
                for ($i=0; $i <$rows_sp ; $i++) { 
                  $j=$i+1;
                  $row_sp=$sql_sp->fetch_assoc();
                
                  $idloai=$row_sp['LoaiID'];
                  $tensp=$row_sp['TenLoai'];
                  $idxt=$row_sp['idXT'];

                  echo "<tr>";
                       echo "<td>$j</td><td>$idloai</td><td>$tensp</td><td>$idxt</td>"; 
                       echo"<td>";
                          echo "<a href='sualoai.php?id=$idloai'>Sửa</a> | ";
                          echo "<a href='xoaloai.php?id=$idloai'>Xóa</a>";
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
     
     