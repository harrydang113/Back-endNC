<?php
          include('include/topbar.php');
      ?>

        <?php
        if (isset($_GET['idt']) && isset($_GET['idn'])){
          $idt=$_GET['idt'];
          $idn=$_GET['idn'];
        }
        
          $sql="SELECT * from tbl_tin where idTin='$idt'";
          $tins=$db->query($sql);

          $sql="SELECT * from tbl_nhomtin where idNhom='$idn'";
          $nhomtins=$db->query($sql);
          $row_nhomtin=$nhomtins->fetch_assoc();
          $tennhomtin=$row_nhomtin['TenNhom'];
        
        ?>



        <div class="content-left col-md-8"> <!--content left-->
          <div class="content-header">
            <p class="text-content-header"><?php echo "Tin ".$tennhomtin;?></p>
          </div>

          <div class="content-body">  <!--content-body-->
          <?php
                $rows_tin=$tins->num_rows;
                  for ($i=0; $i <$rows_tin; $i++) { 
                    $row_tin=$tins->fetch_assoc();
            ?>
          <div class="container-content-detail-product row">              
              <h4><?php echo $row_tin['TieuDe']; ?></h4>                  
              <div class="description">
                    <p><?php echo $row_tin['TrichDan']; ?></p>
              </div>              
              <div class="img-product">
                <img class="css-img-product-detail" src="img/<?php echo $row_tin['Hinh'];?>" alt="Ảnh tin tức" />
              </div>
              <div class="detail-product">              
                <p><?php echo $row_tin['NoiDung']; ?></p>             
              </div>
              <?php
                  }
            ?>
          
            </div>
         
          
       
            <div class="content-like">            
              <p class="text-content-body">Xem thêm: </p>
              <ul class="text-content-body">  
              <?php
              $sql="SELECT * from tbl_tin where idNhom='$idn' and idTin!='$idt'";
              $liketins=$db->query($sql);
              
              $rows_liketin=$liketins->num_rows;
                for ($i=0; $i <$rows_liketin; $i++): 
                  $row_liketin=$liketins->fetch_assoc();
          ?>   
                         
                <li><a href="tinchitiet.php?idt=<?php echo $row_liketin['idTin']; ?>&idn=<?php echo $row_liketin['idNhom']; ?>"><?php echo $row_liketin['TieuDe']; ?></a></li>  
                <?php endfor; ?>            
              </ul>
            </div> 
            
          </div><!--end: content-body-->

        </div> <!--end: content left-->



<?php
          //include('content.php');
          //include('include/detail.php');
          include('include/right.php');
          include('include/footer.php');
?>