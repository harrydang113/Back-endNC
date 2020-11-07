<?php
//kết nối CSDL
$server = "localhost";
$user_name = "root";
$password = "";
$db_name = "mydecortree";
//$conection = mysql_connect("localhost", "root", "");
//$conection = mysqli_connect($server, $user_name, $password,$db_name);
@$db = new mysqli($server, $user_name, $password, $db_name);
mysqli_query($db,'SET NAMES UTF8');

$connection_error = $db->connect_error;
if($connection_error != null){
//Thông báo lỗi ra giao diện web và kết thúc chương trình
	echo 'kết nối thất bại!';
	exit;
}
?>