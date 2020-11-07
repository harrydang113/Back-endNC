<?php
if (session_status() == PHP_SESSION_NONE){
       session_start();
 }
 if(!isset($_SESSION['admin'])){
       echo "<script>location.href='login.php';</script>";
}
       require_once "../libs/ketnoiCSDL.php";
       if(isset($_GET['id'])){
             $idsp=$_GET['id'];
             $sql_xoasp = "DELETE FROM t_sanpham WHERE SanPhamID=$idsp";
             $success = $db->query($sql_xoasp);
             if($success){$count = $db->affected_rows;
             //echo "<p>save ok</p>";
             echo "<script>location.href='quanlysp.php';</script>";
               }else {
                     $error_message = $db->error;
                     echo "<p>Error: $error_message</p>";
                     }
                  }
?>