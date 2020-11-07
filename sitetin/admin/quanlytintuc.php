<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from tbl_tin order by idTin Desc";
  $sql_tins=$db->query($sql);
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Nội dung</p>
          </div>
          <div class="content-body">
            <div style="margin:30px 0px 10px 70px">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="themtin.php">Thêm tin mới</a>
                </li>
              </ul>
            </div>
           <table width="90%" align="center">
            <th>STT</th>
            <th>ID Nhóm</th>
            <th>ID Tin</th>
            <th>Tiêu Đề</th>
            <th>Xử lý</th>
              <?php
              $rows_tin=$sql_tins->num_rows;
                for ($i=0; $i <$rows_tin ; $i++) { 
                  $j=$i+1;
                  $row_tin=$sql_tins->fetch_assoc();
                  $idnhom=$row_tin['idNhom'];
                  $idtin=$row_tin['idTin'];
                  $tieude=$row_tin['TieuDe'];
                  echo "<tr>";
                       echo "<td>$j</td><td>$idnhom</td><td>$idtin</td><td>$tieude</td>"; 
                       echo"<td>";
                          echo "<a href='suatin.php?id=$idtin'>Sửa</a> | ";
                          echo "<a href='xoatin.php?id=$idtin'>Xóa</a>";
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
     