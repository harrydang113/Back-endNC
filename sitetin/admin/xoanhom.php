<?php
if (session_status() == PHP_SESSION_NONE){
       session_start();
 }
 if(!isset($_SESSION['admin'])){
       echo "<script>location.href='login.php';</script>";
}
       require_once "../libs/ketnoiCSDL.php";
       if(isset($_GET['id'])){
             $idnhom=$_GET['id'];
             $sql_xoanhom = "DELETE FROM tbl_nhomtin WHERE idNhom=$idnhom";
             $success = $db->query($sql_xoanhom);
             if($success){$count = $db->affected_rows;
             //echo "<p>save ok</p>";
             echo "<script>location.href='quanlynhomtin.php';</script>";
               }else {
                     $error_message = $db->error;
                     echo "<p>Error: $error_message</p>";
                     }
                  }
?>