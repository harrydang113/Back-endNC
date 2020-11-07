<?php 
  include('top.php');
  if(isset($_GET['id'])){
      $idnhom = $_GET['id'];
      $query = "SELECT * FROM tbl_nhomtin WHERE idNhom=$idnhom";
      $sql_tin = $db->query($query);
      $sql_tin = $sql_tin->fetch_assoc();
      $idnhomtincu=$sql_tin['idKV'];
      //lấy tên nhóm cũ 
       $sql = "SELECT * FROM tbl_khuvuc WHERE idKV=$idnhomtincu";
       $sql_nhomtincu = $db->query($sql);
       $sql_nhomtincu = $sql_nhomtincu->fetch_assoc();
       $tennhomtincu = $sql_nhomtincu['TenKV'];
    }
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Cập nhật nhóm</p>
          </div>
          <div class="content-body">
            <form method="post" name="addtin-form" enctype="multipart/form-data">
                 <table width="80%" align="center">
                        <tr>
                              <td>Tên nhóm:</td>
                              <td><input type="text" name="tennhom" size="45"value="<?php echo $sql_tin['TenNhom'];?>" ></td>
                        </tr>
                        <tr>
                              <td>Tên khu Vực</td>
                              <td>
                                    <select name="loainhom" require="">
                                    <option value="<?php echo $idnhomtincu;?>"><?php echo $tennhomtincu;?></option>
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
                              <input type="submit" name="luusua" value="Cập nhật nhóm">
                              </td>  
                        </tr>
                 </table>       
            </form>
            <?php
                  if(isset($_POST['luusua'])){
                        //$idnt=$_POST['idn'];
                        $tennhom=$_POST['tennhom'];
                               $nhomTIN=$_POST['loainhom'];
                               //luu tin
                               $sql_themtin = "UPDATE tbl_nhomtin SET Tennhom='$tennhom',idKV='$nhomTIN' WHERE idNhom='$idnhom'";
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
     