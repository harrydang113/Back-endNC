      <?php
          include('include/topbar.php');
      ?>

        <?php
        $idn=1;
        if (isset($_GET['idn'])){
          $idn=$_GET['idn'];
        }
      
        //lấy dữ liệu trên csdl tbl_nhomtin
          $sql="SELECT * from tbl_nhomtin where idNhom='$idn'";
          $nhomtins=$db->query($sql);
          $row_nhomtin=$nhomtins->fetch_assoc();
          $tennhomtin=$row_nhomtin['TenNhom'];

          //Lấy tổng số tin
          $sotintren1trang = 3;
          $sql="SELECT * from tbl_tin where idNhom='$idn'";
          $sql_tins=$db->query($sql);
          $tong=$sql_tins->num_rows;
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

            $sql="SELECT * from tbl_tin where idNhom='$idn' order by idTin desc limit $tinbatdau,$sotintren1trang";
            $tins=$db->query($sql);
          
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
              <div class="img-product col-md-4">
                <img class="css-img-product" src="img/<?php echo $row_tin['Hinh'];?>" alt="Ảnh tin tức" />
              </div>
              <div class="detail-product col-md-8">        
                <div style="margin-left: 20px;">
                  <h4 style="margin-bottom: 20px;"><a href="tinchitiet.php?idt=<?php echo $row_tin['idTin']; ?>&idn=<?php echo $row_tin['idNhom']; ?>"><?php echo $row_tin['TieuDe'];?></a></h4>                  
                  <div class="description">
                    <p><?php echo $row_tin['TrichDan']; ?></p>
                  </div>
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
                      $st=$st.'tin.php?idn='.$idn.'&page='.$prev;
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
                        $st=$st.'tin.php?idn='.$idn.'&page='.$i;
                        $st=$st.'">'.$i.'</a></li>';
                        echo $st;
                      }else {
                    
                      $st= '<li class="page-item"><a class="page-link" href="';
                      $st =$st.'tin.php?idn='.$idn.'&page='.$i;
                      $st=$st.'">'.$i.'</a></li>';
                      echo $st;
                    }
                  }
                ?>
                <?php
                    if($tranghh!=$soluongtrang){
                      $next=$tranghh+1;
                      $st='<li class="page-item "><a class="page-link" href="';
                      $st=$st.'tin.php?idn='.$idn.'&page='.$next;
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
          
          </div><!--end: content-body-->

        </div> <!--end: content left-->



<?php
          //include('content.php');
          //include('include/detail.php');
          include('include/right.php');
          include('include/footer.php');
?>