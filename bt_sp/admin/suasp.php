<?php 
  include('top.php');
  if(isset($_GET['id'])){
        $idsp = $_GET['id'];
        $query = "SELECT * FROM t_sanpham WHERE SanPhamID=$idsp";
        $sql_sp = $db->query($query);
        $sql_sps = $sql_sp->fetch_assoc();
        $idnhomloaicu=$sql_sps['LoaiID'];
        //lấy tên nhóm cũ 
         $sql = "SELECT * FROM t_loaisp WHERE LoaiID=$idnhomloaicu";
         $sql_nhomloaicu = $db->query($sql);
         $sql_nhomloaicu = $sql_nhomloaicu->fetch_assoc();
         $tennhomloaicu = $sql_nhomloaicu['TenLoai'];
      }
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Cập nhật tin</p>
          </div>
          <div class="content-body">
            <form method="post" name="addtin-form" enctype="multipart/form-data"action="" onsubmit="return validateForm()";>
                <table width="80%" align="center">
                              <tr>
                                    <td>Tên sản phẩm:</td>
                                    <td><input type="text" name="tensp" size="45"value="<?php echo $sql_sps['TenSanPham'];?>"></td>
                              </tr>
                              <tr>
                        <td>Ảnh cũ: </td>
                        <td><input type="text" name="anhcu" size="70" value="<?php echo $sql_sps['Hinh'];?>"></td>
                        </tr>
                              <tr>
                                    <td>Ảnh trích dẫn: </td>
                                    <td><input type="file" name="file-upload" /></td>
                              </tr>
                              <tr>
                                    <td>Mô tả sản phẩm 1: </td>
                                    <td><textarea name="noidung" id="cknoidung"><?php echo $sql_sps['MotaSanPham_1'];?></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung");</script></td>
                              </tr>
                              <tr>
                                    <td>Mô tả sản phẩm 2: </td>
                                    <td><textarea name="noidung1" id="cknoidung1"><?php echo $sql_sps['MotaSanpham_2'];?></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung1");</script></td>
                              </tr>
                              <tr>
                                    <td>Giá sản phẩm:</td>
                                    <td><input type="text" name="giasp" size="45"value="<?php echo $sql_sps['GiaSanPham'];?>"></td>
                              </tr>
                              <tr>
                                    <td>Giảm giá sản phẩm:</td>
                                    <td><input type="text" name="giamgiasp" size="45"value="<?php echo $sql_sps['GiamGiaSanPham'];?>"></td>
                              </tr>
                              <tr>
                                    <td>Thuộc loại sản phẩm:</td>
                                    <td><select name="loaisp" required="">
                                    <option value="<?php echo $idnhomloaicu;?>"><?php echo $tennhomloaicu;?></option>  
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
                  <input type="submit" name="luusua" value="Sửa sản phẩm"></td>
            </tr>
            </table>
            </form>
            <?php
                  if(isset($_POST['luusua'])){
                        //$idnt=$_POST['idn'];
                        $tensp=$_POST['tensp'];
                        $filenameNew=$_POST['anhcu'];
                        $fileUpload = $_FILES['file-upload'];
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
                               $sql_suasp = "UPDATE t_sanpham SET LoaiID='$loaiid',TenSanPham='$tensp',Hinh='$filenameNew',MotaSanPham_1='$mota1',MotaSanpham_2='$mota2',GiaSanPham='$giasp',GiamGiaSanPham='$giamgiasp',SanPhamHOT='$sphot' WHERE SanPhamID='$idsp'";
                               $success=$db->query($sql_suasp);
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
     