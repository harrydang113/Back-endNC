<?php 
include('include/top.php');
  if(isset($_GET['id'])){
        $idsp = $_GET['id'];
        $query = "SELECT * FROM t_sanpham WHERE MaSanPham=$idsp";
        $sql_sp = $db->query($query);
        $sql_sp = $sql_sp->fetch_assoc();
        $idloaicu=$sql_sp['MaLoai'];
        //lấy tên nhóm cũ 
         $sql = "SELECT * FROM t_dmloai WHERE MaLoai=$idloaicu";
         $sql_loaicu = $db->query($sql);
         $sql_loaicu = $sql_loaicu->fetch_assoc();
         $tenloaicu = $sql_loaicu['TenLoai'];
      }
      ?>
      

        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Cập nhật tin</p>
          </div>
          <div class="content-body">
            <form method="post" name="addtin-form" enctype="multipart/form-data" action="" onsubmit="return validateForm();">
                 <table width="" align="center">
                        <tr>
                              <td>Tên sản phẩm</td>
                              <td><input type="text" name="tensp" size="70" value="<?php echo $sql_sp['TenSanPham'];?>"></td>
                        </tr>
                        <tr>
                              <td>Mã code:</td>
                              <td><input type="text" name="macode"size="20" value="<?php echo $sql_sp['MaCode'];?>"></td>
                            
                             
                        </tr> 
                        <tr>
                              <td>Đơn giá:</td>
                              <td><input type="text" name="dongia"size="20" value="<?php echo $sql_sp['DonGia'];?>"></td>
                        </tr> 
                        <tr>
                        <td>Ảnh 1: </td>
                        <td><input type="text" name="anhcu1" size="70" value="<?php echo $sql_sp['Hinh1'];?>"></td>
                        </tr>
                        <tr>
                              <td>Ảnh trích dẫn 1:</td>
                              <td><input type="file" name="file-upload"></td>
                        </tr>
                        <tr>
                        <td>Ảnh 2: </td>
                        <td><input type="text" name="anhcu2" size="70" value="<?php echo $sql_sp['Hinh2'];?>"></td>
                        </tr>
                       
                    
                       
                        <tr>
                              <td>Thuộc mã loại:</td>
                              <td>
                                    <select name="loai" require="">
                                    <option value="<?php echo $sql_loaicu;?>"><?php echo $tenloaicu;?></option>
                                          <?php
                                                $sql="SELECT * from t_dmloai";
                                                $sql_loai=$db->query($sql);
                                                $rows_loai=$sql_loai->num_rows;
                                                for ($i=0; $i < $rows_loai; $i++) { 
                                                      $row_loai=$sql_loai->fetch_assoc();
                                                
                                          ?>
                                    <option value="<?php echo $row_loai['MaLoai'];?>"><?php echo $row_loai['TenLoai'];?></option>
                                          <?php } ?>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td colspan="2" align="center">
                              <input type="submit" name="luusua" value="Cập nhật tin">
                              </td>  
                        </tr>
                 </table>       
            </form>
            <?php

require_once 'include/lira.php';



                  if(isset($_POST['luusua'])){
                  if (!empty($_POST)) {
                        $code=$_POST['macode'];
                  if(checkData($code,"macd")==false){
                  $errorcode="mã code sai qui cách,kiểm tra lại!";
                              $code='';
      
                  }else{
           
                        //$idnt=$_POST['idn'];
                        $tensp=$_POST['tensp'];
                        $dongia=$_POST['dongia'];
                        $filenameNew=$_POST['anhcu1'];
                        $fileUpload = $_FILES['file-upload'];
                         if($fileUpload['name'] != null){
                               $filename = $fileUpload['tmp_name'];
                               $filenameNew = $fileUpload['name'];
                               $destination = "img/" .$filenameNew;
                               move_uploaded_file($filename, $destination);
                               //copy($filename, $destination);
                               }
                               $filenameNew2=$_POST['anhcu2'];
                               $maloai=$_POST['loai'];
                            
                               //luu tin
                               $sql_suasp = "UPDATE t_sanpham SET TenSanPham='$tensp',MaCode='$code',DonGia='$dongia',Hinh1='$filenameNew',Hinh2='$filenameNew2',MaLoai='$maloai' WHERE MaSanPham='$idsp'";
                               $success=$db->query($sql_suasp);
                               if($success){$count = $db->affected_rows;
                               //echo "<p>save ok</p>";
                               echo "<script>location.href='01.php';</script>";
                               }else {
                                     $error_message = $db->error;
                                     echo "<p>Error: $error_message</p>";
                                     }
                                     //header('location:addNhomTin.php');
                        }
                  }
            }
           
                  
                              
                  
            ?>
          </div>   <!--end class: content-body-->       
        </div>
<?php
   include('include/bottom.php');
?>
     