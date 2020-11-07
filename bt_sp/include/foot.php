      </div>
      <!--end content-->


      <!--footer-->
      <div class="card text-center bg-green">
        <div class="card-footer text-muted">
          copyright 07-2020
        </div>
      </div>
      <!--end footer-->

    </div> <!--end wrapper-->
      


          
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
    <script>
          function xn_xoa_nhomtin(id) {
            var result = confirm("Bạn thật sự muốn xóa nhóm tin này!");
            if (result) {
              window.location.href="xoasp.php?id="+id;
            }
            
          }
    </script>
    <script>
          function validateForm(id) {
            var result = confirm("Cập nhật mẫu tin này không!");
            if (result) {
              return true;
            }else{
              window.location="quanlysp.php";
              return false;
            }
          }
    </script>
    
  </body>
</html>