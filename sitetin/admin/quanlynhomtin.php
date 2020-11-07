<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from tbl_nhomtin order by idNhom Desc";
  $sql_tins=$db->query($sql);
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Nhóm tin</p>
          </div>
          <div class="content-body">
            <div style="margin:30px 0px 10px 70px">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="themnhom.php">Thêm nhóm mới</a>
                </li>
              </ul>
            </div>
           <table width="90%" align="center">
            <th>STT</th>
            <th>ID Nhóm</th>
            <th>Tên Nhóm</th>
            <th>ID Khu Vực</th>
            <th>Xử lý</th>
              <?php
              $rows_tin=$sql_tins->num_rows;
                for ($i=0; $i <$rows_tin ; $i++) { 
                  $j=$i+1;
                  $row_tin=$sql_tins->fetch_assoc();
                  $idnhom=$row_tin['idNhom'];
                  $tennhom=$row_tin['TenNhom'];
                  $idkv=$row_tin['idKV'];
                  echo "<tr>";
                       echo "<td>$j</td><td>$idnhom</td><td>$tennhom</td><td>$idkv</td>"; 
                       echo"<td>";
                          echo "<a href='suanhom.php?id=$idnhom'>Sửa</a> | ";
                          echo "<a href='xoanhom.php?id=$idnhom'>Xóa</a>";
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
     