<?php
  include('include/top.php');
?>
<?php
  $sql="SELECT * from t_sanpham order by MaSanPham Desc";
  $sql_sp=$db->query($sql);
?>


        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Nội dung quản lý</p>
          </div>
          <div class="content-body">
          <div style="margin:30px 0px 10px 70px">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="themtin.php">Thêm sản phẩm</a>
                </li>
              </ul>
            </div>
           <table width="90%" align="center">
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Mã code</th>
            <th>Đơn giá</th>
            <th>Hình 1</th>
            <th>Hình 2</th>
            <th>Mã loại</th>
              <?php
              $rows_sp=$sql_sp->num_rows;
                for ($i=0; $i <$rows_sp ; $i++) { 
                  $j=$i+1;
                  $row_sp=$sql_sp->fetch_assoc();
                  $masp=$row_sp['MaSanPham'];
                  $tensp=$row_sp['TenSanPham'];
                  $macode=$row_sp['MaCode'];
                  $dongia=$row_sp['DonGia'];
                  $hinh1=$row_sp['Hinh1'];
                  $hinh2=$row_sp['Hinh2'];
                  $maloai=$row_sp['MaLoai'];

                  echo "<tr>";
                       echo "<td>$j</td><td>$masp</td><td>$tensp</td><td>$macode</td><td>$dongia</td><td> <img src='img/$hinh1' alt='Girl in a jacket' width='100' height='100'></td><td><img src='img/$hinh2' alt='Girl in a jacket' width='100' height='100'></td><td>$maloai</td>"; 
                       echo"<td>";
                          echo "<a href='suaSP.php?id=$masp'>Sửa</a> | ";
                          echo "<a href='xoatin.php?id=$masp'>Xóa</a>";
                       echo"</td>";
                  echo "</tr>";
                }
              ?>
           </table>
            
          </div>   <!--end class: content-body-->       
        </div>



<?php
  include('include/bottom.php');
?>