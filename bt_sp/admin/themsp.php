<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from t_sanpham order by SanPhamID Desc";
  $sql_tins=$db->query($sql);
?>
      <div class="content-left col-md-12">
          <div class="content-header">
                  <p class="text-content-header">Thêm sản phẩm mới</p>
          </div>
            <div class="content-body">
                  <form method="post" name="addTin-form" enctype="multipart/form-data">
                        <table width="80%" align="center">
                              <tr>
                                    <td>Tên sản phẩm:</td>
                                    <td><input type="text" name="tensp" size="45"></td>
                              </tr>
                              <tr>
                                    <td>Ảnh trích dẫn: </td>
                                    <td><input type="file" name="file-upload" /></td>
                              </tr>
                              <tr>
                                    <td>Mô tả sản phẩm 1: </td>
                                    <td><textarea name="noidung" id="cknoidung"></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung");</script></td>
                              </tr>
                              <tr>
                                    <td>Mô tả sản phẩm 2: </td>
                                    <td><textarea name="noidung1" id="cknoidung1"></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung1");</script></td>
                              </tr>
                              <tr>
                                    <td>Giá sản phẩm:</td>
                                    <td><input type="text" name="giasp" size="45"></td>
                              </tr>
                              <tr>
                                    <td>Giảm giá sản phẩm:</td>
                                    <td><input type="text" name="giamgiasp" size="45"></td>
                              </tr>
                              <tr>
                                    <td>Thuộc loại sản phẩm:</td>
                                    <td><select name="loaisp" required="">  
                                          <?php
                                                $sql = "SELECT * FROM t_loaisp";
                                                $sql_loaisp= $db->query($sql);
                                                $rows_loaisp = $sql_loaisp->num_rows;
                                                for ($i=0; $i < $rows_loaisp; $i++){
                                                $rows_loaisp = $sql_loaisp->fetch_assoc(); 
                                          ?>
                                    <option value="<?php echo $rows_loaisp['LoaiID']; ?>"><?php echo $rows_loaisp['TenLoai']; ?></option>
                                                <?php } ?>
                                                </tr>

                              <tr>
                                    <td>Sản phẩm hót:</td>
                                    <td><input type="text" name="loaisp1" size="10"></td>          
            </select>
                  </td><tr><tr><td colspan="2" align="center">
                  <input type="submit" name="luu" value="Thêm sản phẩm"></td>
            </tr>
            </table>
            </form>
            <?php
                  if(isset($_POST['luu'])){
                        //$idnt=$_POST['idn'];
                        $tensp=$_POST['tensp'];
                      
                        $fileUpload = $_FILES['file-upload'];
                        $filenameNew='';
                         if($fileUpload['name'] != null){
                               $filename = $fileUpload['tmp_name'];
                               $filenameNew = $fileUpload['name'];
                               $destination = "../img/" .$filenameNew;
                               move_uploaded_file($filename, $destination);
                               //copy($filename, $destination);
                               }
                               $mota1=$_POST['noidung'];
                               $mota2=$_POST['noidung1'];
                               $giasp=$_POST['giasp'];
                               $giamgiasp=$_POST['giamgiasp'];
                               $loaiid=$_POST['loaisp'];
                               $sphot=$_POST['loaisp1'];
                               //luu tin
                               $sql_themtin = "INSERT INTO t_sanpham(LoaiID,TenSanPham,Hinh,MotaSanPham_1,MotaSanpham_2,GiaSanPham,GiamGiaSanPham,SanPhamHOT) VALUES('$loaiid','$tensp','$filenameNew','$mota1','$mota2','$giasp','$giamgiasp','$sphot')";
                               $success=$db->query($sql_themtin);
                               if($success){$count = $db->affected_rows;
                               //echo "<p>save ok</p>";
                               echo "<script>location.href='quanlysp.php';</script>";
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
     