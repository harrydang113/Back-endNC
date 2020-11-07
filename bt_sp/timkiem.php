<?php
          include('include/top.php');
      ?>
        <?php
        $tukhoa='';
        if (isset($_POST['timkiem'])){
              $tukhoa=$_POST['tutimkiem'];
            }elseif (isset($_GET['timkiem2'])) {
              $tukhoa=$_GET['timkiem2'];
            }
        $sotintren1trang = 3;
        $sql="SELECT * from t_sanpham where TenSanPham like '%$tukhoa%'";
        $sql_sp=$db->query($sql);
        $tong=$sql_sp->num_rows;
        $soluongtrang = 1;
          if($tong > $sotintren1trang){
        $soluongtrang=ceil($tong/$sotintren1trang);
          } 
          if (isset($_GET['page'])) {
            $tranghh=$_GET['page'];
          }else {
          $tranghh= 1;
          }
          $tinbatdau=($tranghh-1)*$sotintren1trang;

          $sql="SELECT * from t_sanpham where TenSanPham like '%$tukhoa%' order by SanPhamID desc limit $tinbatdau,$sotintren1trang";
          $sp=$db->query($sql);

          ?>

        <div class="content-left col-md-8"> <!--class="content-left col-md-8"-->

          <div class="content-header">
            <p class="text-content-header">Tìm kiếm</p>
          </div>

          <div class="content-body">   <!--class="content-body"--> 
          <?php
                $rows_loaisp=$sp->num_rows;
                  for ($i=0; $i <$rows_loaisp; $i++) { 
                    $row_loaisp=$sp->fetch_assoc();
            ?>        
            <div class="container-list-product col-sm-12 col-md-12">             
              <div class="row">
                <div class="row-pro col-sm-6 col-md-6">                
                  <a href="./detail-product.php">
                    <img class="css-img" src="./img/<?php echo $row_loaisp['Hinh'];?>"/>
                  </a>
                  <a href="./detail-product.php?idt=<?php echo $row_loaisp['SanPhamID']; ?>&idn=<?php echo $row_loaisp['LoaiID']; ?>">
                    <h5 class="text-product"><?php echo $row_loaisp['TenSanPham'];?></h5>
                  </a>
                  <p class="text-product"><?php echo "Đơn giá ".$row_loaisp['GiaSanPham'];?></p>
                </div>
                </div>
                
              </div>
            
            <?php
               }
            ?> 
            <nav aria-label="Page navigation example">
             <ul class="pagination justify-content-center">
                  <?php
                    if ($tranghh>1) {
                      $prev=$tranghh-1;
                      $st='<li class="page-item "><a class="page-link" href="';
                      $st=$st.'timkiem.php?timkiem2='.$tukhoa.'&page='.$prev;
                      $st=$st.'"tabindex="-1" aria-disabled="true">Previous</a></li>';
                      echo $st;
                    }else {

                $st='<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>';
                echo $st;
                    }
                ?>
                <?php
                    for ($i=1; $i <=$soluongtrang ; $i++) { 
                      if ($i==$tranghh) {
                        $st='<li class="page-item disabled"><a class="page-link" href="';
                        $st=$st.'timkiem.php?timkiem2='.$tukhoa.'&page='.$i;
                        $st=$st.'">'.$i.'</a></li>';
                        echo $st;
                      }else {
                    
                      $st= '<li class="page-item"><a class="page-link" href="';
                      $st =$st.'timkiem.php?timkiem2='.$tukhoa.'&page='.$i;
                      $st=$st.'">'.$i.'</a></li>';
                      echo $st;
                    }
                  }
                ?>
                <?php
                    if($tranghh!=$soluongtrang){
                      $next=$tranghh+1;
                      $st='<li class="page-item "><a class="page-link" href="';
                      $st=$st.'timkiem.php?timkiem2='.$tukhoa.'&page='.$next;
                      $st=$st.'">Next</a>';
                      echo $st;
                    }
                    else{
                      $st='<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>';
                      echo $st;
                    }
                  
                ?>
                
              </ul>
            </nav>
          </div><!--END class="content-body"-->         

          
        </div><!--class="content-left col-md-8"-->


       


      <?php
          include('include/right.php');
          include('include/foot.php');
      ?>
