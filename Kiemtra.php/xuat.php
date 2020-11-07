<?php
require 'top.php';
?>

<form method="post">
<h3>BÀI TẬP PHƯƠNG TIỆN GIAO THÔNG</h3>
<table>
    <tr><td>Thông tin xe khách</td></tr>
<tr>
<td>Biển số xe:</td><td><input type="text" name="bienso" /></td> 
</tr>
<tr>
<td>Màu sơn:</td><td><input type="text" name="mauson" > </td>
</tr>
<tr>
<td>Số chổ ngồi:</td><td><input type="text" name="socho" > <td>
</tr>
<tr>
<td><input type="submit" name="xuat" value="xuất thông tin" ></td>
</tr>
</table>
</form><br><br>
<?php

require_once 'kiemtra.php';

$xuat=new XeKhach;

if(isset($_POST['xuat'])){
    $xuat->getbienso($_POST['bienso']);
    $xuat->getmauson($_POST['mauson']);
    $xuat->getsocho($_POST['socho']);
    $xuat->showthongtin();
    $doanhthu=0;
    $socho=$_POST['socho'];
    if ($socho >40 ){
        $doanhthu=$socho*65000;}
        else{
            $doanhthu=$socho*45000;
        }
        echo"<br/> Doanh thu:".$doanhthu;
    }
?>


<?php 
 require 'bottom.php';
 ?>