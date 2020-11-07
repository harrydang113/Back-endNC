<?php 
  include('top.php');
  if(isset($_GET['id'])){
        $idsp = $_GET['id'];
        $query = "SELECT * FROM t_loaisp WHERE LoaiID=$idsp";
        $sql_sp = $db->query($query);
        $sql_sp = $sql_sp->fetch_assoc();
        $idnhomloaicu=$sql_sp['idXT'];
        //lấy tên nhóm cũ 
         $sql = "SELECT * FROM t_xacthuc WHERE idXT=$idnhomloaicu";
         $sql_nhomloaicu = $db->query($sql);
         $sql_nhomloaicu = $sql_nhomloaicu->fetch_assoc();
         $tennhomloaicu = $sql_nhomloaicu['motaXT'];
      }
?>
        <div class="content-left col-md-12">
          <div class="content-header">
            <p class="text-content-header">Cập nhật Loại</p>
          </div>
          <div class="content-body">
            <form method="post" name="addtin-form" enctype="multipart/form-data">
                 <table width="" align="center">
                 <tr>
                                    <td>Tên loại:</td>
                                    <td><input type="text" name="tenloai" size="45" value="<?php echo $sql_sp['TenLoai'];?>"></td>
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
                                   
                                 
                              
                              <td colspan="2" align="center">
                              <input type="submit" name="luusua" value="Cập nhật tin">
                              </td>  
                        </tr>
                 </table>       
            </form>
            <?php
                  if(isset($_POST['luusua'])){
                        //$idnt=$_POST['idn'];
                  
                              
                        $tenloai=$_POST['tenloai'];
                        $idxt=$_POST['loaixt'];
                               //luu tin
                               $sql_suasp = "UPDATE t_loaisp set TenLoai='$tenloai',idXT='$idxt' where LoaiID='$idsp'";    
                              $success=$db->query($sql_suasp);
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
     