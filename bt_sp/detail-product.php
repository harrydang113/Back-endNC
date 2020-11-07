      <?php
          include('include/top.php');
      ?>
          <?php
        if (isset($_GET['idt']) && isset($_GET['idn'])){
          $idt=$_GET['idt'];
          $idn=$_GET['idn'];
        }
        $sql="SELECT * from t_sanpham where SanPhamID='$idt'";
        $sp=$db->query($sql);

        $sql="SELECT * from t_loaisp where LoaiID='$idn'";
        $nhomsp=$db->query($sql);
        $row_loaisp=$nhomsp->fetch_assoc();
        $tennhomsp=$row_loaisp['TenLoai'];
      ?>

         <div class="content-left col-md-8"> <!--class="content-left col-md-8"-->


          <div class="content-header">
            <p class="text-content-header"><?php echo "sản phẩm ".$tennhomsp;?></p>
          </div>

          <div class="content-body">  <!--class="content-body"--> 
          <?php
                $rows_loaisp=$sp->num_rows;
                  for ($i=0; $i <$rows_loaisp; $i++) { 
                    $row_loaisp=$sp->fetch_assoc();
            ?>                    
            <div class="container-list-product col-sm-12 col-md-12">             
              <div class="row">

                <div class="img-product col-sm-6 col-md-6">
                  <img class="css-img-product" src="./img/<?php echo $row_loaisp['Hinh'];?>" />
                </div>  

                <div class="detail-product col-sm-6 col-md-6">
                  <div class="title-detail-product">
                    <span class="text-first"><?php echo $row_loaisp['TenSanPham'];?> </span>
                   
                  </div>
                  <h3><?php echo $row_loaisp['MotaSanpham_2'];?></h3>
                  <span class="red">$200.00</span>
                  <span class="line">$280.00</span>
                  <span class="free-ship">Free delivery (khi là sản phẩm hot)</span>
                  <div class="description">
                    <p><?php echo $row_loaisp['MotaSanPham_1'];?></p>
                  </div>
                </div>

              </div>
              <?php
                  }
            ?>
            </div>
           
            <div class="content-like">            
              <p class="text-content-body">Xem thêm: </p>
              <ul class="text-content-body">  
              <?php
              $sql="SELECT * from t_sanpham where LoaiID='$idn' and SanPhamID!='$idt'";
              $liketins=$db->query($sql);
              
              $rows_liketin=$liketins->num_rows;
                for ($i=0; $i <$rows_liketin; $i++): 
                  $row_liketin=$liketins->fetch_assoc();
          ?>   
                         
                <li><a href="detail-product.php?idt=<?php echo $row_liketin['SanPhamID']; ?>&idn=<?php echo $row_liketin['LoaiID']; ?>"><?php echo $row_liketin['TenSanPham']; ?></a></li>  
                <?php endfor; ?>            
              </ul>
            </div> 

          </div> <!--END class="content-body"-->   
      
      
        </div> <!--END class="content-left col-md-8"-->


       


      <?php
          include('include/right.php');
          include('include/foot.php');
      ?>
