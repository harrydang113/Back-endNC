<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from t_Loaisp order by LoaiID Desc";
  $sql_tins=$db->query($sql);
?>
      <div class="content-left col-md-12">
          <div class="content-header">
                  <p class="text-content-header">Thêm Loại mới</p>
          </div>
            <div class="content-body">
                  <form method="post" name="addTin-form" enctype="multipart/form-data">
                        <table width="80%" align="center">
                              <tr>
                                    <td>Tên Loại:</td>
                                    <td><input type="text" name="tenloai" size="45"></td>
                              </tr>
                             
                            
                              <tr>
                                    <td>Xác thực:</td>
                                    <td><select name="loaixt" required="">  
                                          <?php
                                                $sql = "SELECT * FROM t_xacthuc";
                                                $sql_loaisp= $db->query($sql);
                                                $rows_loaisp = $sql_loaisp->num_rows;
                                                for ($i=0; $i < $rows_loaisp; $i++){
                                                $rows_loaisp = $sql_loaisp->fetch_assoc(); 
                                          ?>
                                    <option value="<?php echo $rows_loaisp['idXT']; ?>"><?php echo $rows_loaisp['motaXT']; ?></option>
                                                <?php } ?>
                                                </tr>

                                      
            </select>
                  </td><tr><tr><td colspan="2" align="center">
                  <input type="submit" name="luu" value="Thêm sản phẩm"></td>
            </tr>
            </table>
            </form>
            <?php
                  if(isset($_POST['luu'])){
                        //$idnt=$_POST['idn'];
                        $tenloai=$_POST['tenloai'];
                        $idxt=$_POST['loaixt'];
                         
                               //luu tin
                               $sql_themtin = "INSERT INTO t_loaisp(TenLoai,idXT)values('$tenloai','$idxt')";
                               $success=$db->query($sql_themtin);
                               if($success){$count = $db->affected_rows;
                               //echo "<p>save ok</p>";
                               echo "<script>location.href='quanlyloai.php';</script>";
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
     