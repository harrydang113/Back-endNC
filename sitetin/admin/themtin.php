<?php 
  include('top.php');
?>
<?php
  $sql="SELECT * from tbl_tin order by idTin Desc";
  $sql_tins=$db->query($sql);
?>
      <div class="content-left col-md-12">
          <div class="content-header">
                  <p class="text-content-header">Thêm tin mới</p>
          </div>
            <div class="content-body">
                  <form method="post" name="addTin-form" enctype="multipart/form-data">
                        <table width="80%" align="center">
                              <tr>
                                    <td>Tiêu đề:</td>
                                    <td><input type="text" name="tieude" size="45"></td>
                              </tr>
                              <tr>
                                    <td>Trích dẫn: </td>
                                    <td><textarea name="trichdan" cols="90" rows="7"></textarea></td>
                              </tr>
                              <tr>
                                    <td>Ảnh trích dẫn: </td>
                                    <td><input type="file" name="file-upload" /></td>
                              </tr>
                              <tr>
                                    <td>Nội dung: </td>
                                    <td><textarea name="noidung" id="cknoidung"></textarea><script type="text/javascript">CKEDITOR.replace("cknoidung");</script></td>
                              </tr>
                              <tr>
                                    <td>Thuộc Nhóm tin:</td>
                                    <td><select name="loaitin" required="">  
                                          <?php
                                                $sql = "SELECT * FROM tbl_nhomtin";
                                                $sql_nhomtin = $db->query($sql);
                                                $rows_nhomtin = $sql_nhomtin->num_rows;
                                                for ($i=0; $i < $rows_nhomtin; $i++){
                                                $row_nhomtin = $sql_nhomtin->fetch_assoc(); 
                                          ?>
                                    <option value="<?php echo $row_nhomtin['idNhom']; ?>"><?php echo $row_nhomtin['TenNhom']; ?>
            </option>
            <?php } ?>
            </select>
                  </td><tr><tr><td colspan="2" align="center">
                  <input type="submit" name="luu" value="Thêm tin mới"></td>
            </tr>
            </table>
            </form>
            <?php
                  if(isset($_POST['luu'])){
                        //$idnt=$_POST['idn'];
                        $tieudeTIN=$_POST['tieude'];
                        $trichdanTIN=$_POST['trichdan'];
                        $fileUpload = $_FILES['file-upload'];
                        $filenameNew='';
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
                               $sql_themtin = "INSERT INTO tbl_tin(idNhom,TieuDe,TrichDan,Hinh,NoiDung) VALUES('$nhomTIN','$tieudeTIN','$trichdanTIN','$filenameNew','$noidungTIN')";
                               $success=$db->query($sql_themtin);
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
     