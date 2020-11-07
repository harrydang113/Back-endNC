<?php 
  include('top.php');
  if(isset($_GET['id'])){
        $idtin = $_GET['id'];
        $query = "SELECT * FROM tbl_tin WHERE idTin=$idtin";
        $sql_tin = $db->query($query);
        $sql_tin = $sql_tin->fetch_assoc();
        $idnhomtincu=$sql_tin['idNhom'];
        //lấy tên nhóm cũ 
         $sql = "SELECT * FROM tbl_nhomtin WHERE idNhom=$idnhomtincu";
         $sql_nhomtincu = $db->query($sql);
         $sql_nhomtincu = $sql_nhomtincu->fetch_assoc();
         $tennhomtincu = $sql_nhomtincu['TenNhom'];
      }
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Cập nhật tin</p>
          </div>
          <div class="content-body">
          <form method="post" name="addTin-form" enctype="multipart/form-data">
                        <table width="80%" align="center">
                              <tr>
                                    <td>Tiêu đề:</td>
                                    <td><input type="text" name="tieude" size="70"value="<?php echo $sql_tin['TieuDe'];?>"></td>
                              </tr>
                              <tr>
                                    <td>Trích dẫn: </td>
                                    <td><textarea name="trichdan" cols="90" rows="7"><?php echo $sql_tin['TrichDan'];?></textarea></td>
                              </tr>
                              <tr>
                                    <td>Ảnh cũ: </td>
                                    <td><input type="text" name="anhcu" size="70" value="<?php echo $sql_tin['Hinh'];?>"></td>
                              </tr>
                              <tr>
                                    <td>Ảnh trích dẫn: </td>
                                    <td><input type="file" name="file-upload" /></td>
                              </tr>
                              <tr>
                                    <td>Nội dung: </td>
                                    <td><textarea name="noidung" id="cknoidung"><?php echo $sql_tin['NoiDung'];?></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung");</script></td>
                              </tr>
                              <tr>
                                    <td>Thuộc Nhóm tin:</td>
                                    <td><select name="loaitin" required="">
                                    <option value="<?php echo $idnhomtincu;?>"><?php echo $tennhomtincu;?></option>  
                                          <?php
                                                $sql = "SELECT * FROM tbl_nhomtin";
                                                $sql_nhomtin = $db->query($sql);
                                                $rows_nhomtin = $sql_nhomtin->num_rows;
                                                for ($i=0; $i < $rows_nhomtin; $i++){
                                                $row_nhomtin = $sql_nhomtin->fetch_assoc(); 
                                          ?>
                                    <option value="<?php echo $row_nhomtin['idNhom']; ?>"><?php echo $row_nhomtin['TenNhom']; ?> </option>
            <?php } ?>
            </select>
                  </td><tr><tr><td colspan="2" align="center">
                  <input type="submit" name="luusua" value="Cập nhật tin"></td>
            </tr>
            </table>
            </form>
            <?php
                  if(isset($_POST['luusua'])){
                        //$idnt=$_POST['idn'];
                        $tieudeTIN=$_POST['tieude'];
                        $trichdanTIN=$_POST['trichdan'];
                        $filenameNew=$_POST['anhcu'];
                        $fileUpload = $_FILES['file-upload'];
                         if($fileUpload['name'] != null){
                               $filename = $fileUpload['tmp_name'];
                               $filenameNew = $fileUpload['name'];
                               $destination = "../img/" .$filenameNew;
                               move_uploaded_file($filename, $destination);
                               //copy($filename, $destination);
                               }
                               $noidungTIN=$_POST['noidung'];
                               $nhomTIN=$_POST['loaitin'];
                               //luu tin
                               $sql_suatin = "UPDATE tbl_tin SET idNhom='$nhomTIN',TieuDe='$tieudeTIN',TrichDan='$trichdanTIN',Hinh='$filenameNew',NoiDung='$noidungTIN' WHERE idTin='$idtin'";
                               $success=$db->query($sql_suatin);
                               if($success){$count = $db->affected_rows;
                               //echo "<p>save ok</p>";
                               echo "<script>location.href='quanlytintuc.php';</script>";
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
     