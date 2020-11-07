<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from tbl_nhomtin order by idNhom Desc";
  $sql_tins=$db->query($sql);
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Thêm nhóm mới</p>
          </div>
          <div class="content-body">
            <form method="post" name="addtin-form" enctype="multipart/form-data">
                 <table width="" align="center">
                        <tr>
                              <td>Tên nhóm:</td>
                              <td><input type="text" name="tennhom" size="45"></td>
                        </tr>
                        <tr>
                              <td>Tên khu Vực</td>
                              <td>
                                    <select name="loainhom" require="">
                                          <?php
                                                $sql="SELECT * from tbl_khuvuc";
                                                $sql_nhomtin=$db->query($sql);
                                                $rows_nhomtin=$sql_nhomtin->num_rows;
                                                for ($i=0; $i < $rows_nhomtin; $i++) { 
                                                      $row_nhomtin=$sql_nhomtin->fetch_assoc();
                                                
                                          ?>
                                    <option value="<?php echo $row_nhomtin['idKV'];?>"><?php echo $row_nhomtin['TenKV'];?></option>
                                          <?php } ?>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td colspan="2" align="center">
                              <input type="submit" name="luu" value="Thêm nhóm mới">
                              </td>  
                        </tr>
                 </table>       
            </form>
            <?php
                  if(isset($_POST['luu'])){
                        //$idnt=$_POST['idn'];
                        $tennhom=$_POST['tennhom'];
                               $nhomTIN=$_POST['loainhom'];
                               //luu tin
                               $sql_themtin = "INSERT INTO tbl_nhomtin(TenNhom,idKV) VALUES('$tennhom','$nhomTIN')";
                               $success=$db->query($sql_themtin);
                               if($success){$count = $db->affected_rows;
                               //echo "<p>save ok</p>";
                               echo "<script>location.href='quanlynhomtin.php';</script>";
                               }else {
                                     $error_message = $db->error;
                                     echo "<p>Error: $error_message</p>";
                                     }
                                     //header('location:addNhomTin.php');
                        }
                              
                  
            ?>
          </div>   <!--end class: content-body-->       
        </div>
<?php
  include('foot.php');
?>
     